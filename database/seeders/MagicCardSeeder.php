<?php

namespace Database\Seeders;

use App\Models\MagicCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagicCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $magicCardList = [
            [
                'name' => 'Black Lotus',
                'type' => 'Artifact',
                'artist' => 'Christopher Rush',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=600&type=card',
                'description' => 'Adds three mana of any single color of your choice to your mana pool, then is discarded.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Mox Sapphire',
                'type' => 'Artifact',
                'artist' => 'Dan Frazier',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=610&type=card',
                'description' => 'Add one blue mana to your mana pool.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Lightning Bolt',
                'type' => 'Instant',
                'artist' => 'Christopher Moeller',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12924&type=card',
                'description' => 'Lightning Bolt deals 3 damage to any target.',
                'attack' => 3,
                'defence' => 0,
            ],
            [
                'name' => 'Serra Angel',
                'type' => 'Creature — Angel',
                'artist' => 'Douglas Shuler',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=1225&type=card',
                'description' => 'Flying, vigilance.',
                'attack' => 4,
                'defence' => 4,
            ],
            [
                'name' => 'Shivan Dragon',
                'type' => 'Creature — Dragon',
                'artist' => 'Melissa Benson',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=1295&type=card',
                'description' => 'Flying, {R}: Shivan Dragon gets +1/+0 until end of turn.',
                'attack' => 5,
                'defence' => 5,
            ],
            [
                'name' => 'Ancestral Recall',
                'type' => 'Instant',
                'artist' => 'Mark Poole',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=600&type=card',
                'description' => 'Target player draws three cards.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Timetwister',
                'type' => 'Sorcery',
                'artist' => 'Mark Tedin',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=599&type=card',
                'description' => 'Each player shuffles their hand and graveyard into their library, then draws seven cards.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Tarmogoyf',
                'type' => 'Creature — Lhurgoyf',
                'artist' => 'Justin Murray',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=1351&type=card',
                'description' => 'Tarmogoyf\'s power is equal to the number of card types among cards in all graveyards and its toughness is equal to that number plus 1.',
                'attack' => 0,
                'defence' => 1,
            ],
            [
                'name' => 'Dark Ritual',
                'type' => 'Instant',
                'artist' => 'Sandra Everingham',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=1299&type=card',
                'description' => 'Add {B}{B}{B}.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Jace, the Mind Sculptor',
                'type' => 'Planeswalker — Jace',
                'artist' => 'Jason Chan',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=1234&type=card',
                'description' => '+2: Look at the top card of target player\'s library, you may put that card on the bottom of that player\'s library.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Snapcaster Mage',
                'type' => 'Creature — Human Wizard',
                'artist' => 'Steve Argyle',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=2345&type=card',
                'description' => 'Flash. When Snapcaster Mage enters the battlefield, target instant or sorcery card in your graveyard gains flashback until end of turn.',
                'attack' => 2,
                'defence' => 1,
            ],
            [
                'name' => 'Liliana of the Veil',
                'type' => 'Planeswalker — Liliana',
                'artist' => 'Steve Argyle',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=3456&type=card',
                'description' => '+1: Each player discards a card.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Counterspell',
                'type' => 'Instant',
                'artist' => 'Zoltan Boros',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=13456&type=card',
                'description' => 'Counter target spell.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Birds of Paradise',
                'type' => 'Creature — Bird',
                'artist' => 'Marc Fishman',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=1456&type=card',
                'description' => 'Flying. {T}: Add one mana of any color.',
                'attack' => 0,
                'defence' => 1,
            ],
            [
                'name' => 'Wrath of God',
                'type' => 'Sorcery',
                'artist' => 'Kev Walker',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=5678&type=card',
                'description' => 'Destroy all creatures. They can\'t be regenerated.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Lightning Helix',
                'type' => 'Instant',
                'artist' => 'Raymond Swanland',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12345&type=card',
                'description' => 'Lightning Helix deals 3 damage to any target and you gain 3 life.',
                'attack' => 3,
                'defence' => 0,
            ],
            [
                'name' => 'Stoneforge Mystic',
                'type' => 'Creature — Kor Artificer',
                'artist' => 'Mike Bierek',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12346&type=card',
                'description' => 'When Stoneforge Mystic enters the battlefield, you may search your library for an Equipment card, reveal it, put it into your hand, then shuffle your library.',
                'attack' => 1,
                'defence' => 2,
            ],
            [
                'name' => 'Thoughtseize',
                'type' => 'Sorcery',
                'artist' => 'Aleksi Briclot',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12347&type=card',
                'description' => 'Target player reveals their hand. You choose a nonland card from it. That player discards that card. You lose 2 life.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Vendilion Clique',
                'type' => 'Creature — Faerie Wizard',
                'artist' => 'Willian Murai',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12348&type=card',
                'description' => 'Flash, flying. When Vendilion Clique enters the battlefield, look at target player\'s hand. You may choose a nonland card from it. If you do, that player reveals the chosen card, puts it on the bottom of their library, then draws a card.',
                'attack' => 3,
                'defence' => 1,
            ],
            [
                'name' => 'Gideon, Ally of Zendikar',
                'type' => 'Planeswalker — Gideon',
                'artist' => 'Tyler Jacobson',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12349&type=card',
                'description' => '+1: Until end of turn, Gideon, Ally of Zendikar becomes a 5/5 Human Soldier creature with indestructible that\'s still a planeswalker. Prevent all damage that would be dealt to him this turn.',
                'attack' => 0,
                'defence' => 0,
            ],
            [
                'name' => 'Bloodbraid Elf',
                'type' => 'Creature — Elf Berserker',
                'artist' => 'Raymond Swanland',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12350&type=card',
                'description' => 'Haste, cascade.',
                'attack' => 3,
                'defence' => 2,
            ],
            [
                'name' => 'Emrakul, the Aeons Torn',
                'type' => 'Creature — Eldrazi',
                'artist' => 'Mark Tedin',
                'art_url' => 'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=12351&type=card',
                'description' => 'This spell can\'t be countered. When you cast this spell, take an extra turn after this one. Flying, protection from colored spells, annihilator 6. When Emrakul, the Aeons Torn is put into a graveyard from anywhere, its owner shuffles their graveyard into their library.',
                'attack' => 15,
                'defence' => 15,
            ],
            // Aggiungi altre carte qui
        ];

        foreach ($magicCardList as $magicCard) {
            MagicCard::create($magicCard);
        }
    }
}
