# SqualoLaravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Just a small Laravel5 to send data to Squalo (squalo.jmilan.net).

## Install

Via Composer

``` bash
$ composer require jhmilan/SqualoLaravel
```

## Setup

Add the service provider to your config.app.php
``` bash
Jhmilan\SqualoLaravel\SqualoLaravelServiceProvider::class,
```

Add the facade to your config.app.php
``` bash
'SqualoLaravel' => Jhmilan\SqualoLaravel\Facades\SqualoLaravel::class,
```

Publish the config file (a new config/SqualoLaravel.php file will be created, populate your .env as per the variables in the file)
``` bash
php artisan vendor:publish --provider="Jhmilan\SqualoLaravel\SqualoLaravelServiceProvider"
```

## Usage

Send images to Squalo very easily. Just use the Squalo facade and call any of the following methods:

``` php
Squalo::emergency('My critical message');
Squalo::alert('My alert message');
Squalo::critical('My critical message');
Squalo::error('My error message');
Squalo::warning('My warning message');
Squalo::notice('My notice message');
Squalo::info('My info message');
Squalo::debug('My debug message');
```

## To-do

This package is still WIP, no time for tests or good docs yet! sorry

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email jhmilan@gmail.com instead of using the issue tracker.

## Credits

- [Jose H. Milán][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jhmilan/SqualoLaravel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jhmilan/SqualoLaravel/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jhmilan/SqualoLaravel.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jhmilan/SqualoLaravel.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jhmilan/SqualoLaravel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jhmilan/SqualoLaravel
[link-travis]: https://travis-ci.org/jhmilan/SqualoLaravel
[link-scrutinizer]: https://scrutinizer-ci.com/g/jhmilan/SqualoLaravel/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jhmilan/SqualoLaravel
[link-downloads]: https://packagist.org/packages/jhmilan/SqualoLaravel
[link-author]: https://github.com/jhmilan
[link-contributors]: ../../contributors
