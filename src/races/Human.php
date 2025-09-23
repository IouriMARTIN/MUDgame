<?php

namespace Matis\MuDgame\Races;

use Jugid\Staurie\Component\Race\AbstractRace;

class Human extends AbstractRace {

    public function name(): string {
        return 'Human';
    }

    public function description(): string {
        return 'A versatile and balanced race.';
    }

    public function statistics(): array {
        return [
            'Health' => 100,
            'Strength' => 10,
            'Defense' => 5
        ];
    }
}
