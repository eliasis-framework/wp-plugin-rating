# WP Plugin Rating · Eliasis component

[![Latest Stable Version](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/v/stable)](https://packagist.org/packages/eliasis-framework/wp-plugin-rating) [![Latest Unstable Version](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/v/unstable)](https://packagist.org/packages/eliasis-framework/wp-plugin-rating) [![License](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/ae4f0c7f751a449eaa616be5e38a6c2c)](https://www.codacy.com/app/Josantonius/wp-plugin-rating?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=eliasis-framework/wp-plugin-rating&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/eliasis-framework/wp-plugin-rating/downloads)](https://packagist.org/packages/eliasis-framework/wp-plugin-rating) [![Travis](https://travis-ci.org/eliasis-framework/wp-plugin-rating.svg)](https://travis-ci.org/eliasis-framework/wp-plugin-rating) [![WP](https://img.shields.io/badge/WordPress-Standar-1abc9c.svg)](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) [![CodeCov](https://codecov.io/gh/eliasis-framework/wp-plugin-rating/branch/master/graph/badge.svg)](https://codecov.io/gh/eliasis-framework/wp-plugin-rating)

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
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

<div style="margin: 0 auto;">
    <img src="resources/screenshot-1.png" alt="">
    <img src="resources/screenshot-2.png" alt="">
</div>

---

## Requisitos

Este componente es soportado por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar este componente es a través de [Composer](http://getcomposer.org/download/).

Para instalar **WP Plugin Rating**, simplemente escribe:

    $ composer require eliasis-framework/wp-plugin-rating

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require eliasis-framework/wp-plugin-rating --prefer-source

También puedes **clonar el repositorio** completo con Git:

    $ git clone https://github.com/eliasis-framework/wp-plugin-rating.git

## Métodos disponibles

Métodos disponibles en este componente:

### - Mostrar calificación del plugin de WordPress:

```php
Hook::doAction('get_plugin_rating', $slug);
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

### - Mostrar calificación del plugin Search Inside:

```php
Hook::doAction('get_plugin_rating', 'search-inside');
```

## Tests 

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    $ git clone https://github.com/eliasis-framework/wp-plugin-rating.git
    
    $ cd wp-plugin-rating

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código para [WordPress](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    $ composer phpmd

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [ ] Añadir nueva funcionalidad.
- [ ] Mejorar pruebas.
- [ ] Mejorar documentación.
- [ ] Refactorizar código para las reglas de estilo de código deshabilitadas. Ver [phpmd.xml](phpmd.xml) y [.php_cs.dist](.php_cs.dist).

## Contribuir

Si deseas colaborar, puedes echar un vistazo a la lista de
[issues](https://github.com/eliasis-framework/wp-plugin-rating/issues) o [tareas pendientes](#-tareas-pendientes).

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Ejecuta el comando `composer install` para instalar dependencias.
  Esto también instalará las [dependencias de desarrollo](https://getcomposer.org/doc/03-cli.md#install).
* Ejecuta el comando `composer fix` para estandarizar el código.
* Ejecuta las [pruebas](#tests).
* Crea una nueva rama (**branch**), **commit**, **push** y envíame un
  [pull request](https://help.github.com/articles/using-pull-requests).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2017 -2018 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).
