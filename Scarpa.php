<?php
    //scarpa è un figlio di articolo quindi include le sue variabili più altre sue specifiche
    include 'articolo.php';
    class Scarpa extends Articolo {
        public $misura;
        public $materiale;

    }



?>
