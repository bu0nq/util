<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * StrHelper
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
class StrHelper extends AbstractHelper
{
    /**
     * Of
     *
     * @param  string  $input
     *
     * @return Atom\Util\StrFluent
     *
     * @since  1.0.0
     */
    public static function of(
        $input = ''
    ) : StrFluent {
        return new StrFluent($input);
    }

    /**
     * After
     *
     * @param  string  $input
     * @param  string  $value
     * @param  string  $sign
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function after(
        string $input, string $value = '', string $sign = ''
    ) : string {
        return self::trim($input).$sign.self::trim($value);
    }

    /**
     * Before
     *
     * @param  string  $input
     * @param  string  $value
     * @param  string  $sign
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function before(
        string $input, string $value = '', string $sign = ''
    ) : string {
        return self::trim($value).$sign.self::trim($input);
    }

    /**
     * Hash
     *
     * @param  string  $input
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function hash(
        string $input
    ) : string {
        return md5(self::trim($input));
    }

    /**
     * Length
     *
     * @param  string  $value
     * @param  string|null  $encoding
     *
     * @return int
     *
     * @since  1.0.0
     */
    public static function length(
        string $input, $encoding = null
    ) : int {
        if($encoding)
        {
            return mb_strlen($input, $encoding);
        }

        return mb_strlen($input);
    }

    /**
     * Limit
     *
     * @param  string  $input
     * @param  int  $limit
     * @param  string  $end
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function limit(
        string $input, int $limit = 100, string $end = '...'
    ) {
        if(mb_strwidth($input, 'UTF-8') <= $limit)
        {
            return $input;
        }

        return rtrim(
            mb_strimwidth($input, 0, $limit, '', 'UTF-8')
        ).$end;
    }

    /**
     * Lowercase
     *
     * @param  string  $input
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function lowercase(
        string $input
    ) : string {
        return mb_strtolower(
            $input, 'UTF-8'
        );
    }

    /**
     * Replace
     *
     * @param  string  $input
     * @param  string  $value
     * @param  array  $search
     *
     * @return mixed
     *
     * @since  1.0.0
     */
    public static function replace(
        string $input, string $value = '', array $search = []
    ) {
        return str_replace(
            $search, $value, $input
        );
    }

    /**
     * Trim
     *
     * @param  string  $input
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function trim(
        string $input
    ) : string {
        return trim($input);
    }

    /**
     * Uppercase
     *
     * @param  string  $input
     *
     * @return string
     *
     * @since  1.0.0
     */
    public static function uppercase(
        string $input
    ) : string {
        return mb_strtoupper(
            $input, 'UTF-8'
        );
    }
}
