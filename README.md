# WP Plugin Rating · Eliasis module

[![Latest Stable Version](https://poser.pugx.org/josantonius/wp_plugin-rating/v/stable)](https://packagist.org/packages/josantonius/wp_plugin-rating) [![Total Downloads](https://poser.pugx.org/josantonius/wp_plugin-rating/downloads)](https://packagist.org/packages/josantonius/wp_plugin-rating) [![Latest Unstable Version](https://poser.pugx.org/josantonius/wp_plugin-rating/v/unstable)](https://packagist.org/packages/josantonius/wp_plugin-rating) [![License](https://poser.pugx.org/josantonius/wp_plugin-rating/license)](https://packagist.org/packages/josantonius/wp_plugin-rating)

[Versión en español](README-ES.md)

Show plugin rating in WordPress administration pages for plugins developed with Eliasis Framework.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Usage](#usage)
- [Images](#images)
- [Contribute](#contribute)
- [Licensing](#licensing)
- [Copyright](#copyright)

---

### Installation

Install plugin module from [Composer](http://getcomposer.org/download/). In the root folder of plugin run:

    $ composer require Josantonius/WP_Plugin-Rating

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, sass files, docs...) you can use:

    $ composer require Josantonius/WP_Plugin-Rating --prefer-source

Or you can also clone the complete repository with Git:

	$ git clone https://github.com/Josantonius/WP_Plugin-Rating.git

### Requirements

This pluggin is supported by PHP versions 5.3 or higher and is compatible with HHVM versions 3.0 or higher.

### Usage

Run the following action where you want to show the rating:

```php
<?php
use Josantonius\Hook\Hook;

Hook::doAction('wp-plugin-rating', 'wp-plugin-slug');
```

### Images

![image](resources/screenshot-1.png)
![image](resources/screenshot-2.png)

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Licensing

This project is licensed under **GPL-2.0+**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).
