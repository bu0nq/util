<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * ArgFluentInterface
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
interface ArgFluentInterface
{
    /**
     * Construct
     *
     * @param  mixed  $input
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        $input = null
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
