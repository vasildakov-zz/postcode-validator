<?php

namespace VasilDakov\Postcode\Adapter;

interface AdapterInterface
{
    /**
     * Performs validation
     *
     * @return boolean
     * @throws Adapter\Exception\ExceptionInterface
     */
    public function isValid($mixed);
}
