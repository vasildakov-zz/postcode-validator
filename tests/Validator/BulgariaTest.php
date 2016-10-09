<?php
namespace VasilDakov\Tests\Validator;

use VasilDakov\Postcode\ValidatorInterface;
use VasilDakov\Postcode\Validator;

class BulgariaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider postcodeProvider
     * @covers \VasilDakov\Postcode\Validator::isValid
     */
    public function testCanValidateBulgarianPostcodes($string, $expected)
    {
        $adapter = new Validator('BG');
        self::assertEquals($expected, $adapter->isValid($string));
    }

    /**
     * Returns an array with valid and invalid postcodes
     */
    public function postcodeProvider()
    {
        return [
            // TRUE
            ['1000', true], // Sofia
            ['9000', true], // Varna
            ['4000', true], // Plovdiv
            ['8800', true], // Sliven

            // FALSE
            ['AB123', false],
            ['12345', false],
            ['123AB', false],
        ];
    }
}
