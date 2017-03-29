# laravel-mdash
EMT - Evgeny Muravjev Typograph for Laravel 5

## Install:

`composer require tttptd/laravel-mdash`


Add to config/app.php:

```php
Tttptd\Mdash\MdashServiceProvider::class
```

```php
'Mdash' => Tttptd\Mdash\Facades\Mdash::class
```

Run:

`php artisan vendor:publish`

Usage:

```php
$result = \Mdash::process($rawText, [
    'Text.paragraphs' => false,
    'Text.breakline' => false,
]);
```
