<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * ArrFluent
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
class ArrFluent extends AbstractFluent implements ArrFluentInterface
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
    ) {
        $this->input = $input;
    }

    /**
     * Delete
     *
     * @param  array  $value
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function delete(
        array $value = []
    ) : self {
        return new static(
            ArrHelper::delete($this->input, $value)
        );
    }

    /**
     * Exists
     *
     * @param  int|string  $index
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function exists(
        $index
    ) : self {
        return new static(
            Arr::exists($this->input, $index)
        );
    }

    /**
     * Merge
     *
     * @param  array  $value
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function merge(
        array $value = []
    ) : self {
        return new static(
            ArrHelper::merge($this->input, $value)
        );
    }
}
