# PHP stub archives

Archive of stubs files for PHP frameworks. Available in PHP and JSON formats.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Getting the stubs

Clone this repository, then extract the files that you need from the `json` or `stubs` (PHP scripts) folder. 

The files are stored by format, then version. in ``json/my/project/<versions>stubs.json`` and ``stubs/my/project/<versions>/stubs.php``.

You may have to check the `origin` folder, to find the exact name for a stub.


### Building stubs

#### Prerequisites

You need a local installation of Exakat to build the stubs. 

```
Give examples
```

#### Building

Create a configuration file in the ``origin`` folder. You may take a look at the available files, or check the [CONTRIBUTING.md](CONTRIBUTING.md) file for more details. 

```
cp origin/skeleton.json origin/my_project.json
edit origin/my_project.json
```

Run the generating script

```
php scripts/generator.php my_project
```

The resulting files are in ``json/my/project/<versions>stubs.json`` and ``stubs/my/project/<versions>/stubs.php``.


## Built With

* [Exakat](http://www.exakat.io/) - The PHP Smart analyzer

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.


## Authors

* **Damien Seguy** - *Initial work* - [Exakat](https://www.exakat.io/)

See also the list of [contributors](CONTRIBUTORS.md) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.txt](LICENSE.txt) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
