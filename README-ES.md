# WP Plugin Rating · Eliasis component

[![Latest Stable Version](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/v/stable)](https://packagist.org/packages/eliasis-framework/wp-plugin-rating)
[![License](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/license)](LICENSE)

[Versión en español](README-ES.md)

Mostrar la calificación del plugin en las páginas de administración de WordPress para plugins desarrollados con Eliasis Framework.

Este componente requiere que la página donde se insertará el gancho de acción haya sido creada con [WP_Menu](https://github.com/Josantonius/WP_Menu).

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

<p align="center">
    <img src="resources/screenshot-1.png" alt="">
    <img src="resources/screenshot-2.png" alt="">
</p>

---

## Requisitos

Este componente es soportado por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación

La mejor forma de instalar este componente es a través de [Composer](http://getcomposer.org/download/).

Para instalar **WP Plugin Rating**, simplemente escribe:

    composer require eliasis-framework/wp-plugin-rating

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    composer require eliasis-framework/wp-plugin-rating --prefer-source

También puedes **clonar el repositorio** completo con Git:

    git clone https://github.com/eliasis-framework/wp-plugin-rating.git

## Métodos disponibles

Métodos disponibles en este componente:

### - Mostrar calificación del plugin de WordPress

```php
Hook::doAction('wp-plugin-rating\display', $slug);
```

| Atributo | Descripción | Tipo de dato | Requerido | Por defecto
| --- | --- | --- | --- |
| $slug | Slug del plugin de WordPress. | string | Sí |

**@return** Salida HTML.

## Cómo empezar

Para utilizar este componente con **Composer**:

```php
use Josantonius\Hook\Hook;
```

## Uso

### - Mostrar calificación del plugin Search Inside

```php
Hook::doAction('wp-plugin-rating\display', 'search-inside');
```

## Tests

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    git clone https://github.com/eliasis-framework/wp-plugin-rating.git
    
    cd wp-plugin-rating

    composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    composer phpunit

Ejecutar pruebas de estándares de código para [WordPress](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    composer phpmd

Ejecutar todas las pruebas anteriores:

    composer tests

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
