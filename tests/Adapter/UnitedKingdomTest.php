<?php
namespace VasilDakov\Tests;

use VasilDakov\Postcode\Adapter;
use VasilDakov\Postcode\ValidatorInterface;
use VasilDakov\Postcode\Validator;

/**
 * @link https://goo.gl/hNd6k0 Postcodes in the United Kingdom
 * @link https://goo.gl/BJroys British Forces Post Office (BFPO)
 */
class UnitedKingdomTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider postcodeProvider
     * @covers \VasilDakov\Postcode\Adapter\UnitedKingdom::isValid
     */
    public function testCanValidatePostcodes($string, $expected)
    {
        $adapter = new Adapter\UnitedKingdom;

        self::assertEquals($expected, $adapter->isValid($string));
    }

    /**
     * Returns an array with valid and invalid postcodes
     */
    public function postcodeProvider()
    {
        return [
            // REGULAR
            ['EC1A 1BB', true],
            ['W1A 0AX', true],
            ['M1 1AE', true],
            ['B33 8TH', true],
            ['CR2 6XH', true],
            ['DN55 1PT', true],

            ['EC1V 9LB', true],
            ['TW1 3QS', true],
            ['TW8 8FB', true],
            ['BD23 2NB', true],
            ['BD2 3DX', true],
            // BFPO
            ['BF1 3AA', true],
            ['BF1 3AD', true],
            ['BF1 0AB', true],
            ['BF1 3AA', true],
            // HM SHIPS
            ['BF1 4AF', true], // HMS Albion
            ['BF1 4LF', true], // HMS Prince of Wales
            ['BF1 4LG', true], // HMS Queen Elizabeth
            // NAVAL PARTIES
            ['BF1 4TG', true],
            ['BF1 4TJ', true],
            ['BF1 3AQ', true],
            // Special postcodes
            ['XM4 5HQ', true],  // Santa Claus
            ['BS98 1TL', true], // TV Licensing
            ['BX5 5AT', true],  // VAT
            ['PH1 5RB', true],  // Royal Bank of Scotland Perth Chief Office
            ['SW1A 0AA', true], // House of Commons
            ['SW1A 0PW', true], // House of Lords (Palace of Westminster; see above for House of Commons)
            ['SW1A 1AA', true], // Buckingham Palace (the Monarch)
            ['SW1A 2AA', true], // 10 Downing Street (the Prime Minister)
            ['SW1H 0TL', true], // Transport for London (Windsor House, 50 Victoria Street)
            ['TW8 9GS', true],  // GlaxoSmithKline
            // FALSE
            ['ABC 123', false],
            ['XYZ 987', false],
        ];
    }
}
