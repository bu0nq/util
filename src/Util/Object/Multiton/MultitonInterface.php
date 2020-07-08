<?php

namespace Atom\Util\Object\Multiton;

/**
 * ----------------------------------------------------------------------------------------------------
 * MultitonInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface MultitonInterface
{
    /**
     * Get instance
     *
     * @param  int|string  $key
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function getInstance(
        $key
    ) : self;
}
