<?php

namespace VasilDakov\Postcode;

/**
 * Class Validator
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
class Validator implements ValidatorInterface
{
    private static $regexp = [
        'BG' => '/^\d{4}$/',
        'GB' => '/^[A-Za-z]{1,2}\d[a-z\d]?\s*\d[A-Za-z]{2}$/',
        'IT' => '/^\d{5}$/',
        'NL' => '/^[1-9][0-9]{3}[ ]?([A-RT-Za-rt-z][A-Za-z]|[sS][BCbcE-Re-rT-Zt-z])$/',
    ];


    /**
     * @var Adapter\AdapterInterface $adapter
     */
    private $adapter;

    /**
     * Constructor
     *
     * @param Adapter\AdapterInterface $adapter
     */
    public function __construct(Adapter\AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param  mixed $value
     * @return boolean
     */
    public function validate($value)
    {
        return $this->adapter->isValid($value);
    }
}
