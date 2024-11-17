<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'name' => 'Peso Colombiano',
                'iso_4' => 'COP',
                'symbol' => '$',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        Currency::insert($currencies);

        Country::findOrFail(1)->currencies()->sync([1]);

    }
}