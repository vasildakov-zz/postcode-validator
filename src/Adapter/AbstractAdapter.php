<?php

namespace VasilDakov\Postcode\Adapter;

abstract class AbstractAdapter implements AdapterInterface
{
    const REGEX = '';

    /**
     * @param  string  $value
     * @return boolean
     */
    public function isValid($value)
    {
        if (!\preg_match(static::REGEX, $value)) {
            return false;
        }
        return true;
    }
}
