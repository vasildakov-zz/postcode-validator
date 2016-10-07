<?php

namespace VasilDakov\Postcode\Adapter;

/**
 * UK Postcode Validator Adapter
 * Format: "A(A)N(A/N)NAA (A[A]N[A/N] NAA)"
 */
class UnitedKingdom extends AbstractAdapter
{
    /**
     * Official gov.uk postcode regular expression
     */
    const REGEX = "/^([Gg][Ii][Rr] 0[Aa]{2})|((([A-Za-z][0-9]{1,2})|(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})
    |(([A-Za-z][0-9][A-Za-z])|([A-Za-z][A-Ha-hJ-Yj-y][0-9]?[A-Za-z])))) [0-9][A-Za-z]{2})$/";

}
