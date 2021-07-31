<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = Categories::create(['name' => 'Income']);
        $cat2 = Categories::create(['name' => 'Expenses']);
        $cat3 = Categories::create(['name' => 'Savings']);
    }
}
