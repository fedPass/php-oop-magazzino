<?php

    class Cliente {
        public $nome;
        public $cognome;
        public $indirizzo;
        public $telefono;

        public function stampaEtichetta() {
            echo 'Destinatario: ' . $this->nome . ' ' . $this->cognome;
            echo '<br>';
            echo 'Indirizzo: ' . $this->indirizzo;
            echo '<br>';
            echo 'Recapito: ' . $this->telefono;
            echo '<br>';
        }

    }

?>
