<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * ArrHelper
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
class ArrHelper extends AbstractHelper
{
    /**
     * Of
     *
     * @param  array  $input
     *
     * @return Atom\Util\ArrFluent
     *
     * @since  1.0.0
     */
    public static function of(
        $input = []
    ) : ArrFluent {
        return new ArrFluent($input);
    }

    /**
     * Delete
     *
     * @param  array  $input
     * @param  array  $value
     *
     * @return array
     *
     * @since  1.0.0
     */
    public static function delete(
        array $input, array $value = []
    ) : array {
        if(!ArgHelper::isNullArray($value))
        {
            $input = array_diff(
                $input, $value
            );
        }

        return $input;
    }

    /**
     * Exists
     *
     * @param  array  $input
     * @param  int|string  $index
     *
     * @return bool
     *
     * @since  1.0.0
     */
    public static function exists(
        $input, $index
    ) : bool {
        return array_key_exists(
            $index, $input
        );
    }

    /**
     * Merge
     *
     * @param  array  $input
     * @param  array  $value
     *
     * @return array
     *
     * @since  1.0.0
     */
    public static function merge(
        array $input, array $value = []
    ) : array {
        if(!ArgHelper::isNullArray($value))
        {
            $input = array_merge(
                $input, $value
            );
        }

        return $input;
    }
}
