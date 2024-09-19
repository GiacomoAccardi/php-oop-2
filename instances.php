<?php 

require_once __DIR__.'/Models/classes.php';

//istanze di Categoria:
$xCane = new Categoria('Prodotto per cani', 'fa-solid fa-dog');
$xGatto = new Categoria('Prodotto per gatti', 'fa-solid fa-cat');

//istanze di Tipologia:
$cibo = new Tipologia('Cibo', 'fa-solid fa-drumstick-bite');
$Cura = new Tipologia("Cura dell'animale", 'fa-solid fa-paw');
$Gioco = new Tipologia("Gioco", 'fa-solid fa-football');

//Istanze di Prodotto:
$ciboCani = new Prodotto("Croccantini - manzo", "5,99 €", "https://www.farmacosmo.it/262459-large_default/specialita-italiane-adult-crocchette-manzo-avena-e-verdure-cibo-secco-cani-800-g-200907.jpg", $xCane, $cibo);

$bocconicini = new Prodotto("Bocconcini - rabbit/turkey", "2,99 €", "https://media.zooplus.com/bilder/9/400/28348_pla_catessy_gravy_rabbit_400g_9.jpg", $xGatto, $cibo);

$spazzola = new Prodotto("spazzola - MeowMeow", "6,50 €", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUOKwqVumJy3o5hqhghp4HNfsIZ9IP9hIU_g&s", $xGatto, $Cura);

$palla = new Prodotto("Palla di gomma", "3,00 €", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhb2zEN-DR3IMTdnDIC6jZtdsYPRiG43VS4w&s", $xCane, $Gioco);
?>