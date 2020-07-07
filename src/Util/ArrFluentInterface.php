<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * ArrFluentInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface ArrFluentInterface
{
    /**
     * Construct
     *
     * @param  array  $input
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        $input = []
    );

    /**
     * Get
     *
     * @return mixed
     *
     * @since  1.0.0
     */
    public function get();
}
