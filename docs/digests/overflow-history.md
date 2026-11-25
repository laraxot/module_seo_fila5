---
title: "Overflow history (ceiling 100)"
type: digest
status: active
qmd: "digest ceiling 100 overflow-history"
---

# Overflow history (ceiling 100)

Overflow force-cap: 65 file oltre target 100.

### `action-sentinel-main-to-module.md` — action-sentinel-main-to-module


Action main to module sentinel

Timestamp: 20260313T132007Z
Direction: base_fixcity workflow -> module_seo_fila5
Path: laravel/Modules/Seo/docs/action-sentinel-main-to-module.md


### `algolia-docsearch.md` — Algolia DocSearch {#algolia-docsearch}


# Algolia DocSearch {#algolia-docsearch}

This starter template includes support for [DocSearch](https://community.algolia.com/docsearch/), a documentation indexing and search tool provided by Algolia for free. To configure this tool, you’ll need to sign up with Algolia and set your API Key and index name in `config.php`. Algolia will then crawl your documentation regularly, and index all your content.

[Get your DocSearch credentials here.](https://community.algolia.com/docsearch/#join-docsearch-program)

```php
// config.php
return [
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
];
```

Once the `docsearchApiKey` and `docsearchIndexName` values are set in `config.php`, the search field at the top of the page is ready to use.

<img class="block m-auto" src="/assets/img/doc

### `bmad/bmad-dossier.md` — Seo — BMAD dossier

# Seo — BMAD dossier
## Product brief / PRD
Make published municipal content discoverable without exposing private tickets.
## Architecture / UX / security
Seo consumes localized Cms/domain data and obeys canonical route and visibility policies.
## Epics and stories
Metadata contract; canonical/sitemap; social previews.
## Gaps / release
Tenant/locale canonical rules, private exclusion and sitemap freshness need evidence.

### `boost-skill-fix-summary.md` — Boost Skill Fix Summary - Seo Module


# Boost Skill Fix Summary - Seo Module

**Date**: 2026-03-02  
**Module**: Seo (Search Engine Optimization)

## Issue Overview

The Seo module was unable to function due to missing Laravel framework dependencies.

## Root Cause

Missing Laravel framework dependencies prevented SEO services.

## Impact on Seo Module

The Seo module couldn't:
- Generate meta tags
- Manage sitemaps
- Optimize URLs

### `code-quality-improvement-report.md` — Code Quality Improvement Report — Seo

  - "https://github.com/laraxot/base_techplanner_fila5/issues/46"
discussions:
  - "https://github.com/laraxot/base_techplanner_fila5/discussions/47"
related:
  - "../../../../docs/stories/STORY-001-code-quality-moduli-temi.md"
---

# Code Quality Improvement Report — Seo

> Baseline statica riproducibile per orientare il miglioramento. I conteggi sono segnali, non sostituiscono PHPStan, Pest o la review del flusso reale.

## Baseline

| Indicatore | Valore |
|---|---:|
| File PHP applicativi/database/route | 13 |
| File di test PHP | 10 |
| Rapporto test/file PHP | 76% |
| Candidati senza strict types | 13 |
| Marker TODO/FIXME/HACK/XXX | 0 |

### `code-quality-report.md` — Code quality — modulo Seo


# Code quality — modulo Seo

Report locale (2026-07-17). Metodo: `phpstan analyse` livello max, `phpmd` (ruleset codesize+unusedcode), grep mirati (TODO/FIXME/@deprecated, dd()/dump(), facade in app/Actions, extends Filament diretto), rapporto file test/app.

## Numeri

- File in `app/`: 10
- File di test: 10 — rapporto test/app: 100%
- File con TODO/FIXME/@deprecated: 0
- PHPStan: 0 errori (livello max, sweep repo-wide 2026-07-16/17)
- Violazioni PHPMD (codesize+unusedcode): 0
- File in `app/Actions/` che importano Facade Laravel direttamente (violazione pattern QueueableAction, vedi skill `queueable-action-trait`): 0

## Stato architetturale

- Nessuna violazione `extends \Filament\...` diretto rilevata (regola XotBase rispettata).

## Azioni consigliate


### `concepts/xotbase-never-extend-filament.md` — Mai `Filament\*` — sempre `Modules\Xot\Filament\...\XotBase*`


# Mai `Filament\*` — sempre `Modules\Xot\Filament\...\XotBase*`

Bridge on-demand. Contenuto canonico: [docs/wiki/rules/xotbase-critical-rules.md](../../../../../docs/wiki/rules/xotbase-critical-rules.md).

## Zen (riassunto)

Nessuna classe in `Modules/Seo` estende una classe `Filament\...` direttamente.
Si estende sempre lo "specchio" in `Modules\Xot\Filament\...` allo stesso
percorso relativo (es. `Filament\Tables\Columns\ViewColumn` ->
`Modules\Xot\Filament\Tables\Columns\XotBaseViewColumn`). Se manca il
mirror, va creato in Xot prima di usarlo qui, mai come scorciatoia nel modulo.

Non pre-caricare questo file: leggi la fonte canonica solo quando il task lo richiede.

### `conflict-resolution.md` — Conflict Resolution — Module Seo


# Conflict Resolution — Module Seo

## Summary
- **Files resolved**: 4
- **Strategy**: Keep HEAD/local (ours) side
- **Root cause**: Nested stash-on-merge conflicts

## Documentation Files
- docs/README.md
- docs/cyclomatic-complexity-report.md
- docs/duplicate-methods-analysis.md

## Config Files
- composer.json

## Backlinks
- [Root conflict resolution report](../../../../docs/conflict-resolution-report.md) _(target mancante, verificato 2026-10-08)_

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

### `contracts/submit-index-now-action.md` — SubmitIndexNowAction


# SubmitIndexNowAction

Avvisa i motori IndexNow (Bing, Yandex, Seznam, Naver…) che delle URL del sito sono nuove o cambiate. Perché:
[ADR presenza nei motori di ricerca](../adr/search-engine-presence.md). Sorgente:
`app/Actions/IndexNow/SubmitIndexNowAction.php`; chiamante: il comando `seo:indexnow`
(`app/Console/Commands/SubmitIndexNowCommand.php`).

Test: `cd laravel && vendor/bin/pest Modules/Seo/tests/Feature/IndexNow/IndexNowTest.php` (oppure `--group=SEO-INDEXNOW-INV-<N>`).

## Input

| Fonte | Valore | Note |
|---|---|---|
| `$urls` | `list<string>` | URL assolute, di solito quelle nuove o cambiate della sitemap |
| `SeoConfigData::make()->indexNowKey()` | `?string` | chiave del tenant (`indexnow_key`), valida solo se `^[A-Za-z0-9-]{8,128}$`; altrimenti `null` = spento |
| `url('/

### `contracts-naming.md` — Contracts Naming & Placement in Seo


# Contracts Naming & Placement in Seo

> A contract is an **agreement**, not a PHP keyword. We name it `*Contract` and place it under `app/Contracts/`.

## Rule

- ✅ `app/Contracts/MetatagDataContract.php`
- ❌ `app/Interfaces/MetatagDataInterface.php`

## Why

- `Contract` describes the domain concept (a pact between components).
- `interface` describes a PHP implementation detail.
- One folder (`app/Contracts/`) keeps the module language consistent and reduces cognitive noise.
- Aligned with Laravel `Illuminate\Contracts\*` convention.

## Module-specific Example

`MetatagDataContract` lives in `app/Contracts/`. The concrete DTO `MetatagData` implements it. Services and Facades type-hint the contract.

### `customizing-your-site.md` — Customizing Your Site {#customizing}

# Customizing Your Site {#customizing}

## Styles

This starter template comes pre-loaded with [Tailwind CSS](https://tailwindcss.com), a utility CSS framework that allows you to customize and build complex designs without touching a line of CSS. There are also a few base Sass files in the `/source/_assets/sass` folder, set up with the expectation that you can add any custom CSS into `_documentation.scss`.

> You can re-work the architecture of the Sass includes any way you’d like; just make sure to keep the `@tailwind` references in your final files.

```scss
// source/_assets/sass/main.scss

@tailwind preflight;
@tailwind components;

// Code syntax highlighting,
// powered by https://highlightjs.org
@import '~highlight.js/styles/a11y-light.css';

@import 'base';
@import 'navigation';

### `cyclomatic-complexity-report.md` — Cyclomatic Complexity Report - Module: Seo


> Nota 2026-10-08 (docs-audit): report generato il 2025-10-01 e mai rigenerato; i valori non descrivono il codice attuale. Contenuto non riscritto, verificare prima di usarlo.

# Cyclomatic Complexity Report - Module: Seo

**Generated:** 2025-10-01 19:44:11  
---
**Generated:** 2025-10-01 19:44:11  
**Analyzer:** Super Mucca 🐮

---

## 📊 Summary Statistics

| Metric | Value |
|--------|-------|
| Total PHP Files | 14 |
| Total Lines of Code | 747 |
| Total Classes/Traits/Interfaces | 8 |
| Total Methods | 60 |

### `dependency-intelligence.md` — Dependency Intelligence - Module Seo


# Dependency Intelligence - Module Seo


## Runtime dependencies (`require`)

| Package | Constraint | Installed | Area |
|---|---|---|---|
| _(none)_ | - | - | - |

## Dev dependencies (`require-dev`)

| Package | Constraint | Installed | Area |
|---|---|---|---|
| _(none)_ | - | - | - |

## Declared but missing from installed set

- Nessun pacchetto mancante nel lock corrente.


### `dry-kiss-analysis.md` — 🐄 DRY & KISS Analysis - Seo


> Nota 2026-10-08 (docs-audit): contiene il segnaposto non renderizzato [DATE]; l'analisi non e' datata in modo affidabile. Contenuto non riscritto, verificare prima di usarlo.

# 🐄 DRY & KISS Analysis - Seo

**Data:** [DATE] | **Status:** ✅
---
**Data:** 2025-10-15 | **Status:** ✅

## 📊 Struttura
Models: 0 | Resources: 0 | Services: 1 | Actions: 0 | Docs: 21

## 🎯 Score: 8/10 🟢 **BUONO**

## ✅ MINIMAL MODULE
- Service-based approach ⭐
- Focused on SEO operations ⭐
- Docs minime e chiare ⭐

**Status:** 🟢 PERFETTO per scope

### `duplicate-methods-analysis.md` — Analisi Metodi Duplicati - Modulo Seo


# Analisi Metodi Duplicati - Modulo Seo

---
**Totale Gruppi di Duplicati**:
**Data Generazione**: 2025-10-15 06:41:17
**Totale Gruppi di Duplicati**: 

## Sommario Esecutivo

Questo documento identifica i metodi duplicati nel modulo **Seo** che potrebbero beneficiare di refactoring.

### Statistiche

| Tipo Refactoring | Conteggio |
|------------------|----------:|
| **Trait** | 0 |
| **Base Class** | 0 |
| **Interface** | 1 |
| **Altro** | 0 |

### `file-naming-rules.md` — Regole di Naming per File


See canonical documentation: ../../../Themes/docs/shared-components/file-naming-rules.md
---
# Regole di Naming per File

## 🎯 Regola Fondamentale: NO Duplicati Case-Insensitive

### Problema

Su filesystem case-insensitive (Windows, macOS default), file con nomi che differiscono solo per maiuscole/minuscole causano conflitti:

```
❌ ERRATO - Duplicati case-insensitive:
- readme.md e README.md
- Activity.php e activity.php
- ListRecords.md e listrecords.md
```

### Soluzione


### `folio-volt-best-practices.md` — Laravel Folio + Volt - Best Practices and Patterns Analysis


See canonical documentation: ../../../Themes/docs/shared-components/folio-volt-best-practices-Modules.md
---
# Laravel Folio + Volt - Best Practices and Patterns Analysis

## Overview

Based on research of multiple Laravel Folio + Volt repositories and official documentation, this document outlines the best practices and patterns for implementing Folio + Volt in applications.

## Key Patterns Identified

### 1. File Structure
- **Pages Directory**: Folio automatically maps files in `resources/views/pages/` to routes
  - Example: `resources/views/pages/events.blade.php` → `/events`
  - Example: `resources/views/pages/events/[event].blade.php` → `/events/{event}`
- **Subdirectories**: Organize related pages in subdirectories (e.g., `resources/views/pages/auth/`)
- **Blade Components**: Stor

### `investigation/investigation.md` — Investigation: Schema.org Auto-Generation


> Nota 2026-10-08 (docs-audit): e' un segnaposto (Feature A/B/C, issue #XXX), nessuna analisi reale. Contenuto non riscritto, verificare prima di usarlo.
# Investigation: Schema.org Auto-Generation

## Problem Statement
Analisi delle feature mancanti nel modulo Seo.

## Current State
- Documentazione esistente: 4 stories
- Architettura: Actions,Adapters,Broadcasting,Casts,Classes,Console,Contracts,Data,Datas,Emails,Enums,Events,Exceptions,Facades,Filament,Helpers,Http,Interfaces,Jobs,Listeners,Models,Notifications,Observers,Policies,Providers,Repositories,Rules,Services,Traits,Transformers,View,

## Feature Missing
1. Feature A - descrizione
2. Feature B - descrizione
3. Feature C - descrizione

## Proposed Solution
- Implementare le feature A/B/C usando le regole BMAD
- Seguire: no contr

### `mcp-configuration.md` — MCP Server Configuration - Seo Module


# MCP Server Configuration - Seo Module


**Status**: ✅ Configured
**MCP Servers**: Asana, ClickUp, Filesystem, Database, Redmine (Planned)

---
## 📋 Overview

The Seo module's MCP configuration enables AI assistants to interact with:
- **Asana Work Graph** - Task and project management
- **ClickUp Workspace** - Advanced task workflows and time tracking
- **Redmine** - Project management (planned, requires self-hosted instance)
- **Filesystem** - Direct file access
- **Database** - SQLite queries for data inspection

---

## 🔧 Configuration

### `merge-conflict-files-list.md` — Merge Conflict Files List


See canonical documentation: ../../../Themes/docs/shared-components/merge-conflict-files-list.md
---
# Merge Conflict Files List

This file contains a comprehensive list of files with merge conflict markers (`<<<< HEAD` or `<<<< .merge_file`) that need to be resolved.

## Total Files Found: 96

## Files by Module/Theme:

### Core Modules (16 files)
- ./.planning/debug/knowledge-base.md
- ./.planning/debug/resolved/sqlite-model-contract-fix.md
- ./_bmad/bmm/4-implementation/bmad-create-story/stories/1-1-segnalazione-ui-ux-improvement.md
- ../../Notify/docs/bugs/summary-2.md
- ../../Notify/docs/bugs/summary-2.md
- ../../Notify/docs/bugs/summary-2.md
- ./bashscripts/ai/.agents/skills/directory-structure/SKILL.md
- ./bashscripts/ai/.agents/skills/module-roadmap/SKILL.md

### `merge-conflicts-list.md` — Merge conflict markers — file list


See canonical documentation: ../../../Themes/docs/shared-components/merge-conflicts-list.md
---
# Merge conflict markers — file list

Elenco dei file trovati contenenti marker di merge (<<<<<<<, >>>>>>>, .merge_file). Seguire la lista per assegnare task agli agenti.

## Lista (auto-generata)

- memory/MEMORY.md
- _bmad/bmm/4-implementation/bmad-create-story/stories/1-1-segnalazione-ui-ux-improvement.md
- laravel/Themes/Sixteen/public/manifest.json
- docs/wiki/concepts/no-docs-archive-rule.md
- docs/wiki/index.md
- docs/wiki/log.md
- laravel/Themes/Sixteen/docs/wiki/index.md
- laravel/Themes/Sixteen/docs/wiki/log.md
- laravel/Modules/Lang/docs/module-analysis.md
- laravel/Modules/Lang/docs/translatable/json-content-translation.md
- laravel/Modules/Lang/docs/module.md

### `no-ai-tool-scaffold-dirs.md` — Perché queste cartelle non devono esistere qui


# Perché queste cartelle non devono esistere qui

Regola canonica: [module-theme-root-cleanup.md — Rule 5](../../../../docs/wiki/rules/module-theme-root-cleanup.md).

Rimosse in questo modulo: `_docs/`, `scripts/`, `bashscripts/`, `docs/archive|archived|legacy|workbench/`, `.circleci/`, `.claude-audit/`, `tests/.claude-audit/`, `_bmad-output/`, `test-results/`, `.devcontainer/`, `.kilocode/`, `.kiro/`, `.ralph/` (dove presenti) e aggiunte al `.gitignore` di questo modulo.

**Perché**: questo modulo vive anche come repo Git indipendente (multi-repo); ogni agente/tool AI o pipeline CI che gira in quella root scrive lì la propria cache/scaffold locale (skill `.kiro/`, output `_bmad-output/`, stato `.ralph/`, audit `.claude-audit/`, log `test-results/`), ignorando che quella root è in realtà 

### `on-demand-pattern.md` — On-Demand Pattern — Module **Seo**


# On-Demand Pattern — Module **Seo**

**Fonte canonica**: [../../docs/wiki/rules/on-demand-pattern.md](../../../../docs/wiki/rules/on-demand-pattern.md)

## Principio

Questo module segue il **pattern on-demand** per rules, skills, commands e memories:

- ✅ **Vivono solo nel wiki** — ../../docs/wiki/
- ✅ **Caricati on-demand** — via trigger map o `qmd search`
- ❌ **NON pre-caricati** — mai embeddare nei bootstrap files
- ❌ **Nessuna duplicazione** — wiki = sorgente di verità unica

## Perché On-Demand?

1. **Contesto minimo** — Carico solo le regole pertinenti al task corrente
2. **Token efficient** — Nessun carico inutile all'avvio (~50K → ~2K token)
3. **Scalabile** — Aggiungere nuove rules non richiede modifiche ai bootstrap
4. **Manutenibile** — Una sola fonte di verità (wiki)

### `performance-optimization.md` — Performance Optimization — Module **Seo**


# Performance Optimization — Module **Seo**

## Ottimizzazioni Applicate

### 1. On-Demand Loading (principale)

**Prima**: Bootstrap caricava tutte le rules (50K+ token)
**Dopo**: Carico solo what's needed (~2K startup)

\`\`\`diff
- 150+ rules embeddate in AGENTS.md
+ 0 rules embeddate — tutte on-demand
\`\`\`

### 2. Cache Esterna al Repo

\`\`\`diff
- .cache/ (8KB nel repo)
+ ~/.cache/qmd-cache/ (fuori da git)

### `ponytail-audit-over-engineering.md` — Ponytail audit — Seo (over-engineering)


# Ponytail audit — Seo (over-engineering)

**Ultimo run:** 2026-06-30  
**Modulo:** SEO, metatag, sitemap.  
**Hub:** [../../../../docs/audit/ponytail-audit.md](../../../../docs/audit/ponytail-audit.md) _(target mancante, verificato 2026-10-08)_
**Remediation:** [../../../../docs/project/ponytail-audit-remediation.md](../../../../docs/project/ponytail-audit-remediation.md)
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/base_predict_fila5/issues/221) · [Discussion #222](https://github.com/laraxot/base_predict_fila5/discussions/222) · [Discussion #228](https://github.com/laraxot/base_predict_fila5/discussions/228)
**Repo upstream:** [module_seo_fila5](https://github.com/laraxot/module_seo_fila5) · [Issue #12](https://github.com/laraxot/module_seo_fila5/issues/12)

## Findings


### `product-launch-plan-3.md` — Seo Module - Product Launch Plan


# Seo Module - Product Launch Plan

**Module:** Seo  
**Version:** 1.0.0  
**Owner:** Product Team

---
## Launch Objectives

1. **Product:** Deploy technical SEO foundation
2. **Indexing:** 100% of pages indexable
3. **Performance:** Pass Core Web Vitals
4. **Traffic:** 1K organic visits/month

---

## Pre-Launch Checklist

### T-8 Weeks

### `product-launch-plan.md` — Seo Module - Product Launch Plan


See canonical documentation: ../../../Themes/docs/shared-components/PRODUCT_LAUNCH_PLAN-Modules.md
---
# Seo Module - Product Launch Plan

**Module:** Seo  
**Version:** 1.0.0  
**Owner:** Product Team

---

## Launch Objectives

1. **Product:** Deploy technical SEO foundation
2. **Indexing:** 100% of pages indexable
3. **Performance:** Pass Core Web Vitals
4. **Traffic:** 1K organic visits/month

---


### `product-roadmap-3.md` — Seo Module - Product Roadmap


# Seo Module - Product Roadmap

**Module:** Seo  
**Version:** 1.0.0  
**Owner:** Product Team  
**Status:** In Development

---
## Vision Statement

To build a **comprehensive SEO optimization system** that drives organic traffic growth, improves search visibility, and establishes the platform as an authority in prediction markets.

### Vision Pillars

1. **Technical Excellence:** Perfect technical SEO foundation
2. **Content Optimization:** SEO-optimized content creation
3. **Performance:** Fast page load speeds
4. **Analytics:** Comprehensive search analytics
5. **Authority:** Build domain authority over time

### `product-roadmap.md` — Seo Module - Product Roadmap


See canonical documentation: ../../../Themes/docs/shared-components/PRODUCT_ROADMAP-Modules.md
---
# Seo Module - Product Roadmap

**Module:** Seo  
**Version:** 1.0.0  
**Owner:** Product Team  
**Status:** In Development

---

## Vision Statement

To build a **comprehensive SEO optimization system** that drives organic traffic growth, improves search visibility, and establishes the platform as an authority in prediction markets.

### Vision Pillars

1. **Technical Excellence:** Perfect technical SEO foundation
2. **Content Optimization:** SEO-optimized content creation

### `product-strategy-3.md` — Seo Module - Product Strategy


# Seo Module - Product Strategy

**Module:** Seo  
**Version:** 1.0.0  
**Owner:** Product Team

---
## Executive Summary

The Seo module provides comprehensive search engine optimization capabilities, driving organic traffic growth and establishing the platform as a trusted authority in prediction markets.

---

## Market Analysis

### TAM / SAM / SOM

| Segment | TAM | SAM | SOM (2028) |
|---------|-----|-----|------------|

### `product-strategy.md` — Seo - Product Strategy


# Seo - Product Strategy

> Strategia prodotto. Modulo.
> Allineamento strategico stimato: 57%.

## Missione

Portare **Seo** a uno stato in cui il progetto ottiene un vantaggio netto e misurabile su questa area: metadata, discoverability e ottimizzazione organica.

## Problema da risolvere

- chiarire il ruolo del componente nel sistema
- evitare sovrapposizioni con altri moduli o temi
- rendere il valore del componente esplicito e verificabile

## Principi strategici

- DRY: riuso prima di duplicare
- KISS: superfici semplici e veritiere

### `project-structure.md` — Project Structure — Module **Seo**


# Project Structure — Module **Seo**

## Directory Structure

\`\`\`
./laravel/Modules/Seo/docs/
├── wiki/                          # Knowledge base locale (LLM Wiki)
│   ├── index.md                  # Master catalog
│   ├── log.md                    # Activity log
│   ├── concepts/                 # Topic/theme pages
│   ├── entities/                 # Organization/person pages
│   ├── rules/                    # ⚠️ 151+ regole progettuali
│   │   ├── 00-INDEX.md          # Indice regole
│   │   ├── 00-TRIGGER_MAP.md    # Trigger map (link a globale)
│   │   └── *.md                 # Regole specifiche modulo
│   ├── skills/                   # Skill progettuali
│   │   ├── INDEX.md
│   │   └── *.md
│   ├── commands/                 # Comandi progettuali

### `redundancy-analysis-2.md` — redundancy-analysis-2


See canonical documentation: ../../../Themes/docs/shared-components/redundancy-analysis.md

### `redundancy-audit.md` — Seo redundancy audit 2026-05-21


# Seo redundancy audit 2026-05-21

Static metrics: 295 files scanned, 7 case-only groups, 21 duplicate hash groups, 0 duplicate FQCN.

Findings:
- Case-only docs: duplicate method-analysis, MCP recommendations, index, PRD, roadmap/sprint planning files.
- Multiple MCP recommendation variants exist with dash, underscore, uppercase, and Italian/English names.
- Root scratch files `test.md` and `test-bb.md` duplicate empty frontend boilerplate.

Risk:
- SEO docs are noisy and can route agents to stale MCP/setup advice.
- Scratch files at module root should not be treated as active docs.

Suggested cleanup order:
1. Keep one MCP recommendation doc and one PRD/index path.
2. Move or remove root scratch docs under a docs cleanup issue.
3. Update any local docs index after filename normalization

### `roadmap/00-index.md` — Seo Module - Roadmap


# Seo Module - Roadmap

> Gestione SEO automatizzata: meta tags, sitemap, social sharing.

## Indice

- [Visione](vision.md)
- [Fasi di sviluppo](phases.md)
- [Checklist qualità](quality.md)
- [Current State](01-current-state.md)
- [Goals](02-goals.md)
- [Workstreams](03-workstreams.md)
- [Milestones](04-milestones.md)
- [Risks](05-risks.md)

## Metriche rapide

| Metrica | Valore |
|---------|--------|

### `roadmap/01-current-state.md` — Current State - Seo


# Current State - Seo

## Baseline

- Stato attuale documentato nei file `docs/` del Modulo.
- Presenza di roadmap strutturata in sotto-file.
- Necessita verifica periodica di coerenza tra codice e documentazione.

## Immediate checks

1. Coerenza tra regole architetturali e implementazione runtime.
2. Coerenza tra naming, namespace e percorsi view/traduzioni.
3. Copertura test minima per i flussi critici.

### `roadmap/02-goals.md` — Goals - Seo


# Goals - Seo

## Short Term

1. Allineare documentazione e stato reale del codice.
2. Ridurre i punti di fragilita piu frequenti.
3. Consolidare checklist operative per incident response.

## Medium Term

1. Aumentare test di regressione sui flussi critici.
2. Migliorare osservabilita e diagnosi errori.
3. Ridurre duplicazioni tra documenti e tra componenti.

## Long Term

1. Stabilita sotto fault randomizzati (chaos testing).
2. Manutenibilita alta con onboarding rapido.

### `roadmap/03-workstreams.md` — Workstreams - Seo


# Workstreams - Seo

## WS1 Architecture

- Verifica confini e responsabilita dei componenti.
- Aggiornamento pattern e guardrail.

## WS2 Reliability

- Hardening dei flussi principali.
- Miglioramento fallback e recovery path.

## WS3 Documentation

- Consolidamento documenti canonici.
- Eliminazione drift documentale.

## WS4 Testing


### `roadmap/04-milestones.md` — Milestones - Seo


# Milestones - Seo

## M1 Documentation Baseline

- `roadmap.md` allineato e `docs/roadmap/` completo.
- Link relativi verificati.

## M2 Operational Readiness

- Checklist incident response disponibile.
- Procedure di recovery validate sui casi principali.

## M3 Regression Safety

- Test minimi sui flussi critici in esecuzione regolare.
- Riduzione regressioni ricorrenti.

### `roadmap/05-risks.md` — Risks - Seo


# Risks - Seo

## Top Risks

1. Drift tra documentazione e comportamento runtime.
2. Regressioni introdotte da fix rapidi non verificati.
3. Dipendenze incrociate non documentate.

## Mitigations

1. Aggiornare docs insieme ai fix di codice.
2. Usare checklist pre-merge e post-fix.
3. Mantenere un set di file canonici per diagnosi rapida.

### `roadmap/current-state.md` — Current State - Seo


See canonical documentation: ../../../../Themes/docs/shared-components/01-current-state-Modules.md
---
# Current State - Seo

## Baseline

- Stato attuale documentato nei file `docs/` del Modulo.
- Presenza di roadmap strutturata in sotto-file.
- Necessita verifica periodica di coerenza tra codice e documentazione.

## Immediate checks

1. Coerenza tra regole architetturali e implementazione runtime.
2. Coerenza tra naming, namespace e percorsi view/traduzioni.
3. Copertura test minima per i flussi critici.

### `roadmap/legacy-roadmap.md` — Seo Module Roadmap


# Seo Module Roadmap

Vedi [roadmap/00-index](roadmap/00-index.md) _(target mancante, verificato 2026-10-08)_.

### `roadmap/milestones.md` — Milestones - Seo


See canonical documentation: ../../../../Themes/docs/shared-components/04-milestones-Modules.md
---
# Milestones - Seo

## M1 Documentation Baseline

- `roadmap.md` allineato e `docs/roadmap/` completo.
- Link relativi verificati.

## M2 Operational Readiness

- Checklist incident response disponibile.
- Procedure di recovery validate sui casi principali.

## M3 Regression Safety

- Test minimi sui flussi critici in esecuzione regolare.
- Riduzione regressioni ricorrenti.

### `roadmap/overview.md` — Roadmap overview (Module Seo)


See canonical documentation: ../../../../Themes/docs/shared-components/00-overview-Modules.md
---
# Roadmap overview (Module Seo)

## Scope

## Goals

## Non-goals

### `roadmap/quality.md` — Checklist qualità - Seo Module


# Checklist qualità - Seo Module

- [x] PHPStan Level 10
- [ ] Copertura Test (Pest) > 85%
- [ ] Generazione Sitemap scalabile anche per grandi volumi di dati
- [ ] Traduzioni SEO multilingue complete

### `roadmap/workstreams.md` — Workstreams - Seo


See canonical documentation: ../../../../Themes/docs/shared-components/03-workstreams-Modules.md
---
# Workstreams - Seo

## WS1 Architecture

- Verifica confini e responsabilita dei componenti.
- Aggiornamento pattern e guardrail.

## WS2 Reliability

- Hardening dei flussi principali.
- Miglioramento fallback e recovery path.

## WS3 Documentation

- Consolidamento documenti canonici.
- Eliminazione drift documentale.


### `root-file-policy.md` — Root file policy

# Root file policy

Updated: 2026-07-08

Root hygiene for this owner follows the project rule: no root .txt files, at most four root .md files, and at most one root .code-workspace named after the module or theme.

Archived root files live in:

- docs/root-txt-files/ (0 files)
- docs/root-md-files/ (2 files)
- docs/root-code-workspace-files/ (1 files)

Current root counts after normalization: 2 markdown files, 0 workspace files.

### `root-files-hygiene.md` — Root files hygiene

# Root files hygiene

## 2026-08-28

- Bonifica root: rimossi 4 file test/sync (`sync-test-file.md`, `sync-test-file-2.md`, `test-bb.md`, `test.md`)
- Gate: `bash bashscripts/tools/audit-module-root-hygiene.sh Seo` → PASS
- Policy: zero `.txt`, max 6 `.md` — [XOT-5.46](../../Xot/docs/stories/5.46.module-root-max-six-md-zero-txt.story.md)

## 2026-07-08 16:51

- created `Seo.code-workspace` as the single canonical root workspace file.

### `rules-testing-no-migrate-fresh.md` — CRITICAL ARCHITECTURE RULE: NO MIGRATE:FRESH


See canonical documentation: ../../../Themes/docs/shared-components/rules-testing-no-migrate-fresh.md
---
# CRITICAL ARCHITECTURE RULE: NO MIGRATE:FRESH

## Rule
**NEVER** use `migrate:fresh` or the `RefreshDatabase` trait in any test or setup script within this modular architecture (Laraxot).

## Why?
1. **Destructive**: It destroys all tables across the default database connection.
2. **Tenant/Module Coupling**: In a modular application, tables are meant to be isolated. Wiping the entire database crashes other concurrently running tests or removes shared look-up tables that are not seeded correctly per-module.
3. **Data Loss**: Running tests with `RefreshDatabase` against a shared testing database will indiscriminately destroy other modules' data.

## Correct Approach
- Only use `Databa

### `seo-optimization-report.md` — Analisi e Raccomandazioni SEO - TechPlanner


# Analisi e Raccomandazioni SEO - TechPlanner
**Data**: 7 Febbraio 2026
**Module**: Seo
**Scope**: Ottimizzazione SEO per sito radioprotezione

## 📋 Sommario Esecutivo

Il sito target ha una struttura SEO base, ma mancano molti elementi avanzati per il posizionamento su Google. Il nostro sito Laravel deve implementare una strategia SEO completa per competere nel settore B2B della radioprotezione.

## 🔍 Analisi SEO Target Site

### Elementi Mancanti
- Meta Description esplicita
- Canonical URLs
- Schema.org Markup
- Open Graph Tags
- Sitemap XML
- Robots.txt


### `seo-optimization-roadmap.md` — SEO Module - Comprehensive SEO Optimization System


# SEO Module - Comprehensive SEO Optimization System

## Overview

The SEO module provides enterprise-grade Search Engine Optimization capabilities including meta management, sitemap generation, structured data, analytics integration, and performance optimization for Laravel applications.

## Current Implementation Status

### 🔴 **State**: Basic/Placeholder  
**Completion**: 5%  
**Priority**: High  
**Estimated Development Time**: 8-10 weeks

### Existing Structure
```
Modules/Seo/
├── app/
│   ├── Models/
│   │   ├── SeoMetadata.php      (Basic)

### `services-to-adapters-conversion.md` — Seo — conversione Services/Support → Actions/Adapters


# Seo — conversione Services/Support → Actions/Adapters

## Contesto

Regola aurea del monorepo (2026-07-13): `app/Services/` e `app/Support/` non devono
esistere in nessun modulo. La logica di dominio vive in `app/Actions/{Context}/FooAction.php`
con il trait `Spatie\QueueableAction\QueueableAction` e un unico metodo `execute(...)`.

## Cosa conteneva il modulo Seo

Un solo file: `app/Services/MetatagService.php`.

## Analisi: perché NON è diventata una Action

`MetatagService` **non è logica di dominio stateless**: è un accumulatore *stateful*
per-request dei metadati SEO (title, description, og:*, ecc.), registrato come
**singleton** nel container e esposto tramite la facade `Modules\Seo\Facades\Metatag`.
Il suo valore sta nel mantenere lo stato mutabile costruito da chiamate successiv

### `social-share-component.md` — Social Share Component


# Social Share Component

## Ricerca e Riferimenti

### Fonti Studiati
- [kudashevs/laravel-share-buttons](https://github.com/kudashevs/laravel-share-buttons) - 42 stelle, 1.1M installi
- [jorenvanhocht/laravel-share](https://packagist.org/packages/jorenvanhocht/laravel-share) - 535 stelle
- [Laravel News: Social Media Sharing](https://laravel-news.com/socialmedia-sharing)
- [codeshotcut: Laravel 13 Social Share](https://codeshotcut.com/blog/laravel-12-social-share-integration-facebook-twitter-linkedin-whatsapp)
---
- [codeshotcut: Laravel 12 Social Share](https://codeshotcut.com/blog/laravel-12-social-share-integration-facebook-twitter-linkedin-whatsapp)

### Argomenti Comuni Identificati

1. **Social Share Buttons** - Pulsanti di condivisione
2. **Open Graph & Twitter Cards** - Meta tag

### `social-share-copy-localization.md` — Social share copy localization


# Social share copy localization

## Contesto

Il componente `Modules/Seo/resources/views/components/social-share.blade.php` mostrava copy hardcoded inglese:

- `Copy to clipboard`
- `URL Copied!`

## Regola

Il componente social share e' riusato cross-theme, quindi i testi UI devono usare chiavi di traduzione e non stringhe hardcoded.

## Applicazione

- introdurre chiavi in `Themes/Meetup/lang/*/event.php` (scope `actions/messages`)
- consumare le chiavi nel componente SEO via `__()`

Questo evita regressioni i18n nel dettaglio evento e mantiene coerenza con il resto del tema.

### `social-sharing-component.md` — Social Sharing Component Design


# Social Sharing Component Design

## Overview
The Social Sharing Component is a reusable UI element that provides sharing links for various social media platforms. It centralizes the logic for generating SEO-friendly sharing URLs and provides a consistent interface across the application.

## Core Theme: Social Sharing Buttons
Based on the research of modern UI libraries (FlyonUI, Tailwind Elements) and internal design requirements, this component focuses on:
- **Simplicity**: Custom implementation using native PHP/Laravel features.
- **Independence**: No external composer packages for simple UI/sharing logic.
- **Design Parity**: 100% integration within the Laraxot design system.
- **Performance**: Static URL generation in PHP.
- **SEO Integration**: Dynamic injection of current page ti

### `sprint-planning-3.md` — Seo Module - Sprint Planning


# Seo Module - Sprint Planning

**Module:** Seo  
**Sprint:** Sprint 1 (March 12-25, 2026)  
**Version:** 1.0.0

---
## Sprint Goal

Implement core technical SEO features including meta tags, sitemap, and schema markup.

**Success Criteria:**
- ✅ Meta tag management working
- ✅ XML sitemap generated
- ✅ robots.txt configured
- ✅ Schema markup implemented
- ✅ Test coverage >80%

---

### `sprint-planning.md` — Seo Module - Sprint Planning


See canonical documentation: ../../../Themes/docs/shared-components/sprint-planning-2.md
---
# Seo Module - Sprint Planning

**Module:** Seo  
**Sprint:** Sprint 1 (March 12-25, 2026)  
**Version:** 1.0.0

---

## Sprint Goal

Implement core technical SEO features including meta tags, sitemap, and schema markup.

**Success Criteria:**
- ✅ Meta tag management working
- ✅ XML sitemap generated
- ✅ robots.txt configured
- ✅ Schema markup implemented

### `stories/phpstan-cleanup-seo.dev.md` — [DEV] PHPStan cleanup — Seo


# [DEV] PHPStan cleanup — Seo

## Technical Plan

- Fixture con nome al posto della classe anonima, stessa semantica

## Files to Modify

- `tests/Unit/Filament/Widgets/SocialShareWidgetTest.php`
- `tests/Fixtures/ExposedSocialShareWidget.php` (nuovo)
- `docs/README.md` (write-back)

## Implementation Steps

- [x] Verificato che l'errore non compare su singolo file (sintomo da cache) ma nel run completo
- [x] Creata la fixture, sostituita l'anonima, aggiunto l'import
- [x] PHPStan + `php -l`

## Testing

### `stories/phpstan-seo-fix.md` — Problema


## Problema
PHPStan errors in Modules/Seo (4, resurfaced after the 2026-09-06 22:05
phpstan.neon Larastan/Pest-extension regression — owner confirmed config
stays as-is).

## Solution
1. Analyze with phpstan -> 4 `method.nonObject` errors in `tests/TestCase.php`
   on `$this->app['config']->set(...)` (ArrayAccess on the container resolves
   to `mixed` without Larastan).
2. Fix: use the `config()` helper instead of `$this->app['config']` — Laravel's
   own conditional-return-type PHPDoc on the helper resolves to
   `Repository` without needing Larastan.
3. Verify: phpstan 0; phpmd (1 pre-existing non-actionable finding, see
   coverage.md); pest 35/47 passing — 12 pre-existing failures
   (`Target class [config] does not exist`), confirmed via `git stash`
   NOT caused by this fix, unrela

### `task-creare-test-suite.md` — Task: Creare Test Suite - Seo


# Task: Creare Test Suite - Seo

**Modulo**: Seo
**Priorita'**: Media
**Completamento**: 10%

---
## Test da Implementare

- [ ] Metatag generation: titolo, descrizione, keywords
- [ ] OG tags: image, title, description
- [ ] Sitemap: validita' XML, url corretti
- [ ] Schema.org: JSON-LD valido

## Criteri di Completamento

- [ ] 8+ test
- [ ] Copertura al 60%

### `task-implementazione-base.md` — Task: Completare Implementazione Base - Seo


# Task: Completare Implementazione Base - Seo

**Modulo**: Seo
**Priorita'**: Alta
**Completamento**: 30%

---
## Funzionalita' da Completare

- [x] Modello Seo base
- [ ] Metatag automatici per pagine CMS
- [ ] Open Graph tags per social sharing
- [ ] Twitter Cards
- [ ] Canonical URLs
- [ ] Robot meta tags (index/noindex)
- [ ] Filament Resource per gestione SEO per-pagina

## Criteri di Completamento


### `task-schema-org-eventi.md` — Task: Implementare Schema.org per Eventi - Seo


# Task: Implementare Schema.org per Eventi - Seo

**Modulo**: Seo
**Priorita'**: Media
**Completamento**: 0%

---
## Scopo e responsabilita'

- **Seo**: assemblare e rendere disponibile JSON-LD nelle pagine (Cms/Theme), evitando duplicazione di logica di dominio.
- **Meetup**: source-of-truth per i dati Event/EventSeries/Join/Leave/Reservation.
- **Geo**: source-of-truth per Place/PostalAddress/GeoCircle.

## Funzionalita'

- [ ] Schema.org Event markup (JSON-LD)
- [ ] Schema.org EventSchedule (Schedule via `eventSchedule`) per eventi ricorrenti
- [ ] Schema.org EventSeries per eventi ricorrenti (serie) e collegamento con Event (`superEvent`/`subEvent`)
- [ ] Schema.org JoinAction / LeaveAction per flussi registrazione/disiscrizione (come `potentialAction` o come dati di audit/export)

### `task-sitemap-generation.md` — Task: Implementare Sitemap Generation - Seo


# Task: Implementare Sitemap Generation - Seo

**Modulo**: Seo
**Priorita'**: Alta
**Completamento**: 0%

---
## Funzionalita'

- [ ] Generazione sitemap.xml automatica
- [ ] Include pagine CMS, eventi, speaker
- [ ] lastmod basato su updated_at
- [ ] Priority e changefreq configurabili
- [ ] Sitemap index per grandi siti
- [ ] Artisan command per rigenerare

## Criteri di Completamento

- [ ] /sitemap.xml accessibile e valido

### `user-research-3.md` — Seo Module - User Research


# Seo Module - User Research

**Module:** Seo  
**Version:** 1.0.0  
**Owner:** Product Team

---
## Research Goals

1. Understand search behavior
2. Identify content needs
3. Validate SEO features
4. Determine content creator needs

---

## Research Questions

| ID | Question | Priority |
