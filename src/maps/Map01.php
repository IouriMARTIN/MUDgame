<?php 

namespace Matis\MuDgame\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Jugid\Staurie\Example\Items\Excalibur;

class Map01 extends Blueprint {
  
  private Position $position;
  public function __construct()
    {
        $this->position = new Position(0,0);
    }
 public function npcs(): array {
  return [];
  }
 public function items(): array { 
  return [new Excalibur()];
 }
 public function monsters(): array { 
  return [];
 }
 public function name(): string { 
   return 'Test map Iouri';
 }
 
 public function description(): string { 
   return 'This is a test map';
 }

  public function position(): Position
    {
        return $this->position;
    }

}
?>