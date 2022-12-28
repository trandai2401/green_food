<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => '1',
            'category_id' => 1
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 1
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 1
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 1
        ]);


        Product::create([
            'name' => '1',
            'category_id' => 2
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 2
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 2
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 2
        ]);


        Product::create([
            'name' => '1',
            'category_id' => 3
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 3
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 3
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 3
        ]);

        Product::create([
            'name' => '1',
            'category_id' => 4
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 4
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 4
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 4
        ]);
    }
}
