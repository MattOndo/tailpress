# Wordpress Site Theme

This is the custom Wordpress theme used on https://mattondo.io/. It is built from [TailPress](https://tailpress.io/) and uses [Carbon Fields](https://carbonfields.net/).

## Getting started

### Setup

* Run `npm install`
* Run `composer install`

### NPM Scripts

There are several NPM scripts available. You'll find the full list in the `package.json` file onder "scripts". A script is executed through the terminal by running `npm run script-name`.

| Script     | Description                                                                    |
|------------|--------------------------------------------------------------------------------|
| production | Creates a production (minified) build of app.js, app.css and editor-style.css. |
| dev        | Creates a development build of app.js, app.css and editor-style.css.           |
| watch      | Runs several watch scripts concurrently.                                       |
| watch-sync | Runs several watch scripts concurrently and starts `browser-sync`.             |

## About Tailpress

TailPress uses the [Tailwind CLI](https://tailwindcss.com/docs/installation#using-tailwind-cli), [PostCSS](https://postcss.org) and [esbuild](https://esbuild.github.io).

You will find the editable CSS and Javascript files within the `/resources` folder.

Before you use your theme in production, make sure you run `npm run production`.

## About Carbon Fields

[Carbon Fields](https://carbonfields.net/) - developer-oriented library for WordPress custom fields for all types of WordPress content.

Carbon fields can be used as a composer package for easy creation of custom fields in the WordPress administration panel.

Custom fields can be created for post types, taxonomy terms, users, comments, options, navigation menus and even widgets.

Supports PHP 5.6.20 or higher.

## Links

* [TailPress website](https://tailpress.io)
* [Screencasts](https://www.youtube.com/playlist?list=PL6GBdOp044SHIOSCZejodwr1HcYsC43wG)
* [Tailwind CSS Documentation](https://tailwindcss.com/docs)
* [Esbuild Documentation](https://esbuild.github.io)
* [Carbon Fields](https://carbonfields.net/)

## Contributors

* [Jeffrey van Rossum](https://github.com/jeffreyvr)
* [All contributors](https://github.com/jeffreyvr/tailpress/graphs/contributors)

## Licenses

* [TailPress MIT](https://github.com/jeffreyvr/tailpress/blob/master/LICENSE)
* [Carbon Fields GNU](https://github.com/htmlburger/carbon-fields/blob/development/license.txt)