<?php
namespace Mon\Namespace\Items; //A REMPLACER*

use Jugid\Staurie\Game\Item_Equippable;

class CaleconSale extends Item_Equippable {
 public function name() : string {
    return 'Caleçon sale';
 }

 public function description(): string {
    return 'Il a été utilisé... Surement plusieurs fois';
 }

 public function body_part(): string {
    return 'body';
 }

 public function statistics(): array {
    return [
      'DEF'=> 1
    ];
 }

}
