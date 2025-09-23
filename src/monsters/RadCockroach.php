<?php

namespace Matis\MuDgame\Monsters;

use Jugid\Staurie\Game\Monster;

class RadCockroach extends Monster {

    public function name(): string {
        return 'RadCafard';
    }

    public function description(): string {
        return 'Un cafard radioactif géant très agressif.';
    }

    public function level(): int {
        return 3;
    }

    public function health_points(): int {
        return 50;
    }

    public function defense(): int {
        return 50;
    }

    public function attack(): int {
        return 50;
    }

    public function experience(): int {
        return 25;
    }

    public function skills(): array {
        return [
            'Morsure radioactive' => 50,
        ];
    }
}
