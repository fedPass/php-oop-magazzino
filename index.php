<?php
    include_once 'articolo.php';
    include_once 'cliente.php';
    include_once 'ordine.php';
    include_once 'dipendente.php';


    $sedia = new Articolo('1234567890', '6', 'A1');

    $tavolo = new Articolo();
    $tavolo->categoria = 'arredamento';
    $tavolo->titolo = 'tavolo in legno';
    $tavolo->produttore = 'riflessi';
    $tavolo->codice_a_barre = '12345678';
    $tavolo->peso = '10';
    $tavolo->prezzo = '230';
    $tavolo->stock = '2';
    $tavolo->scaffale = 'B2';

    echo '<pre>';
    var_dump($sedia);
    echo '<br>';
    var_dump($tavolo);
    echo '</pre>';

    echo 'Se stai a 100km pagherai : '. costiSpedizione(1) . ' € di spese di spedizione e un totale di '. costoTotale(1);
?>
