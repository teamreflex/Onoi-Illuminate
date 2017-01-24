# Onoi-Illuminate
Laravel/Illuminate cache driver for onoi/cache.

### Usage

Either pull the Illuminate cache repository from the container or typehint an instance.

```
use Illuminate\Cache\Repository;
use Reflex\OnoiIlluminate\IlluminateCache;

$cache = new IlluminateCache(app(Repository::class));
```