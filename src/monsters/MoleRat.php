<?php 
namespace Matis\MuDgame\Monster;

use Jugid\Staurie\Game\Monster;

class MoleRat extends Monster {

   public function name() : string {
        return 'Rat Taupe';
    }

    public function description(): string { 
        return 'GNNNNNNN';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 20;
    }

    public function defense(): int { 
        return 2;
    }

    public function attack() : int {
        return 5;
    }

    public function experience(): int { 
        return 11;
    }

    public function skills(): array { 
        return [
            'Morsure' => 20,
        ];
    }
}
?>