<!-- Oggi pomeriggio provate ad immaginare quali sono le classi 
necessarie per creare uno shop online; ad esempio,
ci saranno sicuramente dei prodotti da acquistare e
degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario;
ad esempio ci potrebbero essere iverse tipologie di prodotti. -->
<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/MusicFilmTv.php';
require_once __DIR__ . '/VideogamesConsole.php';
require_once __DIR__ . '/Electronic.php';
require_once __DIR__ . '/User.php';

// Book
$harry_potter = new Book('Harry Potter and the Sorcerer\'s Stone', 18.5);

// Music/Film/Tv
$queen = new MusicFilmTv('Bohemian Rhapsody', 20);
$queen->category = 'Movie';

// Videogames/Console
$godOfWar = new VideogamesConsole('God of War III Remastered Hits - PlayStation 4' , 79);
$godOfWar->category = 'Videogames';

// Electronic
$tv = new Electronic('Samsung TV AU7190 Smart TV 43”, Crystal UHD, Wi-Fi, Titan Gray, 2021', 1399);

// User
$user = new User('Gino', 'Bianchi', 'ginobianchio@live.com');
$user->addCart($godOfWar);
$user->addCart($harry_potter);
$user->addCart($tv);


// var_dump($harry_potter->getInfoData());
// var_dump($queen->getInfoData());
// var_dump($godOfWar->getInfoData());
// var_dump($tv->getInfoData());
// var_dump($user);



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Boolazon</title>

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css?ts=<?=time()?>&quot">

</head>
<body>

    <!-- Header -->
    <header>

        <!-- Logo -->
        <div class="logo">
            <h3>boolazon<span>.it</span></h3>
            <img src="img/smile.png" alt="smile">
        </div>
        
        <!-- Country User -->
        <div class="country_user">
            <i class="fas fa-map-marker-alt"></i>
            <div class="country">
                 <span>Invia a Gino</span>
                 <div>Gravina I...70024</div>
            </div>
        </div>

        <!-- Input -->
        <div class="input">

            <select name="category" id="category">
                <option value="AllCategory">Tutte le Categorie</option>
                <option value="Book">Book</option>
                <option value="Music">Music/Film/Tv</option>
                <option value="VideogamesConsole">Videogames and Console</option>
                <option value="Electronic">Electronic</option>
            </select>

            <input id="search" type="text">
            <label for="search"><i class="fas fa-search"></i></label>
        </div>
        <!-- End Input -->

        <!-- List -->
        <div class="list">
            <span>Ciao Gino</span>
            <div class="country">Account e liste <i class="fas fa-sort-down"></i></div>
        </div>
        <!-- End List -->

        <!-- Order -->
        <div class="order">
            <span>Resi</span>
            <div class="country">e Ordini</div>
        </div>
        <!-- End Order -->

        <!-- Cart -->
        <div class="cart">
            <i class="fas fa-shopping-cart"></i>
            <span>Carrello</span>
        </div>
        <!-- End Cart -->
    </header>
    <!-- Header -->

    <!-- MAIN -->
    <main>

        <h2>Riepilogo Ordine</h2>

        <ul>
        
            <?php foreach($user->getCart() as $item) { ?>
            <li>
                
                <b><?php echo $item->typology ?><br></b>
                <?php echo $item->category ?><br>
                <span>Nome Prodotto :</span>  <?php echo $item->name?>
                <div class="price">
                   <span>Prezzo :</span>  <?php echo $item->price ?> €
                </div>
                

            </li>
            <?php } ?>

        </ul>

        <div class="total">
            <span>Totale: </span>
            <?php 
            echo $harry_potter->price +
            $godOfWar->price +
            $tv->price ?> €
        </div>

    </main>
    <!-- MAIN -->
    
</body>
</html>