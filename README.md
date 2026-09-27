> **Consolidated → archived.** This repo was merged into the single archive
> [**universal-analytics-fake-traffic-suite**](https://github.com/wantmyusername/universal-analytics-fake-traffic-suite).
> It is archived and kept only for reference.

# Analytics AVG Session — *Deprecated*

> **Deprecated / historical code.** This repository is ~7 years old and targets **Universal Analytics**, which was shut down on **July 1, 2023**. The script no longer works and is kept for historical and reference purposes only. It is not maintained and should not be used.

## What this code was

A single-file PHP script (`pageviewsmixed.php`) that generated synthetic pageview hits against the **Universal Analytics Measurement Protocol** endpoint:

```
https://www.google-analytics.com/collect
```

It simulated "mixed traffic" (desktop, mobile and tablet) by randomizing the payload of each hit and repeating it in a loop to inflate pageview and session counts for a given tracking ID.

Randomized fields included:

| Field | Randomized via |
|---|---|
| Device category | Spoofed `User-Agent` (iPhone / Android / Windows / Mac / iPad) |
| Screen resolution | `1920x1080`, `1366x768`, `360x640`, … |
| Viewport | `414x736`, `375x667`, `1024×768`, … |
| Client ID | Random numeric ID |
| Organic source | Search engine + keyword |
| Geo / language | Geographic location and language tag |
| Pageviews per hit | Loop count from the `pageviewshits` input |

### Inputs (via `POST`)

`urluno` … `urlcinco`, `titulodelapagina`, `CodigoAnalytics`, `UbicacionGeografica`, `tiempoporusuario`, `tagidioma`, `palabraclave`, `searchengine`, `pageviewshits`, `cantidaddehits`.

## Status

- **Universal Analytics** (`google-analytics.com/collect`) was deprecated and stopped processing data on **July 1, 2023**.
- The Google Analytics Measurement Protocol this script targets no longer exists in this form.
- **This script is non-functional.** It is preserved as a historical artifact of how the old Measurement Protocol worked.

## Disclaimer

This code is published for historical/reference purposes only. Its only purpose was to generate artificial analytics traffic, which violates the terms of service of analytics platforms and can be considered fraud. **Do not use it.**
