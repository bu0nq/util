<?php

namespace Atom\Util\Object\Multiton;

/**
 * ----------------------------------------------------------------------------------------------------
 * ObjectMultitonInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface ObjectMultitonInterface
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
