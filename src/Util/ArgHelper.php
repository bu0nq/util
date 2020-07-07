<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * ArgHelper
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
class ArgHelper extends AbstractHelper
{
    /**
     * Of
     *
     * @param  mixed  $input
     *
     * @return Atom\Util\ArgFluent
     *
     * @since  1.0.0
     */
    public static function of(
        $input = null
    ) : ArgFluent {
        return new ArgFluent($input);
    }

    /**
     * Explode
     *
     * @param  string  $input
     * @param  string  $value
     * @param  array  $delete
     *
     * @return array
     *
     * @since  1.0.0
     */
    public static function explode(
        string $input, string $value = '', array $delete = []
    ) : array {
        $input = explode(
            $value, StrHelper::trim($input)
        );

        if(!self::isNullArray($delete))
        {
            $input = ArrHelper::delete(
                $input, $delete
            );
        }

        return $input;
    }

    /**
     * Implode
     *
     * @param  array  $input
     * @param  string  $value
     * @param  array  $delete
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function implode(
        array $input, string $value = '', array $delete = []
    ) : string {
        if(!self::isNullArray($delete))
        {
            $input = ArrHelper::delete(
                $input, $delete
            );
        }

        return StrHelper::trim(
            implode($value, $input)
        );
    }

    /**
     * Is null array
     *
     * @param  array  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isNullArray(
        array $input
    ) : bool {
        if($input === [])
        {
            return true;
        }

        return false;
    }

    /**
     * Is null bool
     *
     * @param  bool  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isNullBool(
        bool $input
    ) : bool {
        if($input === false)
        {
            return true;
        }

        return false;
    }

    /**
     * Is null float
     *
     * @param  float  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isNullFloat(
        float $input
    ) : bool {
        if($input === (float) 0)
        {
            return true;
        }

        return false;
    }

    /**
     * Is null int
     *
     * @param  int  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isNullInt(
        int $input
    ) : bool {
        if($input === (int) 0)
        {
            return true;
        }

        return false;
    }

    /**
     * Is null string
     *
     * @param  string  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isNullString(
        string $input
    ) : bool {
        if(trim($input) === '')
        {
            return true;
        }

        return false;
    }

    /**
     * Is type array
     *
     * @param  mixed  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isTypeArray(
        $input
    ) : bool {
        return is_array($input);
    }

    /**
     * Is type bool
     *
     * @param  mixed  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isTypeBool(
        $input
    ) : bool {
        return is_bool($input);
    }

    /**
     * Is type float
     *
     * @param  mixed  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isTypeFloat(
        $input
    ) : bool {
        return is_float($input);
    }

    /**
     * Is type int
     *
     * @param  mixed  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isTypeInt(
        $input
    ) : bool {
        return is_int($input);
    }

    /**
     * Is type object
     *
     * @param  mixed  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isTypeObject(
        $input
    ) : bool {
        return is_object($input);
    }

    /**
     * Is type string
     *
     * @param  mixed  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function isTypeString(
        $input
    ) : bool {
        return is_string($input);
    }

    /**
     * To type array
     *
     * @param  mixed  $input
     *
     * @return array
     *
     * @since  1.0.0
     */
    public static function toTypeArray(
        $input
    ) : array {
        return (array) $input;
    }

    /**
     * To type bool
     *
     * @param  mixed  $input
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function toTypeBool(
        $input
    ) : bool {
        return (bool) $input;
    }

    /**
     * To type float
     *
     * @param  mixed  $input
     *
     * @return float
     *
     * @since  1.0.0
     */
    public static function toTypeFloat(
        $input
    ) : float {
        return (float) $input;
    }

    /**
     * To type int
     *
     * @param  mixed  $input
     *
     * @return int
     *
     * @since  1.0.0
     */
    public static function toTypeInt(
        $input
    ) : int {
        return (int) $input;
    }

    /**
     * To type object
     *
     * @param  mixed  $input
     *
     * @return object
     *
     * @since  1.0.0
     */
    public static function toTypeObject(
        $input
    ) : object {
        return (object) $input;
    }

    /**
     * To type string
     *
     * @param  mixed  $input
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function toTypeString(
        $input
    ) : string {
        return (string) $input;
    }
}
