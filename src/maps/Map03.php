<?php

namespace Matis\MuDgame\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map03 extends Blueprint {

  private Position $position;
  public function __construct()
    {
        $this->position = new Position(1,1);
    }
 public function npcs(): array {
  return [];
  }
 public function items(): array {
  return ['Stimpak' => ['description' => 'Régénère 100% de vie', 'price' => 50]];
 }
 public function monsters(): array {
  return [];
 }
 public function name(): string {
   return 'Camp de Marchands';
 }

 public function description(): string {
   return 'Vous arrivez dans un camp de marchands. Un marchand vous propose un stimpak pour 50 PO.';
 }

  public function position(): Position
    {
        return $this->position;
    }

}
