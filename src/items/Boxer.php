<?php
namespace Jugid\Staurie\Example\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Boxer extends Item_Equippable {
    public function name() : string {
        return 'Boxer';
    }

    public function description(): string {
        return 'Un caleçon sale...';
    }

    public function body_part(): string {
        return 'hand';
    }

    public function statistics(): array
    {
        return [
            'DEF'=> 1
        ];
    }
}