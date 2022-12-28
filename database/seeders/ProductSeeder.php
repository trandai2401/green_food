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
            'category_id' => 1,
            'price' => 1,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 1,
            'price' => 2,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 1,
            'price' => 3,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 1,
            'price' => 4,
        ]);


        Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 5,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 6,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 7,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 2,
            'price' => 8,
        ]);


        Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 9,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 10,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 11,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 3,
            'price' => 12,
        ]);

        Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 13,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 14,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 15,
        ]);
        Product::create([
            'name' => '1',
            'category_id' => 4,
            'price' => 16,
        ]);
    }
}
