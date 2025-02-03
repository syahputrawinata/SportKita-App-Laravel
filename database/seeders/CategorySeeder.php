<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Sneakers',
        ]);
        Category::create([
            'name' => 'Running Shoes',
        ]);
        Category::create([
            'name' => 'Boot',
        ]);
        Category::create([
            'name' => 'Loafer',
        ]);
        Category::create([
            'name' => 'Football Shoes',
        ]);
    }
}
