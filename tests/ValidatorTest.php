<?php
namespace VasilDakov\Tests;

use VasilDakov\Postcode\ValidatorInterface;
use VasilDakov\Postcode\Validator;
use VasilDakov\Postcode\Adapter;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \VasilDakov\Postcode\Validator::__construct
     */
    public function testCanBeConstructedWithValidCountryCode()
    {
        self::assertInstanceOf(Validator::class, new Validator('BG'));
        self::assertInstanceOf(Validator::class, new Validator('DE'));
        self::assertInstanceOf(Validator::class, new Validator('UK'));
        self::assertInstanceOf(Validator::class, new Validator('MT'));
    }

    /**
     * @covers \VasilDakov\Postcode\Validator::__construct
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Country code 'AA' invalid by ISO 3166-1 or not supported
     */
    public function testConstructorThrowsAnExceptionWithInvalidCode()
    {
        $validator = new Validator('AA');
    }


    /**
     * @covers \VasilDakov\Postcode\Validator::__construct
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Country code 'GR' invalid by ISO 3166-1 or not supported
     */
    public function testConstructorThrowsAnExceptionWithNonSupportedCode()
    {
        $validator = new Validator('GR');
    }
}
