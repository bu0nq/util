<?php

namespace Atom\Util\Object\Multiton;

/**
 * ----------------------------------------------------------------------------------------------------
 * MultitonTrait
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
trait MultitonTrait
{
    /**
     * Instances
     *
     * @var    array
     * @since  1.0.0
     */
    private static $_instances = [];

    /**
     * Instance
     *
     * @var    int|string
     * @since  1.0.0
     */
    private $instance;

    /**
     * Get instance
     *
     * @param  int|string  $name
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function getInstance(
        $key
    ) : self {
        if(!isset(self::$_instances[$key]))
        {
            self::$_instances[$key] = new self($key);
        }

        return self::$_instances[$key];
    }

    /**
     * Construct
     *
     * @param  int|string  $key
     *
     * @return void
     *
     * @since  1.0.0
     */
    private function __construct(
        $key
    ) {
        $this->instance = $key;
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
