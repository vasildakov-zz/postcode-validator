<?php
namespace VasilDakov\Tests\Validator;

use VasilDakov\Postcode\ValidatorInterface;
use VasilDakov\Postcode\Validator;

class NetherlandsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider postcodeProvider
     * @covers \VasilDakov\Postcode\Validator::isValid
     */
    public function testCanValidateNetherlandsPostcodes($string, $expected)
    {
        $adapter = new Validator('NL');
        self::assertEquals($expected, $adapter->isValid($string));
    }

    /**
     * Returns an array with valid and invalid postcodes
     */
    public function postcodeProvider()
    {
        return [
            // TRUE
            ['7957ZG', true],
            ['7960AA', true],
            ['7920AB', true],
            ['8382ZT', true],
            ['1012JS', true],
            ['7957 ZG', true],
            ['7960 AA', true],
            ['7920 AB', true],
            ['8382 ZT', true],
            ['1012 JS', true],

            // FALSE
            ['0123AB', false],
            ['1234A B', false],
            ['0123 AB', false],
            ['1234 JS', true],
        ];
    }
}
