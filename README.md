# CodinGame configuration

A project that contains [CodinGame](https://www.codingame.com/) input, output and default code.
It is used by projects like [CodinGame PHP tests](https://github.com/cyrilverloop/codingame-php-tests)
and [CodinGame JavaScript tests](https://github.com/cyrilverloop/codingame-js-tests)
to generate code and test in PHP and JavaScript respectively.
Those projects let you code in your favorite IDE, outside of the CodinGame web site.

[![License](https://img.shields.io/github/license/cyrilverloop/codingame-configuration)](https://github.com/cyrilverloop/codingame-configuration/blob/trunk/LICENSE)


## Content

The `./config/` directory contains the configuration from CodinGame.
It contains four sub-directories corresponding to the four levels of difficulty : `easy`, `medium`, `hard` and `expert`.

Here is an example for the easy "ASCII Art" puzzle :

* files are in the `./config/easy/ASCIIArt/` directory;
* default codes are in the `./config/easy/ASCIIArt/code/` directory.
Every files are named `CGCode.[language_entension]`.
Example : `CGCode.php` for the PHP language. See [languages](CONTRIBUTING.md#languages) for a list of extensions;
* the `./config/easy/ASCIIArt/input/` directory contains the inputs of each tests.
One file per test;
* the `./config/easy/ASCIIArt/output/` directory contains the expected outputs of each tests.
One file per test;
* the `./config/easy/ASCIIArt/config.json` file has the path to the configuration, the name of the puzzle, the link to CodinGame and the tests :

```json
{
    "path": "easy/ASCIIArt",
    "name": "ASCII Art",
    "alphanumName": "ASCIIArt",
    "link": "https://www.codingame.com/ide/puzzle/ascii-art",
    "tests": [
        {
            "name": "Test only one letter: E",
            "alphanumName": "TestOnlyOneLetterE",
            "file": "01 - test only one letter E.txt"
        },
        {
            "name": "Test MANHATTAN",
            "alphanumName": "TestMANHATTAN",
            "file": "02 - test MANHATTAN.txt"
        }
    ]
}
```


## Install

### PHP

```shellsession
composer require "cyril-verloop/codingame-configuration"
```


## Contributing

Contributions are welcome following the [contribution](CONTRIBUTING.md) guide.
