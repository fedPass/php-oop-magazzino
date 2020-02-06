<?php
    //maglia è un figlio di articolo quindi include le sue variabili più altre sue specifiche
    include_once 'articolo.php';
    class Maglia extends Articolo {
        public $taglia;
        public $genere;

        public function __construct($codice_a_barre, $stock, $scaffale) {
            parent::__costruct($codice_a_barre, $stock, $scaffale);
        }
    }



?>
