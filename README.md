
# Laravel Social Feed API
Laravel package for social media feed.

## Table of Contents

[Getting Started](#getting-started)<br>
[Installation](#installation)<br>

<a name="getting-started"></a>
## Getting Started
Below are the steps in order to integrate social feed API to your Laravel project.

<a name="installation"></a>
## Installation
Install the package using composer:

```bash
composer require jscustom/laravel-social-feed
```

Export the configuration file:

```bash
php artisan vendor:publish --provider="JSCustom\LaravelSocialFeed\Providers\LaravelSocialFeedServiceProvider" --tag="config"
```

Export the migration files:

```bash
php artisan vendor:publish --provider="JSCustom\LaravelSocialFeed\Providers\LaravelSocialFeedServiceProvider" --tag="migrations"
```

Do a quick migration:

```bash
php artisan migrate --path=/database/migrations/laravel-social-feed
```