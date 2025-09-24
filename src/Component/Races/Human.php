<?php

namespace Matis\MuDgame\Races;

use Jugid\Staurie\Component\Race\AbstractRace;

class Human extends AbstractRace
{

  public function name(): string
  {
    return 'Human';
  }

  public function description(): string
  {
    return 'Le dernier humain survivant dans ce monde post-apocalyptique.';
  }

  public function statistics(): array
  {
    return [
      'Health' => 50,
      'Attack' => 1,
      'Defense' => 0
    ];
  }
}