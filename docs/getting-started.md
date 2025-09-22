---
title: Getting Started
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

# Getting Started {#getting-started}

This is a starter template for creating a beautiful, customizable documentation site for your project with minimal effort. You’ll only have to change a few settings and you’re ready to go.

## Configuration {#getting-started-configuration}

<<<<<<< HEAD
As with all Jigsaw sites, configuration settings can be found in `config.php`; you can update the variables in that file with settings specific to your project. You can also add new configuration variables there to use across your site; take a look at the [Jigsaw documentation](http://jigsaw.tighten.co/docs/site-variables/) to learn more.
=======
As with all Jigsaw sites, configuration settings can be found in `config.php`; you can update the variables in that file with settings specific to your project. You can also add new configuration variables there to use across your site; take a look at the [Jigsaw documentation](http://jigsaw.tighten.co/project_docs/site-variables/) to learn more.
>>>>>>> cd427c7 (.)

```php
// config.php
return [
    'baseUrl' => 'https://my-awesome-jigsaw-site.com/',
    'production' => false,
    'siteName' => 'My Site',
    'siteDescription' => 'Give your documentation a boost with Jigsaw.',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'navigation' => require_once('navigation.php'),
];
```

<<<<<<< HEAD
> Tip: This configuration file is also where you’ll define any "collections" (for example, a collection of the contributors to your site, or a collection of blog posts). Check out the official [Jigsaw documentation](https://jigsaw.tighten.co/docs/collections/) to learn more.
=======
> Tip: This configuration file is also where you’ll define any "collections" (for example, a collection of the contributors to your site, or a collection of blog posts). Check out the official [Jigsaw documentation](https://jigsaw.tighten.co/project_docs/collections/) to learn more.
>>>>>>> cd427c7 (.)

---

### Adding Content {#getting-started-adding-content}

<<<<<<< HEAD
You can write your content using a [variety of file types](http://jigsaw.tighten.co/docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/docs` folder. If you change this, be sure to update the URL references in [navigation.php](/docs/navigation.php).

[Read more about navigation.](/docs/navigation)
=======
You can write your content using a [variety of file types](http://jigsaw.tighten.co/project_docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/docs` folder. If you change this, be sure to update the URL references in [navigation.php](/project_docs/navigation.php).

[Read more about navigation.](/project_docs/navigation)
>>>>>>> cd427c7 (.)

The first section of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.documentation` will render with `source/_layouts/documentation.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---
```

<<<<<<< HEAD
[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/docs/content-blade/)
=======
[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/project_docs/content-blade/)
>>>>>>> cd427c7 (.)

---

### Adding Assets {#getting-started-adding-assets}

Any assets that need to be compiled (such as JavaScript, Less, or Sass files) can be added to the `source/_assets/` directory, and Laravel Mix will process them when running `npm run dev` or `npm run prod`. The processed assets will be stored in `/source/assets/build/` (note there is no underscore on this second `assets` directory).

Then, when Jigsaw builds your site, the entire `/source/assets/` directory containing your built files (and any other directories containing static assets, such as images or fonts, that you choose to store there) will be copied to the destination build folders (`build_local`, on your local machine).

Files that don't require processing (such as images and fonts) can be added directly to `/source/assets/`.

<<<<<<< HEAD
[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/docs/compiling-assets/)
=======
[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/project_docs/compiling-assets/)
>>>>>>> cd427c7 (.)

---

## Building Your Site {#getting-started-building-your-site}

Now that you’ve edited your configuration variables and know how to customize your styles and content, let’s build the site.

```bash
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile assets with Laravel Mix
# options: dev, prod
npm run dev
```
# Guida Introduttiva

## Installazione
```bash
composer require laraxot/module_seo_fila3
```

## Configurazione
1. Pubblicare i file di configurazione:
```bash
php artisan vendor:publish --tag=seo-config
```

2. Aggiungere il service provider in `config/app.php`:
```php
Modules\Seo\Providers\SeoServiceProvider::class,
```

## Utilizzo Base
1. Aggiungere meta tags
2. Configurare regole SEO
3. Analizzare contenuti
4. Generare rapporti

## Documentazione Completa
Per maggiori dettagli consultare:
- [Configurazione](configuration.md)
- [Meta Tags](meta-tags.md)
- [Analisi](analysis.md)

