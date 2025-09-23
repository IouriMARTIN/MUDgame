<?php

use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Race\Race;
use Matis\MuDgame\Races\Human;
use Matis\MuDgame\Races\Elf;

require_once __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('My game');
$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class,
    Race::class
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text' => 'Welcome to this awesome test adventure',
    'labels' => [
        'new_game' => 'Enter the world',
        'quit' => 'Exit game',
    ]
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'This is an introduction to test the introduction component',
        'You can use it multiline by using an array in configuration'
    ],
    'title'=>'Chapter 1 : The new game',
    'scrolling'=>false
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/maps',
    'namespace'=>'Matis\MuDgame\Maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true
]);

$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
    'ask_name' => true,
    'ask_gender' => true,
    'character_has_name' => true,
    'character_has_gender' => true,
]);

$race = $container->registerComponent(Race::class);
$race->configuration([
    'races' => [
        Human::class,
        Elf::class
    ]
]);


$staurie->run();
