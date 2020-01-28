# StringyTemplate


[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D7.2-blue.svg)](https://php.net/)
[![Latest Stable Version](https://poser.pugx.org/dcsg/stringy-template/v/stable)](https://packagist.org/packages/dcsg/stringy-template)
[![License](https://poser.pugx.org/dcsg/stringy-template/license)](https://packagist.org/packages/dcsg/stringy-template)
[![Build Status](https://travis-ci.org/dcsg/stringy-template.svg?branch=master)](https://travis-ci.org/dcsg/stringy-template)
[![StyleCI](https://github.styleci.io/repos/174796258/shield?branch=master)](https://github.styleci.io/repos/174796258)
[![SymfonyInsight](https://insight.symfony.com/projects/e339c7bf-3d04-4e29-91e1-58a459525848/mini.svg)](https://insight.symfony.com/projects/e339c7bf-3d04-4e29-91e1-58a459525848)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=stringy-template&metric=alert_status)](https://sonarcloud.io/dashboard?id=stringy-template)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=stringy-template&metric=coverage)](https://sonarcloud.io/dashboard?id=stringy-template)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=stringy-template&metric=vulnerabilities)](https://sonarcloud.io/dashboard?id=stringy-template)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=stringy-template&metric=bugs)](https://sonarcloud.io/dashboard?id=stringy-template)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=stringy-template&metric=security_rating)](https://sonarcloud.io/dashboard?id=stringy-template)
[![Total Downloads](https://poser.pugx.org/dcsg/stringy-template/downloads)](https://packagist.org/packages/dcsg/stringy-template)


This Library provides a unified `S` Class that "glues" two amazing libraries. It integrates the [voku/stringy][link-stringy version of the library originally created by [Daniel St. Jules][link-stringy-author] and the [StringTemplate][link-string-template] Library create by [Nicolò Martini][link-string-template-author].
The **Stringy** Library is a **string manipulation** library, while the **String Template** is an engine to render string templates.

This Library was created because in my projects I've been using both libraries and always ended up in having them integrated into a single class to make it's usage simpler.    

## Install

Via Composer

```bash
$ composer require dcsg/stringy-template
```

## Usage

For the full list of features of Stringy see it's [documentation][link-stringy], for more details on the String Template you can also check their [documentation][link-string-template].

```php

echo S::render(
    'Hello, my name is {firstName} {lastName}.',
    ['firstName' => 'Daniel', 'lastName' => 'Gomes']
); 
// "Hello, my name is Daniel Gomes."


// Using conversion specifications from `sprintf`
echo S::render(
    'I have {num%.1f} {fruit}.',
    ['num' => 1.5345, 'fruit' => 'oranges']
);
// "I have 1.5 oranges."

echo S::join(['one', 'two', 'three'], ', ');
// "one, two, three"
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE OF CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hi@dcsg.me instead of using the issue tracker.

## Credits

- [Daniel Gomes][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/dcsg
[link-contributors]: ../../contributors
[link-stringy]: https://github.com/voku/Stringy#installation-via-composer-require
[link-stringy-author]: https://github.com/danielstjules
[link-string-template]: https://github.com/nicmart/StringTemplate
[link-string-template-author]: https://github.com/nicmart
