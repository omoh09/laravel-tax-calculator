<?php

namespace DrOmoh\TaxCalculator\Tests;

use PHPUnit\Framework\TestCase;
use DrOmoh\TaxCalculator\Strategies\NigeriaTaxCalculator;

class NigeriaTaxCalculatorTest extends TestCase
{
    public function testCalculateAnnualTax()
    {
        $calculator = new NigeriaTaxCalculator();

        $annualEarnings = 1440000.00;
        $annualPen = 69120.00;
        $annualNhf = 9000.00;

        $annualTax = $calculator->calculateAnnualTax($annualEarnings, $annualPen, $annualNhf);

        $this->assertIsFloat($annualTax);
        $this->assertGreaterThan(0, $annualTax);
    }

    public function testCalculateMonthlyTax()
    {
        $calculator = new NigeriaTaxCalculator();
        $annualTax = 120000.00;

        $monthlyTax = $calculator->calculateMonthlyTax($annualTax);

        $this->assertEquals(10000, $monthlyTax);
    }
}
