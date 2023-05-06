<?php

require_once __DIR__ .'/../Models/Category.php';
require_once __DIR__ .'/../Models/ToyProduct.php';
require_once __DIR__ .'/../Models/FoodProduct.php';
require_once __DIR__ .'/../Models/KennelProduct.php';


$cat_category = new Category('Cat', 'fa-solid fa-cat');
$dog_category = new Category('Dog', 'fa-solid fa-dog');

$food_cat = new FoodProduct('Purina Felix Gatto', 'Le Ghiottonerie', '25166685', '8,50', 'Felix Le Ghiottonerie è una gamma di ricette irresistibili, dal profumo e dal gusto deliziosi. Caratteristiche Ogni ricetta, preparata con ingredienti di qualità, ha teneri bocconcini in gelatina per offrire al gatto un pasto irresistibile. Sono anche una fonte di acidi grassi Omega 6 e contengono la giusta combinazione', $cat_category, ['Carni e derivati', 'Estratti di proteine vegetali', 'Pesci e sottoprodotti dei pesci', 'Sostanze minerali',' Zuccheri'], '2023-10-10');
$food_dog = new FoodProduct('Crocchette senza cereali per cani', 'Ultra premium direct', '12415357', '10,50', "Le crocchette senza cereali  all'agnell per cani sensibili offrono al cane una migliore digestione. L'agnello è una fonte proteica a bassa allergia e altamente digeribile.", $dog_category, ['agnello disidratato', 'maiale disidratato', 'grasso di pollo', 'fecola di patate','polpa di barbabietola', 'olio di salmone'], '2023-12-10');

$kennel_cat = new KennelProduct('Cuccetta Morbidosa Tonda per Gatti', 'Ferribiella', '12348742', '120,00', 'Ferribiella Cuccetta Morbidosa Tonda per Gatti realizzata in peluches imbottito e rifinita con un nastro in raso. Ideale per gatti di piccola taglia.', $cat_category, 'Rosa', '110 cm');
$kennel_dog = new KennelProduct('Cuccia per cani', 'Spike Classic', '12342518', '150,00', "Questa fantastica cuccia in legno a forma di chalet è realizzata in legno di cipresso di Cunningham e offre tutto ciò di cui il vostro cane ha bisogno.
 La speciale struttura di questa cuccia per cani garantisce inoltre una perfetta circolazione dell'aria e un'ottima stabilità anche su terreni irregolari.", $dog_category, 'Rosso', '125 cm');

$toy_cat = new ToyProduct('Gioco per gatti Trixie Catch', 'The Balls', '12897452', '50,00', "l Catch the Balls Trixie in plastica è una torre gioco che è stata specificatamente studiata per stimolare l'istinto di gioco e di caccia del gatto. Sui 3 piani della torre ci sono alcune palline rimovibili che il gatto deve spingere, urtare e inseguire per dare loro la caccia. Inoltre questo gioco stimola l'azione e la mobilità del tuo felino e ne allena l'abilità, l'intelligenza e la velocità di reazione.", $cat_category, ['Plastica', 'Nylon'], 'Grigio','Rotonda');
$toy_dog = new ToyProduct('Gioco per Cane Palla Tpr', 'Arcaplanet', '81647326', '20,00', "Gioco Cane Palla Tpr con Punte Verde di Lovedì è una divertente pallina per cani con punte massaggianti per il divertimento quotidiano con Fido. Le delicate punte in gomma tpr massaggiano dolcemente del gengive del tuo cane che potrà divertirsi a mordicchiare il giocattolo. Disponibile in 2 misure: 8 cm e 13 cm. Materiale: TPR​. Gioco Cane Palla Tpr con Punte Verde suona: infatti questo giochino è dotato di squeaker interno​ che stimola il tuo cane a giocare.", $dog_category, ['Plastica', 'Gomma Naturale'], 'Verde', 'Rotonda');


$food_products = [$food_cat, $food_dog];

$kennel_products = [$kennel_cat, $kennel_dog];

$toy_products = [$toy_cat, $toy_dog];