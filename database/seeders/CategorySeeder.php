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
            'url_image' => '#',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Vật phẩm khô',
            'url_image' => '#',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Rau củ',
            'url_image' => '#',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Thịt tươi',
            'url_image' => '#',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Hải sản',
            'url_image' => '#',
            'url_icon' => '#'
        ]);
    }
}
