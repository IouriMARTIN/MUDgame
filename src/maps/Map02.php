<?php

namespace Matis\MuDgame\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Matis\MuDgame\Monsters\MoleRat;

class Map02 extends Blueprint {

  private Position $position;
  public function __construct()
    {
        $this->position = new Position(0,1);
    }
 public function npcs(): array {
  return [];
  }
 public function items(): array {
  return [];
 }
 public function monsters(): array {
  return [MoleRat::class];
 }
 public function name(): string {
   return 'Terres Désolées';
 }

 public function description(): string {
   return 'Vous venez de parcourir plusieurs kilomètres, au loin vous apercevez une ville, en vous précipitant vous trébuchez sur un enfant mort. Vous perdez 49 PV. Un rataupe vous a vu de loin.';
 }

  public function position(): Position
    {
        return $this->position;
    }

}
