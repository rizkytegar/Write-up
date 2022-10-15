<div align="center">
<h1 align="center">👋 Pino Library</h3>
<p>Pino Library is a Security Class Library for PHP Projects.</p>
<br />
<p align="center">
<img src="https://firstcontributions.github.io/open-source-badges/badges/open-source-v1/open-source.svg" alt="Open Source Love"/>
<img src="https://img.shields.io/badge/HacktoberFest-2022-blueviolet" alt="Hacktober Badge"/>
<img src="https://img.shields.io/badge/Contributions-welcome-green.svg?style=flat&logo=github" alt="Contributions" />
<img src="https://img.shields.io/packagist/dt/gemarkode/Pino-library" alt="Total Downloads">
<img src="https://img.shields.io/packagist/v/gemarkode/Pino-library" alt="Latest Stable Version">
<img src="https://img.shields.io/github/repo-size/gemarkode/Pino-library" alt="Repo Size" />

</p>
</div>

## Installation

Install With Composer, make sure you install the latest version

```
composer require gemarkode/pino-library
```

## Usage

Please Include Pino Library Core System in your controller file

```php
<?php

// include autoload vendor
require_once __DIR__ . '/vendor/autoload.php';

// include Pino Library
use pino\Library\Pino;

```

See Usage examples in the test folder folder

### Pino Validation

#### Integer

Example Input Data, You can change the value of ```$data``` by request POST or GET

```php
$data = '!@#$%^&*()_+{}|":<>?,./;\][=-just test integer!#%^&*()123';
```

Example output, Data will be converted into a integer.                          

```php
return Pino::integer($data);

// Output from $data  123

```

See Integer Example in ```/test/ExampleInteger.php```

#### String

Example Input Data, You can change the value of $data by request POST or GET.   

```php
$data = '!@#$%^&*()_+{}|":<>?,./;\][=-just test string!#%^&*()123';
```

Example output, Data will be converted into a string.                           


```php
return Pino::string($data);
// Output from $data : just test string123
```
See String Example in ```/test/ExampleString.php```

### Pino Database Connection

Coming soon

### Pino Query Pattern

Coming Soon

### Cross Site Request Forgery (CSRF)

Coming Soon

### PHP Session Security

Coming Soon

## Contributing

Please Read [CONTRIBUTING.md](https://github.com/gemarkode/Pino-library/blob/main/CONTRIBUTING.md) Before Contributing.
