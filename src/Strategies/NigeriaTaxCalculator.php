<?php

namespace DrOmoh\TaxCalculator\Strategies;

use DrOmoh\TaxCalculator\Contracts\TaxCalculatorInterface;

class NigeriaTaxCalculator implements TaxCalculatorInterface
{
    private $taxBrackets;

    public function __construct()
    {
        $this->taxBrackets = [
            300000 => 0.07,
            300000 => 0.11,
            500000 => 0.15,
            500000 => 0.19,
            1600000 => 0.21,
            PHP_INT_MAX => 0.24
        ];
    }

    public function calculateAnnualTax(float $annualEarnings, float $annualPen, float $annualNhf): float
    {
        $totalStatutoryDeduction = $annualPen + $annualNhf;
        $annualStatutoryEarnings = $annualEarnings - $totalStatutoryDeduction;
        $cra = 0.2 * $annualStatutoryEarnings + 200000;
        $taxableEarnings = $annualStatutoryEarnings - $cra;

        return $this->applyTaxBrackets($taxableEarnings);
    }

    public function calculateMonthlyTax(float $annualTax): float
    {
        return $annualTax / 12;
    }

    private function applyTaxBrackets(float $taxableEarnings): float
    {
        $remainingIncome = $taxableEarnings;
        $totalTax = 0;

        foreach ($this->taxBrackets as $limit => $rate) {
            if ($remainingIncome > $limit) {
                $tax = $limit * $rate;
            } else {
                $tax = $remainingIncome * $rate;
                $totalTax += $tax;
                break;
            }

            $totalTax += $tax;
            $remainingIncome -= $limit;
        }

        return $totalTax;
    }
}
