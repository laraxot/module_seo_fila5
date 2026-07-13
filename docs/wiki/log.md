## [2026-07-12] verify | MetatagDataContract — codice allineato

- Confermato: zero `app/Interfaces/`, import `Modules\Seo\Contracts\MetatagDataContract`
- Guard: `bashscripts/tools/check-module-contracts-naming.sh`
- Skill Cursor: `.cursor/skills/module-contracts-naming-placement/SKILL.md`

## [2026-07-12] refactor | MetatagDataInterface → MetatagDataContract

- Spostato contratto: `app/Interfaces/MetatagDataInterface.php` → `app/Contracts/MetatagDataContract.php`
- `MetatagService::get()` e Facade type-hint su `MetatagDataContract`
- Wiki: [concepts/metatag-data-contract.md](./concepts/metatag-data-contract.md)
- Root: [module-contracts-naming-placement.md](../../../../../docs/wiki/rules/module-contracts-naming-placement.md)

## [2026-06-10] phpstan | Modulo Seo zero errori codice

- `./vendor/bin/phpstan analyse Modules/Seo` → 0 errori codice (79 fix: expect→Assert, Pest.php, TestCase)
- Campagna: [docs/chat/phpstan-modules-second-brain.md](../../../../../docs/chat/phpstan-modules-second-brain.md)

## [2026-06-05] docs | HackerNoon harness — tips 001-022 in wiki locale

- Stub/checklist: second-brain → canon Xot, ai-harness, [hackernoon map](../../../../../docs/wiki/concepts/hackernoon-ai-coding-tips-fixcity-map.md), [llm-wiki.txt](../../../../../bashscripts/tools/prompts/llm-wiki.txt)
- GitHub: [#272](https://github.com/laraxot/base_fixcity_fila5/issues/272) / [D#273](https://github.com/laraxot/base_fixcity_fila5/discussions/273)

# Seo Wiki Log

## [2026-04-15] init | wiki bootstrap
- Struttura wiki/log.md inizializzata.
- Layer raw: tutti i file in `docs/` (eccetto `wiki/`).
- Layer wiki: `docs/wiki/` — LLM-maintained, sintesi ad alto riuso.
- Schema: `docs/.schema/WIKI_SCHEMA.md`
- Adozione moduli: `docs/project/llm-wiki-module-adoption.md`
