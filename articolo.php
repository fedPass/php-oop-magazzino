<?php

    class Articolo {
        public $categoria;
        public $titolo;
        public $produttore;
        public $codice_a_barre;
        public $peso;
        public $prezzo;
        public $quantità;
        public $scaffale;

        public function costiSpedizione($tariffa_km) {
            return $tariffa_km * $this->peso;
        }

        public function stampaOrdineMagazzino($numero_ordine, $quantità) {
            echo 'Ordine Numero: ' . $numero_ordine;
            echo '<br>';
            echo 'Codice a barre: ' . $this->codice_a_barre;
            echo '<br>';
            echo 'Collocazione: ' . $this->scaffale;
        }

        public function stampaOrdineCliente($numero_ordine, $nome_cliente) {
            echo 'Ordine Numero: ' . $numero_ordine;
            echo '<br>';
            echo 'Codice a barre: ' . $this->codice_a_barre;
            echo '<br>';
            echo 'Collocazione: ' . $this->scaffale;
        }

    }

?>
