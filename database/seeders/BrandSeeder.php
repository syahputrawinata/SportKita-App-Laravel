<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Brand::create([
            'name' => 'NIKE',
        ]);
        Brand::create([
            'name' => 'ADIDAS',
        ]);
        Brand::create([
            'name' => 'PUMA',
        ]);
        Brand::create([
            'name' => 'New Balance',
        ]);
    }
}
