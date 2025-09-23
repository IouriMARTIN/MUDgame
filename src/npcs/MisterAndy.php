<?php

namespace Matis\MuDgame\Npcs;

use Jugid\Staurie\Game\Npc;

class MisterAndy extends Npc {

    public function name(): string {
        return 'Mister Andy';
    }

    public function description(): string {
        return 'Un robot bienveillant qui vous aide dans votre aventure.';
    }

    public function speak(): string {
        return 'Bien le bonjour ami Humain, vous êtes le dernier humain à vous être réveillé.';
    }

    public function items(): array {
        return [];
    }
}
