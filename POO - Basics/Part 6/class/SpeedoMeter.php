<?php

class SpeedoMeter
{
    const kmToMiles = 0.621371;

    public static function convertToMiles(float $value): ?string
    {
        return "$value kilomètres = ". round($value * self::kmToMiles, 2) ." miles.";
    }

    public static function convertToKilometers(float $value): ?string
    {
        return "$value miles = ". round($value / self::kmToMiles, 2)." kilomètres";
    }
}