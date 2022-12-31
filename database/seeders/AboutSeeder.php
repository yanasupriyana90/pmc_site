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
            'title' => 'Ruby Indokapur',
            'subtitle' => 'Ruby Indokapur is a global material solutions company. We mine, process and sell industrial minerals at locations worldwide, focused primarily on silica, clays, feldspathics and olivine. We are also leaders in glass recycling.',
            'description_1' => 'Ruby Indokapur delivers solutions for society and supports the progress of modern life, from drinking water sanitation to solar technology and from flame retardants to smartphone screens.',
            'description_2' => 'We serve industries as diverse as glass, ceramics, construction, coatings, polymers and water purification.',
            'primacy_1' => 'Sustainability',
            'primacy_2' => 'Our History',
            'primacy_3' => 'Governance',
        ]);
    }
}
