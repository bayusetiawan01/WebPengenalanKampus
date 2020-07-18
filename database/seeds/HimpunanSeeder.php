<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class HimpunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama'      => "Himatika",
            'himpunan'  => "Matematika",
            'email'     => "Himatika",
            'image'     => "default.jpg",
            'password'  => Hash::make("himatika"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Himaka",
            'himpunan'  => "Kimia",
            'email'     => "Himaka",
            'image'     => "default.jpg",
            'password'  => Hash::make("himaka"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Hifi",
            'himpunan'  => "Fisika",
            'email'     => "Hifi",
            'image'     => "default.jpg",
            'password'  => Hash::make("hifi"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Himbio",
            'himpunan'  => "Biologi",
            'email'     => "Himbio",
            'image'     => "default.jpg",
            'password'  => Hash::make("himbio"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Himasta",
            'himpunan'  => "Statistika",
            'email'     => "Himasta",
            'image'     => "default.jpg",
            'password'  => Hash::make("himasta"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Pedra",
            'himpunan'  => "Geofisika",
            'email'     => "Pedra",
            'image'     => "default.jpg",
            'password'  => Hash::make("pedra"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Himatif",
            'himpunan'  => "TeknikInformatika",
            'email'     => "Himatif",
            'image'     => "default.jpg",
            'password'  => Hash::make("himatif"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "HMTE",
            'himpunan'  => "TeknikElektro",
            'email'     => "HMTE",
            'image'     => "default.jpg",
            'password'  => Hash::make("hmte"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Himaktu",
            'himpunan'  => "Aktuaria",
            'email'     => "Himaktu",
            'image'     => "default.jpg",
            'password'  => Hash::make("himaktu"),
            'role_id'   => 5,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
        User::create([
            'nama'      => "Admin Utama",
            'email'     => "adminutama",
            'image'     => "default.jpg",
            'password'  => Hash::make("adminutama"),
            'role_id'   => 4,
            'is_active' => 1,
            'npm'       => "000000000000",
        ]);
    }
}
