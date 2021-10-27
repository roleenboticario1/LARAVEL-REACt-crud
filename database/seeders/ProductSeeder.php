<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'name'=> 'Galaxy Apple',
            'price' => '10000.50',
            'category' => 'mobile',
            'description' => 'Samsung Galaxy Apple Dula Sime White Color',
            'imageUrl' => 'https://med.csmobiles.com/145481-large_default/samsung-galaxy-a21s-64gb-dual-sim-blanco.jpg'
        ]);

         Product::create([
            'name'=> 'Apple Nokia',
            'price' => '40000.50',
            'category' => 'mobile',
            'description' => 'Samsung Galaxy Apple Dula Sime White Color',
            'imageUrl' => 'https://med.csmobiles.com/145481-large_default/samsung-galaxy-a21s-64gb-dual-sim-blanco.jpg'
        ]);


    }
}
