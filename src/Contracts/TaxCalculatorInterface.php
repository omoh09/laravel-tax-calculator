<?php

namespace DrOmoh\TaxCalculator\Contracts;

interface TaxCalculatorInterface
{
    public function calculateAnnualTax(float $annualEarnings, float $annualPen, float $annualNhf): float;
    public function calculateMonthlyTax(float $annualTax): float;
}
