# Ponytail audit — Seo (over-engineering)

**Ultimo run:** 2026-06-30  
**Modulo:** SEO, metatag, sitemap.  
**Hub:** [../../../../docs/audit/ponytail-audit.md](../../../../docs/audit/ponytail-audit.md)  
**Remediation:** [../../../../docs/project/ponytail-audit-remediation.md](../../../../docs/project/ponytail-audit-remediation.md)
**GitHub monorepo:** [Issue #221](https://github.com/laraxot/base_predict_fila5/issues/221) · [Discussion #222](https://github.com/laraxot/base_predict_fila5/discussions/222) · [Discussion #228](https://github.com/laraxot/base_predict_fila5/discussions/228)
**Repo upstream:** [module_seo_fila5](https://github.com/laraxot/module_seo_fila5) · [Issue #12](https://github.com/laraxot/module_seo_fila5/issues/12)

## Findings

| # | Tag | Cosa | Sostituzione | Path | Stato |
|---|-----|------|--------------|------|-------|
| S1 | `contract` | `MetatagDataInterface` in `app/Interfaces/` | `MetatagDataContract` in `app/Contracts/` | ✅ migrato 2026-07-12 — vedi [wiki/concepts/metatag-data-contract.md](wiki/concepts/metatag-data-contract.md) |
| S2 | `yagni` | Doppio `MetatagData` Seo vs Xot | Un tipo canonico o facade verso Xot | `app/Data/MetatagData.php` | da discutere |

## Collegamenti

- [wiki/concepts/ponytail-audit.md](./wiki/concepts/ponytail-audit.md)
- [Xot MetatagData reference](../../Xot/docs/wiki/reference/xotdata-metatagdata-not-simple-dto.md)
