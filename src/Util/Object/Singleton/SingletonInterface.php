<?php

namespace Atom\Util\Object\Singleton;

/**
 * ----------------------------------------------------------------------------------------------------
 * SingletonInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface SingletonInterface
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
