<?php
    //maglia è un figlio di articolo quindi include le sue variabili più altre sue specifiche
    include 'articolo.php';
    class Maglia extends Articolo {
        public $taglia;
        public $genere;

    }



?>
