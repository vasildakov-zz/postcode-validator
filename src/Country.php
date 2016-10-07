<?php

namespace VasilDakov\Postcode;

class Country
{
    private static $countries = [
        'BG' => [],
        'GB' => [],
        'IT' => [],
        'NL' => [],
    ];

    /**
     * Construct
     * @param string $code
     * @throws \InvalidArgumentException
     */
    public function __construct($code)
    {
        if (!isset(self::$countries[$code])) {
            throw new \InvalidArgumentException(
                sprintf('Unknown country code "%s"', $code)
            );
        }

        $this->code = $code;
    }
}
