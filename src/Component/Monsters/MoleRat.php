<?php 
namespace Matis\MuDgame\Component\Monsters;

use Jugid\Staurie\Game\Monster;

class MoleRat extends Monster {

   public function name() : string {
        return 'Rataupe';
    }

    public function description(): string { 
        return 'Une créature mutante agressive qui attaque sans pitié.';
    }

    public function level() : int {
        return 2;
    }

    public function health_points(): int { 
        return 20;
    }

    public function defense(): int { 
        return 20;
    }

    public function attack() : int {
        return 20;
    }

    public function experience(): int { 
        return 25;
    }

    public function skills(): array { 
        return [
            'Morsure' => 20,
        ];
    }
}
?>