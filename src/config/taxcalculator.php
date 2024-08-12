return [
    /*
    |--------------------------------------------------------------------------
    | Default Tax Country
    |--------------------------------------------------------------------------
    |
    | This option controls the default country for which the tax calculation
    | should be applied. You can set this value to any of the supported countries.
    |
    */
    'default_country' => 'Nigeria',

    /*
    |--------------------------------------------------------------------------
    | Supported Countries
    |--------------------------------------------------------------------------
    |
    | This option defines the list of countries that are supported by your
    | tax calculator package. You can add or remove countries as needed.
    |
    */
    'supported_countries' => [
        'Nigeria',
        'USA',
        // Add more countries as needed
    ],

    /*
    |--------------------------------------------------------------------------
    | Tax Rate Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the tax rates for each country. The key should be
    | the country name, and the value should be an array of tax brackets and rates.
    |
    */
    'tax_rates' => [
        'Nigeria' => [
            300000 => 0.07,
            300000 => 0.11,
            500000 => 0.15,
            500000 => 0.19,
            1600000 => 0.21,
            PHP_INT_MAX => 0.24
        ],
        'USA' => [
            // US-specific tax rates
        ],
        // Add more countries as needed
    ],
];
