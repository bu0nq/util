<?php

namespace Atom\Util\Support\Singleton;

/**
 * ----------------------------------------------------------------------------------------------------
 * ObjectSingletonTrait
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
trait ObjectSingletonTrait
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
        if(self::$_instance === null)
        {
            self::$_instance = new self();
        }

        return self::$_instance;
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
