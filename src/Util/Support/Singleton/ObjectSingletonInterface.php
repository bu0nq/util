<?php

namespace Atom\Util\Support\Singleton;

/**
 * ----------------------------------------------------------------------------------------------------
 * ObjectSingletonInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface ObjectSingletonInterface
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
