<?php
namespace Matis\MuDgame\Component\Player;

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Character\Statistics;
use Jugid\Staurie\Component\Race\AbstractRace;

class Player extends MainCharacter
{
    public function init(): void
    {
$this->name = 'Mark';
$this->gender = 'Unknown';
$this->statistics = Statistics::default()
    ->add('Health', 100)
    ->add('Attack', 1)
    ->add('Defense', 0);
$this->equipment = [
    'head' => null,
    'hand' => null,
    'shield' => null,
    'feet' => null,
    'shoulders' => null,
];

    }
}