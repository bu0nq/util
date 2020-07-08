<?php

namespace Atom\Util\Object\Singleton;

/**
 * ----------------------------------------------------------------------------------------------------
 * StaticSingletonTrait
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
trait StaticSingletonTrait
{
    /**
     * Instance
     *
     * @var    object
     * @since  1.0.0
     */
    private static $_instance = null;

    /**
     * Get instance
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function getInstance() : self
    {
        if(static::$_instance === null)
        {
            static::$_instance = new static();
        }

        return static::$_instance;
    }

    /**
     * Construct
     *
     * @return void
     *
     * @since  1.0.0
     */
    private function __construct()
    {

    }

    /**
     * Clone
     *
     * @return void
     *
     * @since  1.0.0
     */
    private function __clone()
    {

    }

    /**
     * Wakeup
     *
     * @return void
     *
     * @since  1.0.0
     */
    private function __wakeup()
    {

    }
}
