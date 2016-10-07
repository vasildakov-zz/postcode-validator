<?php

namespace VasilDakov\Postcode\Adapter;

/**
 * Italy Postcode Validator Adapter
 *
 * Codice di Avviamento Postale (CAP).  * Also used by San Marino and Vatican City.
 * First two digits identify province with some exceptions,  * because there are
 * more than 100 provinces.
 */
class Italy extends AbstractAdapter
{
    const REGEX = "^\\d{5}$/"; // Format: "NNNNN"
}
