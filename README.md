---
id: module-seo-readme
title: "SEO — Metadati, Sitemap e Dati Strutturati"
type: module-readme
category: module-documentation
module: Seo
status: active
tags: [seo, metadata, sitemap, opengraph, schema]
created: 2026-09-14
updated: 2026-09-14
qmd: "seo metadata sitemap opengraph schema structured data module documentation"
issues:
  - "https://github.com/laraxot/module_seo_fila5/issues/13"
discussions:
  - "https://github.com/laraxot/module_seo_fila5/discussions/14"
related:
  - "./docs/"
sources: []
---

# 🔍 SEO

> **Metadati, sitemap e dati strutturati.**

[![Stars](https://img.shields.io/github/stars/laraxot/module_seo_fila5?style=plastic&color=yellow)]()
[![Forks](https://img.shields.io/github/forks/laraxot/module_seo_fila5?style=plastic&color=green)]()
[![Issues](https://img.shields.io/github/issues/laraxot/module_seo_fila5?style=plastic&color=red)]()
[![License](https://img.shields.io/github/license/laraxot/module_seo_fila5?style=plastic&color=blue)]()
[![Last Commit](https://img.shields.io/github/last-commit/laraxot/module_seo_fila5?style=plastic&color=purple)]()
[![Release](https://img.shields.io/github/v/release/laraxot/module_seo_fila5?style=plastic&color=orange&display_name=release)]()
[![PHP](https://img.shields.io/badge/PHP-8.4+-777BB4?style=for-the-badge)](https://php.net/)
[![Filament](https://img.shields.io/badge/Filament-5-ffab00?style=for-the-badge)](https://filamentphp.com/)
[![Laravel](https://img.shields.io/badge/Laravel-13-red?style=for-the-badge)](https://laravel.com/)
[![Architecture](https://img.shields.io/badge/Architecture-Modular-purple?style=plastic)]()

Pagine pubbliche trovabili, condivisibili e semanticamente leggibili.

## Cosa offre

- **Meta/canonical** – ottimizzazione SEO
- **Open Graph** – social sharing
- **Sitemap/robots** – crawling efficiency
- **Schema.org/CMS** – structured data

**Keywords:** SEO, Metadata, Sitemap, Open Graph, Schema.org

## Confini architetturali

This module publishes contracts usable by other modules. Logic lives in `Actions`; admin UI follows Laraxot/XotBase.

## Integrazione rapida

```bash
cd laravel
php artisan module:list
./vendor/bin/phpstan analyse Modules/Seo
```

See local docs for integration patterns.

## Documentazione

The technical map is in [docs/README.md](./docs/README.md).

- [Business card (EN)](./docs/readme-en.md)
- [Story BMAD del modulo](./docs/stories/)
- [Regole del progetto](../../../docs/wiki/)
- [README del progetto](../../README.md)

## Qualità e manutenzione

Maintain `declare(strict_types=1);` in PHP, adhere to project PHPStan config, and update docs when contracts evolve.

---

**Modulo** `seo` · **Laraxot ecosystem** · **Project-agnostic** · PHPStan 10 · Filament 5
