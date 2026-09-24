# 🎯 SEO Module - Search Engine Optimization

[![Laravel 12.x](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![Filament 4.x](https://img.shields.io/badge/Filament-4.x-blue.svg)](https://filamentphp.com/)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg)](https://phpstan.org/)
[![Translation Ready](https://img.shields.io/badge/Translation-IT%20%7C%20EN-green.svg)](https://laravel.com/docs/localization)

The **Seo Module** provides a comprehensive search engine optimization toolkit for Laravel applications, integrating advanced metadata management, sitemaps, structured data, and AI-powered content analysis.

**Metatag facade (canone):** `MetatagFacadeAdapter` + `MetatagState` + Actions — vedi [conflict-resolution.md](./conflict-resolution.md) e [metatag-data-contract.md](./wiki/concepts/metatag-data-contract.md).

> **Accuracy note (verified against `Modules/Seo/app` 2026-09):** the feature list and code samples below describe both what exists today and forward-looking/aspirational functionality inherited from earlier drafts of this README. The parts confirmed in code are: the `Metatag` facade + `MetatagFacadeAdapter`/`MetatagState`/Actions (meta tag management), `GenerateSocialShareLinksAction` + `SocialShareWidget` (social share links), and a bare `Filament\Pages\Dashboard`. There is **no** sitemap generator, no Schema.org/structured-data code, no SEO analytics/scoring, and no `SeoResource`/`SeoMeta` model in `app/` — treat those sections as roadmap, not shipped features, until this note is updated.

## 🚀 Features

### ✅ Completed
- **Meta Tag Management**: Dynamic control over title, description, keywords, canonical URLs, and robots tags, via the `Metatag` facade.
- **Social Share Links**: `GenerateSocialShareLinksAction` + `SocialShareWidget` build per-platform share URLs (Facebook, X/Twitter, LinkedIn, WhatsApp, Telegram).
- **Filament Integration**: A basic `Filament\Pages\Dashboard` is registered; no dedicated SEO Filament resource exists yet.

### 🔄 In Progress / Planned (not yet in `app/`)
- **Sitemap Generation**: automatic XML sitemap creation with multi-sitemap support and search engine pinging.
- **Schema.org Integration**: JSON-LD structured data for Local Business, Articles, Products, and more.
- **SEO Analytics**: real-time content analysis and performance tracking.
- **AI-Powered Optimization**: Content quality scoring and readability suggestions (via OpenAI).
- **Keyword Tracking**: Rank tracking, history, and competition analysis.
- **Competitor Analysis**: Gap identification and market comparison.
- **Reporting**: Automated PDF SEO reports.

## 📦 Installation

```bash
composer require laraxot/module-seo
php artisan module:enable Seo
php artisan migrate
```

> **🚀 Modulo SEO**: Sistema completo per ottimizzazione motori di ricerca, gestione meta tags, sitemap e structured data.

## 📋 **Panoramica**

Il modulo **SEO** fornisce strumenti avanzati per l'ottimizzazione SEO:

- 🎯 **Meta Tags** - Gestione meta tags dinamici
- 🗺️ **Sitemap** - Generazione sitemap automatica
- 📊 **Structured Data** - Schema.org markup
- 🔍 **Robots.txt** - Configurazione robots.txt
- 🎨 **Open Graph** - Meta tags social media
- 🌐 **Multi-lingua** - SEO multilingua

## ⚡ **Funzionalità Core**

### 🎯 **Meta Tags Management**

The real, working API is the `Metatag` facade shown under "Usage" above (`Metatag::setTitle()`, `Metatag::setDescription()`, `Metatag::setCanonical()`, ...). The block below is the **planned** richer API some earlier docs assumed; `SEO::`/`Sitemap::` are not implemented in `app/` yet:

```php
// PLANNED, not implemented — illustrative only
SEO::setTitle('Titolo Pagina');
SEO::setKeywords(['keyword1', 'keyword2']);

// Open Graph
SEO::setOpenGraph([
    'title' => 'Titolo Social',
    'description' => 'Descrizione per social',
    'image' => asset('images/og-image.jpg'),
]);
```

### 🗺️ **Sitemap Generation** (planned, not implemented)
```php
// No seo:sitemap:generate command and no Sitemap facade exist in app/ today.
php artisan seo:sitemap:generate

Sitemap::addUrl('/pagina', [
    'lastmod' => now(),
    'changefreq' => 'weekly',
    'priority' => 0.8,
]);
```

### 📊 **Structured Data** (planned, not implemented)
```php
// No Schema.org/JSON-LD code exists in app/ today; see task-schema-org-eventi.md
// for the current design discussion.
SEO::addStructuredData([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => 'Titolo Articolo',
    'datePublished' => '2025-01-01',
    'author' => [
        '@type' => 'Person',
        'name' => 'Nome Autore',
    ],
]);
```

## 🎯 **Stato Qualità**

### ✅ **Compliance**
- **PHPStan**: Targeting Level 9
- **Filament**: Compatibile 4.x
- **Traduzioni**: IT/EN complete
- **SEO Score**: 95/100

## 📚 **Documentazione Completa**

### 🏗️ **Architettura**
- [Struttura Modulo](structure.md) - Architettura SEO (legacy dump, see `project-structure.md` for the current version)
- [Project Structure](project-structure.md) - directory/wiki structure and conventions

### 🎨 **Components**
- [Metatag data contract](wiki/concepts/metatag-data-contract.md) - `MetatagDataContract`/`MetatagData`, the actual meta-tag DTO
- [Sitemap](sitemap.md) - reference link only (no implementation in `app/` yet)
- [Schema.org / Structured data — task](task-schema-org-eventi.md) - design task, no implementation in `app/` yet

### 🔧 **Development**
- [Configuration](configuration.md) - Configurazione modulo
- [Testing](testing.md) - Testing SEO

## 🔧 **Quick Start**

### 📦 **Installazione**
```bash
# Abilitare il modulo
php artisan module:enable Seo

# Eseguire le migrazioni
php artisan migrate

# Pubblicare le configurazioni
php artisan vendor:publish --tag=seo-config

# Generare sitemap iniziale (planned — no such command exists yet)
php artisan seo:sitemap:generate
```

### ⚙️ **Configurazione**

> The real `Modules/Seo/config/config.php` today only has `name`, `icon`, `navigation_sort`. The `meta`/`sitemap`/`structured_data` keys below are a planned config shape, not what ships.

```php
// config/seo.php (planned shape, not the current file)
return [
    'meta' => [
        'default_title' => 'Site Title',
        'title_separator' => ' | ',
        'default_description' => 'Default site description',
    ],
    
    'sitemap' => [
        'enabled' => true,
        'cache_duration' => 3600,
        'path' => 'sitemap.xml',
    ],
    
    'structured_data' => [
        'enabled' => true,
        'organization' => [
            'name' => 'Organization Name',
            'url' => 'https://example.com',
        ],
    ],
];
```

### 🧪 **Testing**
```bash
# Test del modulo (real command)
./vendor/bin/pest Modules/Seo/tests

# Verifica sitemap / structured data — planned, no implementation or
# artisan command exists in app/ yet.
```

## 🎨 **Componenti Filament**

### 🎯 **What actually exists today**

No dedicated SEO Filament Resource/model exists in `app/` (no `SeoResource`, no `SeoMeta` model). What is registered:

```php
// Modules/Seo/app/Filament/Pages/Dashboard.php
class Dashboard extends XotBaseDashboard
{
}

// Modules/Seo/app/Filament/Widgets/SocialShareWidget.php
class SocialShareWidget extends XotBaseSchemaWidget
{
    public function getFormSchema(): array { return []; }

    protected function getViewData(): array
    {
        $shareData = SocialShareData::from([/* url, title */]);

        return [
            'links' => app(GenerateSocialShareLinksAction::class)->execute($shareData),
            'platforms' => $shareData->platforms,
            'data' => $shareData,
        ];
    }
}
```

A `SeoResource` with a `title`/`description`/`keywords` form (as in earlier drafts of this README) is a plausible future addition, not current code.

## 🔧 **Best Practices**

> `SEO::`, `Sitemap::` and Schema.org helpers below are the same planned API
> called out earlier in this file — for the real, working equivalent use
> `Metatag::setTitle()` / `Metatag::setDescription()` / `Metatag::setKeywords()`
> (a single `string`, not an array — see `Metatag.php`).

### 1️⃣ **Meta Tags Optimization** (planned API)
```php
SEO::setTitle('Titolo Descrittivo < 60 caratteri');
SEO::setDescription('Descrizione attraente e informativa tra 120-160 caratteri che invoglia al click');
SEO::setKeywords(['parola', 'chiave', 'pertinente']);
```

### 2️⃣ **Sitemap Management** (planned API)
```php
Event::listen(PageCreated::class, function ($event) {
    Artisan::call('seo:sitemap:generate');
});
```

### 3️⃣ **Structured Data** (planned API)
```php
SEO::addStructuredData([
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => 'Business Name',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Via Roma 123',
        'addressLocality' => 'Milano',
        'postalCode' => '20100',
        'addressCountry' => 'IT',
    ],
]);
```

## 🐛 **Troubleshooting**

> Both subsections below assume the planned sitemap/Schema.org commands from "Quick Start" exist; they don't yet (see the accuracy note near the top of this file).

### **Problemi Comuni**

#### 🔍 **Sitemap Non Generato**
```bash
# Verifica permessi
chmod 755 public/
chmod 644 public/sitemap.xml

# Rigenera sitemap
php artisan seo:sitemap:generate --force
```

#### 📊 **Structured Data Non Valido**
```bash
# Valida con Google
# https://search.google.com/test/rich-results

# Test locale
php artisan seo:validate-schema
```

## 🤝 **Contributing**

### 📋 **Checklist Contribuzione**
- [ ] Codice passa PHPStan Level 9
- [ ] Test SEO aggiunti
- [ ] Documentazione aggiornata
- [ ] Traduzioni complete (IT/EN)
- [ ] Schema.org validato

## 📊 **Roadmap**

### 🎯 **Q1 2025**
- [ ] **Advanced Analytics** - Integrazione Google Analytics 4
- [ ] **Performance Monitoring** - Core Web Vitals tracking
- [ ] **AI Meta Generation** - Generazione automatica meta tags

### 🎯 **Q2 2025**
- [ ] **Video SEO** - Schema markup per video
- [ ] **Local SEO** - Ottimizzazione ricerche locali
- [ ] **International SEO** - Hreflang e geo-targeting

---

## 📞 **Support**

- **📧 Email**: seo@laraxot.com
- **🐛 Issues**: [GitHub Issues](https://github.com/laraxot/seo-module/issues)
- **📚 Docs**: [Documentazione Completa](https://docs.laraxot.com/seo)

---

**🔄 Ultimo aggiornamento**: 14 Ottobre 2025  
**📦 Versione**: 1.0.0  
**🐛 PHPStan Level**: Target Level 9  
**🌐 Translation**: IT/EN ✅  
**🚀 SEO Score**: 95/100




Developers are encouraged to contribute to this documentation to keep it accurate and up-to-date.
## ⚙️ Configuration

Publish the configuration file to set up API keys (e.g., OpenAI) and defaults:

```bash
php artisan vendor:publish --provider="Modules\Seo\Providers\SeoServiceProvider" --tag="config"
```

## 📖 Documentation

- [Roadmap](roadmap.md): Detailed development status and future plans.
- [Rules Index](rules-index.md): Coding standards and architectural rules.
- [PHPStan Guide](phpstan.md): Static analysis configuration (Level 10).

## 🛠 Usage

The module automatically injects SEO tags into your layout if configured. You can also manually manage tags via the `Metatag` facade, which delegates to `MetatagFacadeAdapter` (see the canonical note at the top of this file):

```php
use Modules\Seo\Facades\Metatag;

Metatag::setTitle('My Amazing Page');
Metatag::setDescription('The best page on the internet.');
```

> Verified against `Modules/Seo/app/Facades/Metatag.php` and `Modules/Seo/app/Adapters/MetatagFacadeAdapter.php` (2026-09). There is no `Modules\Seo\Facades\Seo` class in this codebase — earlier revisions of this doc referenced one that never existed.

## 🤝 Contribution

Please verify all changes with:
- `phpstan analyse Modules/Seo` (Level 10)
- `pest` (Test Suite)
- [Project Structure](./PROJECT-STRUCTURE.md) — Directory layout
