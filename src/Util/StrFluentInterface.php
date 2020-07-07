<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * StrFluentInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface StrFluentInterface
{
    /**
     * Construct
     *
     * @param  string  $input
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        $input = ''
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
