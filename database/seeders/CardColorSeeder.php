<?php

namespace Database\Seeders;

use App\Models\CardColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cardsColorList = [
            ['color' => 'White', 'name' => 'Plains'],      // Pianura (Bianco)
            ['color' => 'Blue', 'name' => 'Island'],       // Isola (Blu)
            ['color' => 'Black', 'name' => 'Swamp'],       // Palude (Nero)
            ['color' => 'Red', 'name' => 'Mountain'],      // Montagna (Rosso)
            ['color' => 'Green', 'name' => 'Forest'],      // Foresta (Verde)
            ['color' => 'Colorless', 'name' => null],      // Incolore
            ['color' => 'Multicolored', 'name' => null],   // Multicolore
        ];

        foreach ($cardsColorList as $cardColor) {
            CardColor::create($cardColor);
        }
    }
}
