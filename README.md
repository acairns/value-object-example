# Simple Example of a Value Object

To get set up, simply install dependencies:

```bash
$ composer install
```

You can run the tests with:

```bash
$ ./vendor/bin/phpunit
```

## CapitalizedString

The `CapitalizedString` Value Object demonstrates how business invariants can be
encapsulated and protected within a class.

```php
$string = new CapitalizedString('foo'); // throws InvalidArgumentException
```

