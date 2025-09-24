<?php
namespace riiou\src\Items;// A REMPLACER*

use Jugid\Staurie\Game\Item_Equippable;

class Excalibur extends Item_Equippable {
  public function name() : string {
    return 'Excalibur';
  }

  public function description(): string {
    return 'Cette épée semble très forte, l\'avoir si tôt est une bénédiction!... Ou un mauvais game design';
  }

  public function body_part(): string { 
    return 'hand';
  }

  public function statistics(): array
  {
    return [
      'ATK'=> 998
    ];
  }
}