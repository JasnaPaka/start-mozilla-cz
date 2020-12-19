# Start.mozilla.cz

[![Build Status](https://api.travis-ci.com/MozillaCZ/start-mozilla-cz.svg?branch=master)](https://travis-ci.com/MozillaCZ/start-mozilla-cz)

Web [Start.mozilla.cz](https://start.mozilla.cz/) je úvodní stránkou v prohlížeči balíku SeaMonkey (dříve Mozilla Suite).

## Úpravy obsahu

### Příprava
Abyste byli schopni spustit níže uvedené příkazy, je nutné mít nainstalované [Ruby 2.7](https://www.ruby-lang.org/en/documentation/installation/).

Před prvním sestavením (nebo po změně souboru `Gemfile`) je potřeba stáhnout potřebné závislosti.
```
$ make prepare
```

### Náhled
Při úpravách vzhledu i obsahu je dobré rovnou se podívat na výsledek. Níže uvedený příkaz sestaví obsah repositáře a zpřístupní ho na lokální adrese http://localhost:4000/.
```
$ bundle exec jekyll serve
```
Příkaz stačí spustit jednou v samostatném terminálu a nechat běžet. Pokud pak ve zdrojových souborech provedete nějakou změnu, Jekyll sestaví stránky znovu. Pro zobrazení efektu změn stačí obnovit načtenou stránku v prohlížeči (*F5*).

## Sestavení statické verze
Pro sestavení webu slouží tento příkaz.
```
$ make build
```
Statická verze stránek je vygenerovaná do adresáře `_site`. Pro nasazení stačí jeho obsah nahrát na server třeba přes FTP.

Pokud používáte Docker, pro sestavení můžete použít tento příkaz.
```
$ make build_in_podman
```

Na systémech, kde Docker nefunguje, nebo pokud upřednostňujete alternativní Podman, použijte tento příkaz.
```
$ make build_in_docker
```
