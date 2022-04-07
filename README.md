# CouchCMS Add Hash

CouchCMS Addon. Adds a new `<cms:addhash>`-Tag to add a timebased hash to a url. This forces the browser to reload a linked ressource (i.e. CSS oder Javascript).

## Installation

1. Download Add-On
2. Extract directory `addhash` in `'couch/addons'` folder.
3. Add the following entry in `'couch/addons/kfunctions.php'` file<br>(if this file is not found, rename the `kfunctions.example.php` file to `kfunctions.php`)

``` php
require_once( K_COUCH_DIR.'addons/addhash/addhash.php' );
```

## Usage

This addon makes available a new `<cms:addhash>`-Tag. It is very simple to use:

``` html
<link rel="stylesheet" href="<cms:addhash>/assets/css/main.min.css</cms:addhash>">
```

The generated code looks like:

``` html
<link rel="stylesheet" href="/assets/css/main.min.css?20220407120139">
```

## Parameter

* mode

Parameter can be set to `filedate` or `now` (default is `filedate`):

- `filedate` generates the hash from the filedatetime.
- `now` generates the hash from the actual datetime.

``` html
<link rel="stylesheet" href="<cms:addhash mode='now'>/assets/css/main.min.css</cms:addhash>">
```
