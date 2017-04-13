thetribe/json
====

`thetribe/json` is a small wrapper around the `json_*` fonctions that does two things:
 - Convert errors to exceptions
 - Normalize parameters

Install
-------

Install `thetribe/json` using Composer.

```bash
composer require thetribe/json
```

Usage
-----

### Decoding

```php
<?php

use function TheTribe\JSON\decode;

$value = decode($json, $options, $depth);
```

### Encoding

```php
<?php

use function TheTribe\JSON\encode;

$json = encode($value, $options, $depth);
```
