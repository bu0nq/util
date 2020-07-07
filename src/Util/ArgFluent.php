<?php

namespace Atom\Util;

/**
 * ----------------------------------------------------------------------------------------------------
 * ArgFluent
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Util
 * @version  1.0.0
 */
class ArgFluent extends AbstractFluent implements ArgFluentInterface
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
    ) {
        $this->input = $input;
    }

    /**
     * Explode
     *
     * @param  string  $value
     * @param  array  $delete
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function explode(
        string $value = '', array $delete = []
    ) : self {
        return new static(
            ArgHelper::explode($this->input, $value, $delete)
        );
    }

    /**
     * Implode
     *
     * @param  string  $value
     * @param  array  $delete
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function implode(
        string $value = '', array $delete = []
    ) : self {
        return new static(
            ArgHelper::implode($this->input, $value, $delete)
        );
    }

    /**
     * Is null array
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isNullArray() : self
    {
        return new static(
            ArgHelper::isNullArray($this->input)
        );
    }

    /**
     * Is null bool
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isNullBool() : self
    {
        return new static(
            ArgHelper::isNullBool($this->input)
        );
    }

    /**
     * Is null float
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isNullFloat() : self
    {
        return new static(
            ArgHelper::isNullFloat($this->input)
        );
    }

    /**
     * Is null int
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isNullInt() : self
    {
        return new static(
            ArgHelper::isNullInt($this->input)
        );
    }

    /**
     * Is null string
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isNullString() : self
    {
        return new static(
            ArgHelper::isNullString($this->input)
        );
    }

    /**
     * Is type array
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isTypeArray() : self
    {
        return new static(
            ArgHelper::isTypeArray($this->input)
        );
    }

    /**
     * Is type bool
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isTypeBool() : self
    {
        return new static(
            ArgHelper::isTypeBool($this->input)
        );
    }

    /**
     * Is type float
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isTypeFloat() : self
    {
        return new static(
            ArgHelper::isTypeFloat($this->input)
        );
    }

    /**
     * Is type int
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isTypeInt() : self
    {
        return new static(
            ArgHelper::isTypeInt($this->input)
        );
    }

    /**
     * Is type object
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isTypeObject() : self
    {
        return new static(
            ArgHelper::isTypeObject($this->input)
        );
    }

    /**
     * Is type string
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function isTypeString() : self
    {
        return new static(
            ArgHelper::isTypeString($this->input)
        );
    }

    /**
     * To type array
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function toTypeArray() : self
    {
        return new static(
            ArgHelper::toTypeArray($this->input)
        );
    }

    /**
     * To type bool
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function toTypeBool() : self
    {
        return new static(
            ArgHelper::toTypeBool($this->input)
        );
    }

    /**
     * To type float
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function toTypeFloat() : self
    {
        return new static(
            ArgHelper::toTypeFloat($this->input)
        );
    }

    /**
     * To type int
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function toTypeInt() : self
    {
        return new static(
            ArgHelper::toTypeInt($this->input)
        );
    }

    /**
     * To type object
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function toTypeObject() : self
    {
        return new static(
            ArgHelper::toTypeObject($this->input)
        );
    }

    /**
     * To type string
     *
     * @return self
     *
     * @since  1.0.0
     */
    public function toTypeString() : self
    {
        return new static(
            ArgHelper::toTypeString($this->input)
        );
    }
}
