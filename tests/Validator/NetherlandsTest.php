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
