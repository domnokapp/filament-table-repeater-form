# This is my package filament-table-repeater-form

[![Latest Version on Packagist](https://img.shields.io/packagist/v/domnokapp/filament-table-repeater-form.svg?style=flat-square)](https://packagist.org/packages/domnokapp/filament-table-repeater-form)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/domnokapp/filament-table-repeater-form/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/domnokapp/filament-table-repeater-form/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/domnokapp/filament-table-repeater-form/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/domnokapp/filament-table-repeater-form/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/domnokapp/filament-table-repeater-form.svg?style=flat-square)](https://packagist.org/packages/domnokapp/filament-table-repeater-form)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require domnokapp/filament-table-repeater-form
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-table-repeater-form-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-table-repeater-form-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-table-repeater-form-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentTableRepeaterForm = new Domnokapp\FilamentTableRepeaterForm();
echo $filamentTableRepeaterForm->echoPhrase('Hello, Domnokapp!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Domnok App](https://github.com/domnokapp)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
