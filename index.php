<!-- Oggi pomeriggio provate ad immaginare quali sono le classi 
necessarie per creare uno shop online; ad esempio,
ci saranno sicuramente dei prodotti da acquistare e
degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario;
ad esempio ci potrebbero essere iverse tipologie di prodotti. -->
<?php

require_once __DIR__ . '/Books.php';
require_once __DIR__ . '/MusicFilmTv.php';
require_once __DIR__ . '/VideogamesConsole.php';
require_once __DIR__ . '/Electronics.php';
require_once __DIR__ . '/Users.php';

// Exemple
$harry_potter = new Books('Harry Potter', 19.5, 2);

$queen = new MusicFilmTv('Don t Stop Me Now', 20, 1);
$queen->category = 'Blueray';

$godOfWar = new VideogamesConsole('Good Of War' , 70, 1);
$godOfWar->category = 'Videogames';

$tv = new Electronics('Samsung', 350, 1);

$users = new Users('gino', 'pino', '**********5980');

var_dump($harry_potter->getInfoData());
var_dump($queen);
var_dump($godOfWar);
var_dump($tv);
var_dump($users->getInfoData());

?>