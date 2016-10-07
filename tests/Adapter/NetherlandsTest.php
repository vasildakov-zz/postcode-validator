<?php
namespace VasilDakov\Tests;

use VasilDakov\Postcode\Adapter;
use VasilDakov\Postcode\ValidatorInterface;
use VasilDakov\Postcode\Validator;

/**
 * @link https://goo.gl/hNd6k0 Postcodes in the United Kingdom
 * @link https://goo.gl/BJroys British Forces Post Office (BFPO)
 */
class NetherlandsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider postcodeProvider
     * @covers \VasilDakov\Postcode\Adapter\Netherlands::isValid
     */
    public function testCanValidatePostcodes($string, $expected)
    {
        $adapter = new Adapter\Netherlands;
        self::assertEquals($expected, $adapter->isValid($string));
    }

    /**
     * Returns an array with valid and invalid postcodes
     */
    public function postcodeProvider()
    {
        return [
            // TRUE
            ['1234AB', true],
            ['1234 AB', true],
            ['1001 AB', true],

            // FALSE
            ['0123AB', false],
            ['1234A B', false],
            ['0123 AB', false],
        ];
    }
}
