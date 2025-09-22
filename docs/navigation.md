---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---

# Navigation {#navigation}

The navigation menu in the left-hand sidebar is defined using an array in `navigation.php`. Nested pages can be added by using the `children` associative array.

```php
<?php
// navigation.php

return [
    'Getting Started' => [
        'url' => 'docs/getting-started',
        'children' => [
            'Customizing Your Site' => 'docs/customizing-your-site',
            'Navigation' => 'docs/navigation',
            'Algolia DocSearch' => 'docs/algolia-docsearch',
            'Custom 404 Page' => 'docs/custom-404-page',
        ],
    ],
<<<<<<< HEAD
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
=======
    'Jigsaw Docs' => 'https://jigsaw.tighten.co/project_docs/installation',
>>>>>>> cd427c7 (.)
];

// config.php
'navigation' => require_once('navigation.php'),

// blade files
$page->navigation
```
>>>>>>> d78cb43 (.)
# Navigazione

La navigazione del modulo SEO è organizzata per fornire un accesso intuitivo alle funzionalità di ottimizzazione.

## Menu Principale
- Dashboard SEO
- Meta Tags
- Analisi Contenuti
- Rapporti
- Configurazione

## Struttura URL
- /seo/dashboard
- /seo/meta-tags
- /seo/content
- /seo/reports
- /seo/settings

