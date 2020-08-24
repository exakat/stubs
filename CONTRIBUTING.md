# Contributing

Contribution shall focus on the `origin` folder : adding new sources and updating the existing ones with newer versions and tags. 

Major and middle versions of frameworks, components or plat-forms will be considered : the last minor version in a middle version will be used. 

Minor versions, development versions or special patches, are not considered here : this aims to keep storage requirement reasonable. When you need one of them, you may generate them individually. 

## Pull Request Process

### Create a new stub source

1. Check that a previous configuration file exists. If so, follow the update process (next section)
2. Create a new .json file, with a unique and recognizable name. For example, the names used by 
   [composer](https://getcomposer.org/) and [packagist](https://www.packagist.org/) are recommended, 
   and shall be used as possible. 
3. Use the skeleton below to fill the file
	1. name is the name used for storing the stubs. It is easier to think about it as a folder in a folder. 
	2. URL : this is the source for the code. It may be any code source that Exakat may reach : git, svn, composer, zip...
	3. dir_ignore is an array of folders and files that may be ignored. Examples includes tests, data directories, documentations, cache. 
	4. stubs is a hash table : the key is the short name of the version, and the value is the actual tag or branch or revision that describes that versions. In the skeleton, ```"stubs":{"4.5":"4.5.0"}``` means that version 4.5 of the framework will be represented by tag ```4.5.0```. 
4. Create a Pull Request with your new file and submit it.

```
{
   "name":"slim/slim",
   "URL":"https://github.com/slimphp/Slim.git",
   "dir_ignore":["/tests"],
   "stubs":{"4.5":"4.5.0",
            "4.4":"4.4.0",
            "4.3":"4.3.0"
           }
}
```

### Update an existing stub source

1. Find the framework whose source has to be updated
2. Update the file, probably by adding a new version/tag line in the stubs section
3. Submit a PR. 

## Code of Conduct

### Our Pledge

In the interest of fostering an open and welcoming environment, we as
contributors and maintainers pledge to making participation in our project and
our community a harassment-free experience for everyone, regardless of age, body
size, disability, ethnicity, gender identity and expression, level of experience,
nationality, personal appearance, race, religion, or sexual identity and
orientation.


### Attribution

This Code of Conduct is an excerpt from the [Contributor Covenant][homepage], version 1.4,
available at [http://contributor-covenant.org/version/1/4][version]

[homepage]: http://contributor-covenant.org
[version]: http://contributor-covenant.org/version/1/4/