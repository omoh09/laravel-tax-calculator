<?php

namespace DrOmoh\TaxCalculator\Providers;

use Illuminate\Support\ServiceProvider;

class TaxCalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/taxcalculator.php', 'taxcalculator'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/taxcalculator.php' => config_path('taxcalculator.php'),
        ], 'config');
    }
}
