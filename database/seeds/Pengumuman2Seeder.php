<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pengumuman2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengumuman')->insert([
            'url' => 'gambar1.jpg',
            'link' => '#',
        ]);
        DB::table('pengumuman')->insert([
            'url' => 'gambar1.jpg',
            'link' => '#',
        ]);
        DB::table('pengumuman')->insert([
            'url' => 'gambar1.jpg',
            'link' => '#',
        ]);
    }
}
