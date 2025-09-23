<?php

use Jugid\Staurie\Staurie;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;

require_once __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('My game');
$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class
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

$staurie->run(); 
