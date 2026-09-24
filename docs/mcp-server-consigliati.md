<<<<<<< HEAD
---
module: theme
topic: mcp-server-consigliati
canonical: ../../../Themes/docs/shared-components/MCP_SERVER_CONSIGLIATI.md
---

See canonical documentation: ../../../Themes/docs/shared-components/MCP_SERVER_CONSIGLIATI.md
<<<<<<< HEAD
=======
<<<<<<< .merge_file_j3y3lg
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
# Server MCP consigliati per il modulo Seo

## Scopo del modulo
Analisi SEO, automazione di audit, recupero dati da web, generazione di report.

## Server MCP consigliati
- **fetch**: Per recuperare dati da web, API SEO, strumenti di analisi.
- **memory**: Per mantenere stato tra analisi e report.
- **puppeteer**: Per automazione browser, crawling, screenshot, analisi pagine.
- **everything**: Per avere tutte le funzionalità MCP disponibili.

## Esempio di configurazione MCP
```json
{
  "mcpServers": {
    "fetch": { "command": "npx", "args": ["-y", "@modelcontextprotocol/server-fetch"] },
    "memory": { "command": "npx", "args": ["-y", "@modelcontextprotocol/server-memory"] },
    "puppeteer": { "command": "npx", "args": ["-y", "@modelcontextprotocol/server-puppeteer"] },
    "everything": { "command": "npx", "args": ["-y", "@modelcontextprotocol/server-everything"] }
  }
}
```

**Nota:**
Aggiungi solo i server che realmente ti servono per il tuo workflow. 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_k3An3Z
=======
>>>>>>> 54cc9c4 (chore(release): 1.0.0-dev.3 [skip ci])
>>>>>>> 19508be (chore(release): 1.0.0-dev.3 [skip ci])
