# Laravel Env Diff

[![Latest Stable Version](https://poser.pugx.org/romanzipp/laravel-env-diff/version)](https://packagist.org/packages/romanzipp/laravel-env-diff)
[![Total Downloads](https://poser.pugx.org/romanzipp/laravel-env-diff/downloads)](https://packagist.org/packages/romanzipp/laravel-env-diff)
[![License](https://poser.pugx.org/romanzipp/laravel-env-diff/license)](https://packagist.org/packages/romanzipp/laravel-env-diff)

Create a visual Diff of .env and .env.example files

## Installation

```
composer require romanzipp/laravel-env-diff
```

Or add `romanzipp/laravel-env-diff` to your `composer.json`

```
"romanzipp/laravel-env-diff": "*"
```

Run composer update to pull the latest version.

**If you use Laravel 5.5+ you are already done, otherwise continue:**

```php
romanzipp\EnvDiff\Providers\EnvDiffProvider::class,
```

Add Service Provider to your app.php configuration file:

## Configuration