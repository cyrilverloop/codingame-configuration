# Contributing

A contribution can be :
* adding a configuration for a puzzle with all tests, input and output files;
* adding default code to an existing configuration;
* adding any missing element;
* fixing any misconfiguration.

## Hierarchy

A configuration MUST be put in a directory named after the puzzle name.
This directory MUST be put in the corresponding difficulty directory inside the `./config/` directory.
Example : the "ASCII Art" easy configuration is in the `./config/easy/ASCIIArt/` directory.

A configuration directory consist of a [configuration file](#configuration-file), some [default codes](#default-codes)
and [input / output](#the-inputs-and-ouputs) directories.

To keep compatibility between file systems, the following characters MUST not be used for directories and files :
`NULL / | \ : * ? " < >` (spaces are allowed for test files only).

## Configuration file

The `config.json` file MUST use the following architecture :

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

* `path` : MUST be the path to the configuration;
* `name` : MUST be the name of the puzzle from CodinGame.
Single quote `'` MUST be replaced by `‘` for opening and by `’` for closing and apostrophe.
Double quote `"` MUST be replaced by `«` for opening and by `»` for closing;
* `alphanumName` : MUST be the name of the puzzle with only alpha-numeric characters (no space or special character).
It MUST be case insensitive and unique amongst all configurations.
It MUST start with a letter. The corresponding regex is : `[a-zA-Z]{1}[a-zA-Z0-9]{0,}`;
* `link` : MUST be the link to the puzzle in the CodinGame web IDE;
* `tests` : MUST list every tests from CodinGame in the same order.

Each test MUST contain :
* `name` : MUST be the name of the test from CodinGame.
Single quote `'` MUST be replaced by `‘` for opening and by `’` for closing and apostrophe.
Double quote `"` MUST be replaced by `«` for opening and by `»` for closing;
* `alphanumName` : MUST be the name of the test with only alpha-numeric characters (no space or special character).
It MUST be case insensitive and unique amongst all tests of the current configuration.
It MUST start with a letter. The corresponding regex is : `[a-zA-Z]{1}[a-zA-Z0-9]{0,}`;
* `file` : MUST be the name of the input and output files.
It SHOULD be prefixed with a number corresponding to the order of the test on CodinGame.
The extension of the file MUST be `.txt`.

## Default codes

The `./code/` directory of a configuration contains the default codes for a puzzle.
For example, the `./config/easy/ASCIIArt/code/` directory as a `CGCode.php` and a `CGCode.js`
for PHP and JavaScript respectively.
To add a default code, copy the default code from CodinGame in a `GCCode` file with the corresponding extension
found in the table below.

The default code MUST not contain the "Auto-generated code below aims at [...]" comment.

### Languages

Here is the list of languages supported by CodinGame.
Use the corresponding extension to add a default code :

| Language | Extension |
| -------- | --------- |
| Bash | sh |
| C | c |
| C++ | cpp |
| C# | cs |
| Clojure | clj |
| D | d |
| Dart | dart |
| F# | fs |
| Go | go |
| Groovy | groovy |
| Haskell | hs |
| Java | java |
| JavaScript | js |
| Kotlin | kt |
| Lua | lua |
| Objective-C | m |
| OCaml | ml |
| Pascal | pas |
| Perl | pl |
| PHP | php |
| Python 3 | py |
| Ruby | rb |
| Rust | rs |
| Scala | scala |
| Swift | swift |
| TypeScript | ts |
| VB.NET | vb |


## The inputs and ouputs

The `./input/` directory of a configuration contains the inputs of each tests.
The `./output/` directory of a configuration contains the expected outputs of each tests.
Each test MUST have an input and an output file.
A test MUST have the same input file name than the output.
These files MUST correspond to the `file` keys in the `config.json`. See [configuration](#configuration-file).
