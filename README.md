WordPress Boilerplate
=====================

![image](https://raw.githubusercontent.com/vinkla/vinkla.github.io/master/images/package-wordpress.png)

A [WordPress](https://github.com/WordPress/WordPress) boilerplate. This project is trying to simplify the way we're setting up a new WordPress project. [Don't repeat yourself](http://en.wikipedia.org/wiki/Don't_repeat_yourself).

This boilerplate requires PHP 5.4+ and is built with the latest version of [WordPress](https://github.com/WordPress/WordPress).

[![StyleCI](https://styleci.io/repos/13329845/shield?style=flat)](https://styleci.io/repos/13329845)
[![Latest Stable Version](http://img.shields.io/packagist/v/vinkla/wordpress.svg?style=flat)](https://packagist.org/packages/vinkla/wordpress)
[![License](https://img.shields.io/packagist/l/vinkla/wordpress.svg?style=flat)](https://packagist.org/packages/vinkla/wordpress)

## What's included?

WordPress as a dependency. Move your content out of WordPress core.

[WordPress Packagist](http://wpackagist.org/). Instead of installing plugins manually, specify them in the `composer.json`, they will added to the plugins directory automatically.

A boilerplate theme filled with actions and filters to get the most out of WordPress.

[Vance Lucas's](https://github.com/vlucas) great [PHP dotenv](https://github.com/vlucas/phpdotenv) package. Which loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.

[Joe Grainger's](https://github.com/jjgrainger) super [Custom Post Type Class](https://github.com/jjgrainger/wp-custom-post-type-class). It simplifies the way we do custom post types.

[Roots](https://github.com/roots) [Soild](https://github.com/roots/soil) plugin, clean up WordPress markup, use relative URLs, nicer search URLs, and disable trackbacks.

A Server Settings page. This page lists server configuration. Instead of login in to the server you can visit this page to get the necessary information. Located under *Settings > Server*.

## Installation
Start by creating a new project with composer.

```bash
composer create-project vinkla/wordpress awesome-project
```

Add the database credentials and [salts](https://api.wordpress.org/secret-key/1.1/salt) to the `.env` configuration environment file.
```
WP_DEBUG=false

DB_HOST=localhost
DB_NAME=wordpress
DB_USER=homestead
DB_PASSWORD=secret

GOOGLE_ANALYTICS_KEY=

AUTH_KEY=yourrandomstring
SECURE_AUTH_KEY=yourrandomstring
LOGGED_IN_KEY=yourrandomstring
NONCE_KEY=yourrandomstring
AUTH_SALT=yourrandomstring
SECURE_AUTH_SALT=yourrandomstring
LOGGED_IN_SALT=yourrandomstring
NONCE_SALT=yourrandomstring
```

Open up your browser and visit the project URL with `/wordpress/wp-admin/install.php` to install WordPress.

Login and visit *Settings > General* page and remove `/wordpress` from Site Address. This can also be updated in the `wp_options` table, the option name is `home`.

Thats it. We're done. Lets build stuff!

> Please note that if you aren't running your installation from the root you'll have to update [WP_CONTENT_URL](wp-config.php) in `wp-config.php`.

## Theming
Library configuration can be editet in the `boilerplate/config` directory. Visit [wp-custom-post-type-class](https://github.com/jjgrainger/wp-custom-post-type-class) to read about adding custom post types. Custom post types can be added within the `includes/post-types` directory.

The boilerplate doesn't include a way to create custom fields. Instead use [Advanced Custom Fields](http://www.advancedcustomfields.com/). It is specified by default in our `composer.json` file.

## License

The WordPress boilerplate is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
