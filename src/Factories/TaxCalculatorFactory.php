<?php

namespace DrOmoh\TaxCalculator\Factories;

use DrOmoh\TaxCalculator\Contracts\TaxCalculatorInterface;
use DrOmoh\TaxCalculator\Strategies\NigeriaTaxCalculator;
use DrOmoh\TaxCalculator\Strategies\UsTaxCalculator;

class TaxCalculatorFactory
{
    public static function createCalculator(string $country): TaxCalculatorInterface
    {
        $country = $country ?? config('taxcalculator.default_country');

        switch ($country) {
            case 'Nigeria':
                return new NigeriaTaxCalculator();
            case 'USA':
                return new UsTaxCalculator();
            // Add more countries as needed
            default:
                throw new \Exception("Tax calculator for {$country} not implemented.");
        }
    }
}
