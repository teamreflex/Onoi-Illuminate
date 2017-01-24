# Onoi-Illuminate
Laravel/Illuminate cache driver for onoi/cache.

## Install

```
composer require team-reflex/onoi-illuminate
```

## Usage

Either pull the Illuminate cache repository from the container or typehint an instance.

```php
use Illuminate\Cache\Repository;
use Reflex\OnoiIlluminate\IlluminateCache;

$cache = new IlluminateCache(app(Repository::class));
```
