<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CartItem::create([
            'product_id' => 9,
            'user_id' => 1,
            'quantity' => 9
        ]);
        CartItem::create([
            'product_id' => 8,
            'user_id' => 1,
            'quantity' => 8
        ]);
        CartItem::create([
            'product_id' => 6,
            'user_id' => 1,
            'quantity' => 6
        ]);
        CartItem::create([
            'product_id' => 5,
            'user_id' => 1,
            'quantity' => 6
        ]);
    }
}
