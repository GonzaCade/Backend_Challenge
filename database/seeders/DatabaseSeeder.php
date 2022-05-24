<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'titulo' => 'Post #1',
            'slug' => 'post-1',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'imagen' => 'images/on0SX74nE8gvVZYZCm2HvTiuiaPAjgPrvetkDPa1.jpg'
        ];
        DB::table('posts')->insert($data);
    }
}
