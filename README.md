# WP Plugin Rating · Eliasis component

[![Latest Stable Version](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/v/stable)](https://packagist.org/packages/eliasis-framework/wp-plugin-rating)
[![License](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/license)](LICENSE)

[Versión en español](README-ES.md)

Show plugin rating in WordPress administration pages for plugins developed with Eliasis Framework.

This component requires that the page where the action hook will be inserted has been created with [WP_Menu](https://github.com/Josantonius/WP_Menu).

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [Sponsor](#Sponsor)
- [License](#license)

---

<p align="center">
    <img src="resources/screenshot-1.png" alt="">
    <img src="resources/screenshot-2.png" alt="">
</p>

---

## Requirements

This component is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this component is through [Composer](http://getcomposer.org/download/).

To install **WP Plugin Rating**, simply:

    composer require eliasis-framework/wp-plugin-rating

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    composer require eliasis-framework/wp-plugin-rating --prefer-source

You can also **clone the complete repository** with Git:

    git clone https://github.com/eliasis-framework/wp-plugin-rating.git

## Available Methods

Available methods in this component:

### - Show WordPress plugin rating

```php
Hook::doAction('wp-plugin-rating\display', $slug);
```

| Atttribute | Description | Type | Required
| --- | --- | --- | --- |
| $slug | WordPress plugin slug. | string | Yes |

**@return** HTML output.

## Quick Start

To use this component with **Composer**:

```php
use Josantonius\Hook\Hook;
```

## Usage

### - Show rating of the Search Inside plugin

```php
Hook::doAction('wp-plugin-rating\display', 'search-inside');
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/eliasis-framework/wp-plugin-rating.git
    
    cd wp-plugin-rating

    bash bin/install-wp-tests.sh wordpress_test root '' localhost latest

    composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    composer phpunit

Run [WordPress](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius#contact)
