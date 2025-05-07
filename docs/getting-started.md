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
