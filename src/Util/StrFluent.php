<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * StrFluent
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
class StrFluent extends AbstractFluent implements StrFluentInterface
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
        $input = ''
    ) {
        $this->input = $input;
    }

    /**
     * After
     *
     * @param  string  $value
     * @param  string  $sign
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function after(
        string $value = '', string $sign = ''
    ) : self {
        return new static(
            StrHelper::after($this->input, $value, $sign)
        );
    }

    /**
     * Before
     *
     * @param  string  $value
     * @param  string  $sign
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function before(
        string $value = '', string $sign = ''
    ) : self {
        return new static(
            StrHelper::before($this->input, $value, $sign)
        );
    }

    /**
     * Hash
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function hash() : self
    {
        return new static(
            StrHelper::hash($this->input)
        );
    }

    /**
     * Length
     *
     * @param  string  $value
     * @param  string|null  $encoding
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function length(
        $encoding = null
    ) : self {
        return new static(
            StrHelper::length($this->input, $encoding)
        );
    }

    /**
     * Limit
     *
     * @param  int  $limit
     * @param  string  $end
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function limit(
        int $limit = 100, string $end = '...'
    ) : self {
        return new static(
            StrHelper::limit($this->input, $limit, $end)
        );
    }

    /**
     * Lowercase
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function lowercase() : self
    {
        return new static(
            StrHelper::lowercase($this->input)
        );
    }

    /**
     * Replace
     *
     * @param  string  $replace
     * @param  array  $search
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function replace(
        string $value = '', array $search = []
    ) : self {
        return new static(
            StrHelper::replace($this->input, $value, $search)
        );
    }

    /**
     * Trim
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function trim() : self
    {
        return new static(
            StrHelper::trim($this->input)
        );
    }

    /**
     * Uppercase
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function uppercase() : self
    {
        return new static(
            StrHelper::uppercase($this->input)
        );
    }
}
