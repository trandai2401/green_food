<?php

namespace Database\Seeders;

use App\Models\MediaType;
use Illuminate\Database\Seeder;

class MediaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MediaType::firstOrCreate([
            'name' => 'file',
        ]);

        MediaType::firstOrCreate([
            'name' => 'video',
        ]);
    }
}
