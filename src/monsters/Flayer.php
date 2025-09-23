<?php

namespace Matis\MuDgame\Monsters;

use Jugid\Staurie\Game\Monster;

class Flayer extends Monster {

    public function name(): string {
        return 'Ecorcheur';
    }

    public function description(): string {
        return 'Une créature terrifiante qui écorche ses victimes vivantes.';
    }

    public function level(): int {
        return 5;
    }

    public function health_points(): int {
        return 1000;
    }

    public function defense(): int {
        return 0;
    }

    public function attack(): int {
        return 100;
    }

    public function experience(): int {
        return 100;
    }

    public function skills(): array {
        return [
            'Ecorchage' => 100,
        ];
    }
}
