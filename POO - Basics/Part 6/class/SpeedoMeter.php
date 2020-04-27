<?php

class SpeedoMeter
{
    const kmToMiles = 0.621371;

    public static function convertToMiles(float $value): ?string
    {
        return "$value kilomètres = ". $value * self::kmToMiles ." miles.";
    }

    public static function convertToKilometers(float $value): ?string
    {
        return "$value miles = ". $value / self::kmToMiles." kilomètres";
    }
}