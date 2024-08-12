# Laravel Tax Calculator Package

![Packagist Version](https://packagist.org/packages/homord/tax-calculator)
![License](https://github.com/omoh09/laravel-tax-calculator/blob/main/LICENSE.md)

## Introduction

The **Laravel Tax Calculator** package provides a flexible and extensible way to calculate taxes for different countries. It supports country-specific tax calculations and can be easily extended to include additional countries as needed.

## Features

- Calculate annual and monthly taxes based on country-specific tax laws.
- Easily extendable to support additional countries.
- Clean and organized code using Strategy and Factory design patterns.

## Installation

You can install the package via Composer:
```sh
composer require DrOmoh/tax-calculator
```
After installing, publish the configuration file by running:
```bash
php artisan vendor:publish --provider="YourVendorName\TaxCalculator\Providers\TaxCalculatorServiceProvider"
```

## Usage
To calculate taxes, first, create an instance of the tax calculator for the specific country. Then, use it to calculate the annual and monthly taxes
```bash
use YourVendorName\TaxCalculator\Factories\TaxCalculatorFactory;

$calculator = TaxCalculatorFactory::createCalculator('Nigeria');

// Sample data
$annualEarnings = 1440000.00;
$annualPen = 69120.00;
$annualNhf = 9000.00;

$annualTax = $calculator->calculateAnnualTax($annualEarnings, $annualPen, $annualNhf);
$monthlyTax = $calculator->calculateMonthlyTax($annualTax);

echo "Annual Tax: {$annualTax}\n";
echo "Monthly Tax: {$monthlyTax}\n";
```

## Testing
To run the package's tests, execute the following command
```bash
vendor/bin/phpunit
```

## Coding Standards
The package follows the PSR-2 coding standard. You can check the code style by running:
```bash
vendor/bin/phpcs --standard=PSR2 src/
```

## Static Analysis
Run PHPStan to perform static analysis
```bash
vendor/bin/phpstan analyse src --level=max
```
## Contributing
Contributions are welcome! Please submit a pull request or open an issue on GitHub.
## _Steps to Contribute_
- Fork the repository.
- Create a new branch (git checkout -b feature/new-country-tax-calculator).
- Make your changes.
- Commit your changes (git commit -m 'Add tax calculator for NewCountry').
- Push to the branch (git push origin feature/new-country-tax-calculator).
- Open a pull request.

License
This package is open-sourced software licensed under the MIT license.

