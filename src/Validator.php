<?php

namespace VasilDakov\Postcode;

/**
 * Class Validator
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
class Validator implements ValidatorInterface
{
    /**
     * Official gov.uk postcode regular expression
     */
    const POSTCODE = "
        /^([Gg][Ii][Rr] 0[Aa]{2})|((([A-Za-z][0-9]{1,2})
        |(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})|(([A-Za-z][0-9][A-Za-z])|
        ([A-Za-z][A-Ha-hJ-Yj-y][0-9]?[A-Za-z])))) [0-9][A-Za-z]{2})$/
    ";

    /**
     * @param  string  $value
     * @return boolean
     */
    public function isValid($value)
    {
        if (!\preg_match(self::POSTCODE, $value)) {
            return false;
        }
        return true;
    }
}
