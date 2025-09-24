<?php

namespace Matis\MuDgame\Component\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Matis\MuDgame\Component\Monsters\Flayer;

class Map05 extends Blueprint {

  private Position $position;
  public function __construct()
    {
        $this->position = new Position(0,2);
    }
 public function npcs(): array {
  return [];
  }
 public function items(): array {
  return [];
 }
 public function monsters(): array {
  return [new Flayer()];
 }
 public function name(): string {
   return 'Antre de l\'Ecorcheur';
 }

 public function description(): string {
   return 'Vous pénétrez dans l\'antre sombre et humide de l\'Ecorcheur. Cette créature légendaire vous attend pour le combat final!';
 }

  public function position(): Position
    {
        return $this->position;
    }

}
