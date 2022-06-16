
[![Issues](	https://img.shields.io/github/issues/charef00/free-translate-api?style=flat-square)](https://github.com/charef00/free-translate-api/releases)
## Installation

### Video Tutorial

[Watch a Video Tutorial here](https://packagist.org/packages/charef/free-translate-api)

### You need to translate your text ?

First, pull in the package through Composer.

Run `composer require charef/free-translate-api`

And then, if using Laravel 5 or >, include the service provider within `config/app.php`.

```php
'providers' => [
    Charef\FreeTranslateApi\FreeTranslateAPIServideProvider::class,
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    'TranslateAPI' => Charef\FreeTranslateApi\TranslateAPI::class,
];
```

## Usage

you need just to define source and target langage and text ...

```php
use Charef\FreeTranslateApi\TranslateAPI;
public function translate()
{
    $source = 'ar';
    $target = 'en';
    $text = 'مرحبا';

    $result=TranslateAPI::translate($source, $target, $text);

    // Welcome
    dd($result);
}
```
# thanks to 
[Adrián Barrio Andrés](https://github.com/statickidz).
