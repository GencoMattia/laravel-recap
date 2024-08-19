<?php

namespace Database\Seeders;

use App\Models\CardColor;
use App\Models\MagicCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CardcolorMagiccardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $magicCardList = MagicCard::all();
        $cardColorList = CardColor::all()->pluck("id");

        foreach ($magicCardList as $singleCard) {
            $singleCard->cardColors()->sync($faker->randomElements($cardColorList, rand(1, 5)));
        }
    }
}
