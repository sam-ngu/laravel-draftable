# Easily draft eloquent models for later use.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/acadea/laravel-draftable.svg?style=flat-square)](https://packagist.org/packages/acadea/laravel-draftable)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/acadea/laravel-draftable/run-tests?label=tests)](https://github.com/acadea/laravel-draftable/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/acadea/laravel-draftable/Check%20&%20fix%20styling?label=code%20style)](https://github.com/acadea/laravel-draftable/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/acadea/laravel-draftable.svg?style=flat-square)](https://packagist.org/packages/acadea/laravel-draftable)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-laravel-draftable-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-laravel-draftable-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require acadea/laravel-draftable
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Acadea\Draftable\DraftableServiceProvider" --tag="draftable-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Acadea\Draftable\DraftableServiceProvider" --tag="draftable-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-draftable = new Acadea\Draftable();
echo $laravel-draftable->echoPhrase('Hello, Acadea!');
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

- [sam-ngu](https://github.com/sam-ngu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
