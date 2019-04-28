# :palm_tree: Palmtree PHP-CS-Fixer Config

PHP-CS-Fixer config for Palmtree components

## Requirements
* PHP >= 5.6

## Installation

Use composer to add the package to your dev dependencies:

```bash
composer require palmtree/php-cs-fixer-config --dev
```

```json
"scripts": {
    "sniff": "vendor/bin/php-cs-fixer fix -v --dry-run --stop-on-violation --using-cache=no --diff --diff-format=udiff",
    "fix": "vendor/bin/php-cs-fixer fix --diff",
}
```

## Usage

Create a `.php_cs.dist` file in your project's root directory. 
You can copy a typical config file from this repository desired

```bash
$ cp vendor/palmtree/php-cs-fixer-config/.php_cs.dist .
```

Add the following entries to your `.gitignore` file:

```
/.php_cs.cache
/.php_cs
```

## Fixing Issues

### Manually

To fix issues manually, run the following command:

```bash
$ composer fix
```

To perform a dry run, run the following command:

```bash
$ composer sniff
```

### Pre-commit hook

Run the following to have PHP-CS-Fixer run on changed files before every commit:

```bash
$ cp vendor/palmtree/php-cs-fixer-config/git-hooks/pre-commit .git/hooks/pre-commit
$ chmod +x .git/hooks/pre-commit
```

## License

Released under the [MIT license](LICENSE)
