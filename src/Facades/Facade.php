<?php

namespace DrOmoh\TaxCalculator\Facades;

use Illuminate\Support\Facades\Facade;

class TaxCalculator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tax-calculator';
    }
}
