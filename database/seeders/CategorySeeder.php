<?php

namespace Database\Seeders;

use App\Models\Category;
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
        //
        Category::firstOrCreate([
            'name' => 'Trái cây',
            'url_image' => 'http://localhost:8000/img/categories/traicay.png',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Thực phẩm khô',
            'url_image' => 'http://localhost:8000/img/categories/thucphamkho.png',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Rau củ',
            'url_image' => 'http://localhost:8000/img/categories/raucu.png',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Thịt tươi',
            'url_image' => 'http://localhost:8000/img/categories/thittuoi.png',
            'url_icon' => '#'
        ]);


        Category::firstOrCreate([
            'name' => 'Hải sản',
            'url_image' => 'http://localhost:8000/img/categories/haisan.png',
            'url_icon' => '#'
        ]);
    }
}
