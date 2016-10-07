<?php

namespace VasilDakov\Postcode\Adapter;

/**
 * Netherlands postcode validator
 *
 * @link https://en.wikipedia.org/wiki/Postal_codes_in_the_Netherlands
 */
class Netherlands extends AbstractAdapter
{
    /**
     * Dutch Postal Codes regular expression
     */
    //const REGEX = "/^[1-9][0-9]{3}\s?[a-zA-Z]{2}$/";
    const REGEX = "/^[1-9][0-9]{3}[ ]?([A-RT-Za-rt-z][A-Za-z]|[sS][BCbcE-Re-rT-Zt-z])$/";
}
