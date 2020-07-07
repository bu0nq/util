<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * AbstractFluent
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
abstract class AbstractFluent
{
    /**
     * Input
     *
     * @var    mixed
     * @since  1.0.0
     */
    protected $input;

    /**
     * Get
     *
     * @return mixed
     *
     * @since  1.0.0
     */
    public function get()
    {
        return $this->input;
    }
}
