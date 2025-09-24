<?php

namespace Matis\MuDgame\Component\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Matis\MuDgame\Component\Npcs\MisterAndy;

class Map01 extends Blueprint {

  private Position $position;
  public function __construct()
    {
        $this->position = new Position(0,0);
    }
 public function npcs(): array {
  return [new MisterAndy()];
  }
 public function items(): array {
  return [];
 }
 public function monsters(): array {
  return [];
 }
 public function name(): string {
   return 'Bunker Abandonné';
 }

 public function description(): string {
   return 'Vous vous réveillez sans vêtements de votre longue cryogénisation, dans un bunker abandonné. Un robot s\'adresse à vous.';
 }

  public function position(): Position
    {
        return $this->position;
    }

}

?>