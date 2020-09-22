<?php

const RECURSIVE = true;
const FLAT      = false;

$configFile = $argv[1];

// Install exakat

$config = json_decode(file_get_contents('./origin/'.$configFile.'.json'));

print_r($config);

$tmpName = basename($config->name);
shell_exec('php exakat.phar init -p '.$tmpName.' -R '.$config->URL);


// Adapt config for better processing time
$ini = file_get_contents('projects/'.$tmpName.'/config.ini');
$ini = preg_replace("/ignore_dir.*\n/", '', $ini);
foreach($config->dir_ignore as $dir_ignore) {
    $ini .= "dir_ignore[] = \"$dir_ignore\";\n";
}
file_put_contents('projects/'.$tmpName.'/config.ini', $ini);

// Configure config/exakat.ini with rulesets and reports
// Option : update only, force update

foreach($config->stubs as $name => $tag) {
    print "$name => $tag\n";
    $begin = hrtime(true);
    shell_exec('cd projects/'.$tmpName.'/code; git checkout '.$tag.' 2>&1');
    
    shell_exec('php exakat.phar project -v -p '.$tmpName);
    
    if (!file_exists('./json/'.$config->name.'/'.$name)) {
        mkdir('./json/'.$config->name.'/'.$name, 0755, RECURSIVE);
    }
    rename('./projects/'.$tmpName.'/stubs.json', './json/'.$config->name.'/'.$name.'/stubs.json');

    if (!file_exists('./stubs/'.$config->name.'/'.$name)) {
        mkdir('./stubs/'.$config->name.'/'.$name, 0755, RECURSIVE);
    }
    rename('./projects/'.$tmpName.'/stubs.php', './stubs/'.$config->name.'/'.$name.'/stubs.php');
    $end = hrtime(true);
    
    print "Duration : ".number_format(($end - $begin) / 1000000, 2)." ms\n";
}

shell_exec('php exakat.phar remove -p '.$tmpName);


?>