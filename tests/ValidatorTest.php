<?php
namespace VasilDakov\Tests;

use VasilDakov\Postcode\ValidatorInterface;
use VasilDakov\Postcode\Validator;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider postcodeProvider
     * @covers \VasilDakov\Postcode\Validator::isValid
     */
    public function testIsValid($string, $expected)
    {
        self::assertEquals($expected, (new Validator)->isValid($string));
    }


    public function postcodeProvider()
    {
        return [
            ['EC1V 9LB', true],
            ['TW8 8FB',  true],
            ['ABC 123',  false],
            ['XYZ 987',  false],
        ];
    }
}