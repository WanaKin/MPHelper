# MPHelper
A PHP utility class to help with arbitary precision math

## Usage
All of the methods are documented with PHPdoc. README documentation is currently being worked on.

## Methods
The following examples will assume you have an `MPHelper` instance with the variable `$mp`. The number of decimal places in your result will also depend on the scale set.

### Scale
You can either set the scale in the constructor:

```php
$mp = new MPHelper(4);
```

Or set the scale by using the `setScale` method:

```php
$mp->setScale(4);
```

### round
The `round` method can round a multiprecision number (as a string) to the given number of decimal places. For example, in order to round '123.4567' to 2 decimal places, you would use:

```php
$mp->round('123.4567', 2); // Returns '123.46'
```

### add
The `add` method can add any number of multiprecision numbers together. Simply pass the numbers as strings:

```php
$mp->add('1','2','3','4.5'); // Returns '10.50'
```

### subtract
The `subtract` method returns the difference of the given multiprecision numbers.

```php
$mp->subtract('100', '25', '50'); // Returns 25
```

## Tests
Tests can be run with `phpunit`:

```shell
composer install
vendor/bin/phpunit
```
