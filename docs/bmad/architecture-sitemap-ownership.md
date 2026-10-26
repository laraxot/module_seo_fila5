---
title: "BuildSitemapAction dominio Seo — proprietà del modulo"
type: decision
tags: [seo, sitemap, architectural-decision]
status: active
related:
  - sitemap-report-management.md
  - ../../Fixcity/docs/wiki/concepts/sitemap-design-dcp-166.md
confidence: high
created: 2026-10-26
updated: 2026-10-26
qmd: "proprieta modulo BuildSitemapAction sitemap semantica SEO CMS"
sources:
  - "../../Fixcity/docs/wiki/concepts/sitemap-design-dcp-166.md"
  - ../sitemap.md
discussions: []
issues: []
---

# Proprietà del modulo

**Decisione.** `BuildSitemapAction` appartiene a `Modules/Seo`, non a `Modules/Fixcity`.

## Perché

1. **Dominio.** Genera il sitemap di pagine pubbliche; è una questione SEO, non Fixcity.
2. **Dipendenze.** Usa `Cms\Models\Page` (CMS) e `LaravelLocalization` (internazionalizzazione) — anche queste cross-module, ma la funzione è SEO.
3. **Entry point.** La rotta a livello radice è in `laravel/routes/web.php:25` con `BuildSitemapAction::class` diretto — non è un'azione Fixcity.

## Decisione

- Spostare `Modules/Fixcity/app/Actions/BuildSitemapAction.php` → `Modules/Seo/app/Actions/BuildSitemapAction.php`.
- Namespace: `Modules\Fixcity\Actions` → `Modules\Seo\Actions`.
- Riferimenti nella doc Fixcity (commento, DCP-166) si correggeranno qui.
- La rotta radice rimane invariata.

## Variabile chiave per evitare errori ricorrenti

Quando un'azione legge un modello cross-modulo (`Page`, `XotBase*`...) è sempre necessario capire, con `rg -n "use .*"`, chi importa e da dove. Se la classe dipende solo per un `use` meccanico ma il dominio è chiaramente SEO, si sposta nel modulo delle azioni associate al dominio.
