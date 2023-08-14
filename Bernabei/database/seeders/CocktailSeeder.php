<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cocktail::factory()
        ->count(10)
        ->create();

    }
}
