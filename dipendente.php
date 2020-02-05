<?php

    class Dipendente {
        public $nome;
        public $cognome;
        public $matricola;
        public $mansione;

        public function stampaBadge() {
            echo 'Nome: ' . $this->nome;
            echo '<br>';
            echo 'Cognome: ' . $this->cognome;
            echo '<br>';
            echo 'Mansione: ' . $this->mansione;
            echo '<br>';
        }

    }

 ?>
