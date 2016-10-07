<?php
namespace VasilDakov\Tests;

use VasilDakov\Postcode\ValidatorInterface;
use VasilDakov\Postcode\Validator;
use VasilDakov\Postcode\Adapter;

/**
 * @link https://goo.gl/hNd6k0 Postcodes in the United Kingdom
 * @link https://goo.gl/BJroys British Forces Post Office (BFPO)
 */
class ValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \VasilDakov\Postcode\Validator::validate
     */
    public function testCanConstructedWithAdapters()
    {
        self::assertInstanceOf(Validator::class, new Validator(new Adapter\Bulgaria));
        self::assertInstanceOf(Validator::class, new Validator(new Adapter\Italy));
        self::assertInstanceOf(Validator::class, new Validator(new Adapter\Netherlands));
        self::assertInstanceOf(Validator::class, new Validator(new Adapter\UnitedKingdom));
    }
}
