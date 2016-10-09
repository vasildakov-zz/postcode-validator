<?php

namespace VasilDakov\Postcode;

/**
 * Class Validator
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
class Validator implements ValidatorInterface
{
    private $code;

    /**
     * Two-letter country codes defined in ISO 3166-1
     *
     * @var array<ISO 3166-1>
     */
    protected static $codes = [
        'BE', 'BG', 'CA', 'DE', 'DK', 'ES', 'FR', 'IT',
        'JP', 'MT', 'NL', 'US', 'SE', 'UK', 'US'
    ];

    /**
     * Postcode regexes by country code
     *
     * @var array
     */
    protected static $regexes = [
        'BE' => '[1-9]{1}[0-9]{3}',
        'BG' => '\d{4}',
        'CA' => '([A-Z]\d[A-Z]\s\d[A-Z]\d)',
        'DE' => '\b((?:0[1-46-9]\d{3})|(?:[1-357-9]\d{4})|(?:[4][0-24-9]\d{3})|(?:[6][013-9]\d{3}))\b',
        'DK' => '([D-d][K-k])?( |-)?[1-9]{1}[0-9]{3}',
        'ES' => '([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}',
        'FR' => '(F-)?((2[A|B])|[0-9]{2})[0-9]{3}$',
        'IT' => '(V-|I-)?[0-9]{5}',
        'JP' => '\d{3}-\d{4}',
        'MT' => '([A-Z]{3}\d{2}\d?)',
        'NL' => '[1-9][0-9]{3}[ ]?([A-RT-Za-rt-z][A-Za-z]|[sS][BCbcE-Re-rT-Zt-z])',
        'SE' => '(s-|S-){0,1}[0-9]{3}\s?[0-9]{2}',
        'UK' => '([Gg][Ii][Rr] 0[Aa]{2})|((([A-Za-z][0-9]{1,2})|(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})
    |(([A-Za-z][0-9][A-Za-z])|([A-Za-z][A-Ha-hJ-Yj-y][0-9]?[A-Za-z])))) [0-9][A-Za-z]{2})',
        'US' => 'd{5}\p{Punct}?\s?(?:\d{4})?',
    ];


    /**
     * Constructor
     *
     * @param string $code  Country code ISO 3166-1
     */
    public function __construct($code)
    {
        if (!array_key_exists($code, static::$regexes)) {
            throw new \InvalidArgumentException(
                "Country code '{$code}' invalid by ISO 3166-1 or not supported"
            );
        }

        $this->code = $code;
    }


    /**
     * Returns true if $value is a valid postcode
     *
     * @param  string  $value
     * @return boolean
     */
    public function isValid($value)
    {
        if (!preg_match('/^' . static::$regexes[$this->code] . '$/', $value)) {
            return false;
        }

        return true;
    }
}
