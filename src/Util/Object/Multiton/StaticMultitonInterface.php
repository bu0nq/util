<?php

namespace Atom\Util\Object\Multiton;

/**
 * ----------------------------------------------------------------------------------------------------
 * StaticMultitonInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface StaticMultitonInterface
{
    /**
     * Get instance
     *
     * @param  int|string  $key
     *
     * @return self
     *
     * @since  1.0.0
     */
    public static function getInstance(
        $key
    ) : self;
}
