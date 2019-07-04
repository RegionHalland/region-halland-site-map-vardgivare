# Visa Site Map för vardgivare.regionhalland.se

## Hur man använder Region Hallands plugin "region-halland-site-map-vardgivare"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-site-map-vardgivare".


## Användningsområde

Denna plugin visar en Site Map i plugin-foldern, dvs
```sh
http://[SITE-NAME]/app/plugins/region-halland-site-map-vardgivare/site-map/site-map.php
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-site-map-vardgivare.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-site-map-vardgivare.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-site-map-vardgivare": "1.0.0"
},
```


## Versionhistorik

### 1.0.0
- Första version