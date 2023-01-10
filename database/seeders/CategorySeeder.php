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
            'url_image' => 'https://images.unsplash.com/photo-1574856344991-aaa31b6f4ce3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZnJ1aXR8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Thực phẩm khô',
            'url_image' => 'https://images.unsplash.com/photo-1615478441828-1b28a6115394?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGRyeSUyMGZvb2R8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Rau củ',
            'url_image' => 'https://media.istockphoto.com/id/139496979/photo/assortment-of-fruits-and-vegetables-background.jpg?b=1&s=170667a&w=0&k=20&c=vvOZLGr12YDGeTMbb4huZN2G2_D0oUcNnGVd7SVMm3g=',
            'url_icon' => '#'
        ]);

        Category::firstOrCreate([
            'name' => 'Thịt tươi',
            'url_image' => 'https://images.unsplash.com/photo-1602470520998-f4a52199a3d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fG1lYXR8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60',
            'url_icon' => '#'
        ]);


        Category::firstOrCreate([
            'name' => 'Hải sản',
            'url_image' => 'https://images.unsplash.com/photo-1550951791-cbf1ff280109?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60P',
            'url_icon' => '#'
        ]);
    }
}
