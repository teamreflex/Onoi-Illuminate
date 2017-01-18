<?php

namespace Reflex\OnoiIlluminate;

use Illuminate\Cache\Repository as IlluminateCacheClient;
use Onoi\Cache\Cache;

/**
 * Illuminate Cache decorator
 *
 * @license GNU GPL v2+
 * @since 1.0
 *
 * @author xKairu
 */
class IlluminateCache implements Cache
{
    /**
     * @var IlluminateCacheClient
     */
    private $cache = null;

    /**
     * @since 1.0
     *
     * @param IlluminateCacheClient $cache
     */
    public function __construct(IlluminateCacheClient $cache)
    {
        $this->cache = $cache;
    }

    /**
     * @since  1.0
     *
     * {@inheritDoc}
     */
    public function fetch($id)
    {
        return $this->cache->get($id);
    }

    /**
     * @since  1.0
     *
     * {@inheritDoc}
     */
    public function contains($id)
    {
        return $this->cache->has($id);
    }

    /**
     * @since  1.0
     *
     * {@inheritDoc}
     */
    public function save($id, $data, $ttl = 0)
    {
        $this->cache->put($id, $data, $ttl);
    }

    /**
     * @since  1.0
     *
     * {@inheritDoc}
     */
    public function delete($id)
    {
        return $this->cache->forget($id);
    }

    /**
     * @since  1.0
     *
     * {@inheritDoc}
     */
    public function getStats()
    {
        return null;
    }

    /**
     * @since  1.2
     *
     * {@inheritDoc}
     */
    public function getName()
    {
        return __CLASS__ . '::' . get_class($this->cache);
    }
}
