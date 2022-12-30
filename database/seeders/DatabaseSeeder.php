<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $invoiceStatus = new InvoiceStatusSeeder;
        $invoiceStatus->run();
        // User::factory(10)->create();
        $category = new CategorySeeder;
        $category->run();

        $typeMedia = new MediaTypeSeeder;
        $typeMedia->run();

        $role = new RoleSeeder;
        $role->run();

        User::create([
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'username' => 'admin',
            'role_id' => 1,
            'api_token' => Str::random(80),
        ]);

        $product = new ProductSeeder;
        $product->run();


        $cartItem = new CartItemSeeder;
        $cartItem->run();
    }
}
