<?php

use Illuminate\Support\Str;

function generatePlatNomor($faker)
{
    $alphabet1 = Str::random($faker->randomElement([1, 2])); // Generate 1 or 2 random letters
    $alphabet2 = Str::random($faker->randomElement([1, 3])); // Generate 1 or 3 random letters
    $number = $faker->numberBetween(1000, 9999); // Generate random 4-digit number
    $plat = strtoupper($alphabet1 . ' ' . $number . ' ' . $alphabet2); // Format plat nomor

    return $plat;
}
