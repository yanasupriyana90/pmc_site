<?php

namespace Database\Seeders;

use App\Models\Product_1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product_1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_1::create([
            'title' => 'Baryte',
            'subtitle' => 'Ruby Indokapur PORTARYTE natural baryte delivers a range of benefits, from improving UV and chemical
            resistance in coatings, to increased soundproofing in plastics and enhanced friction in brake
            linings.',
            'description_1' => 'Baryte (also referred to as barite or barytes) is the naturally-occurring form of barium sulphate
            (BaS04). It has a high specific gravity (4.5) and very low solubility. Ruby Indokapur natural baryte
            (known as PORTARYTE) is used mainly in the following applications:',
            'description_2' => 'Key characteristics of natural baryte include: high inertness, high density, resulting in low oil
            absorption, medium Mohs hardness of 3, high refractive index of 1.64, easy wetting, easy dispersion',
            'primacy_1' => 'Coatings: to improve UV resistance, sandability, chemical resistance and gloss control, to
            increase density, and as a cost-effective replacement for precipitated baryte.',
            'primacy_2' => 'Polymers: to improve sound proofing in plastics and opacity in resin systems, to increase
            weight, and as a cost-effective replacement for precipitated baryte.',
            'primacy_3' => 'Automotive: to improve friction in brake linings.',
            'image' => '/image/materials/baryte.jpg',
        ]);
    }
}
