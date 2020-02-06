<?php
    include_once 'articolo.php';
    include_once 'Maglia.php';
    include_once 'Scarpa.php';


    $maglia = new Maglia(1234567890, 6, 'A1');
    $maglia->titolo = 'Maglia manica corta';

    $scarpa = new Scarpa();
    $scarpa->categoria = 'abbigliamento';
    $scarpa->titolo = 'Sneakers';
    $scarpa->produttore = 'adidas';
    $scarpa->codice_a_barre = 12345678;
    $scarpa->peso = 0.2;
    $scarpa->prezzo = 20;
    $scarpa->stock = 2;
    $scarpa->scaffale = 'B2';

    echo '<pre>';
    var_dump($maglia);
    echo '<br>';
    var_dump($scarpa);
    echo '</pre>';

    $costo_totale_scarpa = $scarpa->costoTotale(1);

    echo 'Il totale con le spese di spedizione è: '. $costo_totale_scarpa . ' €';
?>
