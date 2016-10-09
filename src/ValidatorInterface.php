<?php

namespace VasilDakov\Postcode;

/**
 * Interface ValidatorInterface
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
interface ValidatorInterface
{
    /**
     * @param  string  $value
     * @return boolean
     */
    public function isValid($value);
}
