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


require_once __DIR__.'/../vendor/autoload.php';
$staurie = new Staurie('RPG Post-Apocalyptique');
$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class,
    Race::class
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text' => 'Bienvenue dans ce monde post-apocalyptique',
    'labels' => [
        'new_game' => 'Commencer l\'aventure',
        'quit' => 'Quitter le jeu',
    ]
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'Dans un monde dévasté par une catastrophe nucléaire, vous êtes le dernier humain survivant.',
        'Réveillé d\'une longue cryogénisation, vous devez survivre dans ce monde hostile.',
        'Votre nom est Mark, et votre aventure commence maintenant...'
    ],
    'title'=>'Chapitre 1 : Le Réveil',
    'scrolling'=>false
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory' => __DIR__ . '/Maps', 
    'namespace' => 'Matis\MuDgame\Maps',
    'navigation' => true,
    'map_enable' => true,
    'compass_enable' => true
]);


$character = $container->registerComponent(MainCharacter::class);
$character->configuration([
    'ask_name' => false,
    'ask_gender' => false,
    'character_has_name' => true,
    'character_has_gender' => false,
    'default_name' => 'Mark'
]);

$race = $container->registerComponent(Race::class);
$race->configuration([
    'races' => [
        Human::class
    ]
]);
$staurie->run();
