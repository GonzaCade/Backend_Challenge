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
            'descripcion' => 'descripcion del primer post',
            'imagen' => '/storage/images/facilito.png'
        ];
        DB::table('posts')->insert($data);
    }
}
