<?php

namespace Atom\Util\Support\Singleton;

/**
 * ----------------------------------------------------------------------------------------------------
 * StaticSingletonInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface StaticSingletonInterface
{
    /**
     * Get instance
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function getInstance() : self;
}
