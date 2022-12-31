<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'name' => 'Ruby Indokapur',
            'description' => 'Lorem ipsum',
            'logo' => 'logo.png',
            'address' => 'Jl. Raya Tagog Padalarang No.563, Kertamulya, Kec. Padalarang, Kabupaten Bandung Barat, Jawa Barat 40553',
            'email' => 'rubyindokapur@gmail.com',
            'phone' => '082218493158',
            'map_embed' => 'map.com',
        ]);
    }
}
