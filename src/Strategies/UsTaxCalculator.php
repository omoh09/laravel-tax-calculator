<?php

namespace DrOmoh\TaxCalculator\Strategies;

use DrOmoh\TaxCalculator\Contracts\TaxCalculatorInterface;

class UsTaxCalculator implements TaxCalculatorInterface
{
    // US-specific tax brackets and logic

    public function calculateAnnualTax(float $annualEarnings, float $annualPen, float $annualNhf): float
    {
        // US-specific tax calculation logic
        return $annualEarnings;
    }

    public function calculateMonthlyTax(float $annualTax): float
    {
        return $annualTax / 12;
    }
}
