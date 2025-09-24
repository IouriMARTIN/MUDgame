<?php

use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Character\Statistics;
use Matis\MuDgame\Component\Player\Player;


require_once __DIR__.'/../vendor/autoload.php';
$staurie = new Staurie('RPG Post-Apocalyptique');
$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class
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
    'directory' => __DIR__ . '/Component/Maps', 
    'namespace' => 'Matis\MuDgame\Component\Maps',
    'navigation' => true,
    'map_enable' => true,
    'compass_enable' => true
]);


$character = $container->registerComponent(Player::class);
$character->configuration([
    'name' => 'Mark',
    'gender' => 'Male', 
    'statistics' => (new Statistics())
        ->add('Health', 100)
        ->add('Attack', 1)
        ->add('Defense', 0),
    'equipment' => [
        'head' => null,
        'hand' => null,
        'shield' => null,
        'feet' => null,
        'shoulders' => null,
    ],
    'ask_name' => false,
    'ask_gender' => false,
    'character_has_name' => true,
    'character_has_gender' => true
]);

$staurie->run();

