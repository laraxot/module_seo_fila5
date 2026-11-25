---
title: "Overflow history (ceiling 100)"
type: digest
status: active
qmd: "digest ceiling 100 overflow-history"
---

# Overflow history (ceiling 100)

Overflow force-cap: 3 file oltre target 100.

### `contracts/serve-index-now-key-action.md` — ServeIndexNowKeyAction


# ServeIndexNowKeyAction

Il file di verifica IndexNow: `GET /{chiave}.txt` risponde con la chiave, solo se è quella configurata. Rotta
`seo.indexnow.key` in `routes/web.php`, alla radice del sito (senza lingua), registrata **dopo** `/robots.txt`.
Sorgente: `app/Actions/IndexNow/ServeIndexNowKeyAction.php`.

Test: `cd laravel && vendor/bin/pest Modules/Seo/tests/Feature/IndexNow/IndexNowTest.php --group=SEO-INDEXNOW-KEY-INV-1`.

## Input

- `string $key`: la parte del percorso prima di `.txt` (la rotta ammette solo `[A-Za-z0-9-]{8,128}`).
- La chiave del tenant da `SeoConfigData::make()->indexNowKey()`.

## Output

- `Response` 200, `Content-Type: text/plain; charset=UTF-8`, corpo = la chiave configurata.
- Altrimenti `NotFoundHttpException` (404), come se la rotta non esistesse.

## Inva

### `getting-started.md` — Getting Started {#getting-started}


# Getting Started {#getting-started}

This is a starter template for creating a beautiful, customizable documentation site for your project with minimal effort. You’ll only have to change a few settings and you’re ready to go.

## Configuration {#getting-started-configuration}

As with all Jigsaw sites, configuration settings can be found in `config.php`; you can update the variables in that file with settings specific to your project. You can also add new configuration variables there to use across your site; take a look at the [Jigsaw documentation](http://jigsaw.tighten.co/project_docs/site-variables/) to learn more.

```php
// config.php
return [
    'baseUrl' => 'https://my-awesome-jigsaw-site.com/',
    'production' => false,
    'siteName' => 'My Site',
    'siteDescription' => 'Gi

### `stories/done-log.md` — Done log - storie Seo chiuse


# Done log - storie Seo chiuse

Una voce per story chiusa. I file completi sono nel backup
`~/backups/laravelpizza-docs-md-before-cap100.tar.gz` (sola lettura) sotto
`laravel/Modules/Seo/docs/stories/`. Le storie attive restano file `*.story.md` separati.

## docs-organization-pilot

- Titolo: pilota di organizzazione della docs del modulo Seo (non distruttivo).
- Esito: frontmatter, indice canonico, superseded e stale marcati; nessuna cancellazione in quel giro.
- Seguito: il tetto di 100 file (questo giro) ha ridotto il modulo a una struttura canonica; vedi `archive-digest.md`.

## fo-audit-seo-path-aliases

- Titolo: alias Seo per tenant con bersagli canonici inesistenti.
- Esito: override per tenant in `config/{tenant}/seo.php`; alias verso bersagli reali; alias verso pagine inesisten
