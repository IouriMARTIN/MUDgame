<?php

namespace Matis\MuDgame\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Matis\MuDgame\Monsters\RadCockroach;

class Map04 extends Blueprint {

  private Position $position;
  public function __construct()
    {
        $this->position = new Position(-1,1);
    }
 public function npcs(): array {
  return [];
  }
 public function items(): array {
  return [];
 }
 public function monsters(): array {
  return [RadCockroach::class];
 }
 public function name(): string {
   return 'Nid de RadCafards';
 }

 public function description(): string {
   return 'Vous entrez dans un nid de cafards radioactifs. Un énorme RadCafard vous attaque!';
 }

  public function position(): Position
    {
        return $this->position;
    }

}
