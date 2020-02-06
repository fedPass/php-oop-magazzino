<?php

    class Articolo {
        public $categoria;
        public $titolo;
        public $produttore;
        public $codice_a_barre;
        public $peso;
        public $prezzo;
        public $stock;
        public $scaffale;

        public function __costruct($codice_a_barre, $stock, $scaffale) {
            $this->codice_a_barre = $codice_a_barre;
            $this->stock = $stock;
            $this->scaffale = $scaffale;
        }

        public function costoTotale($tariffa_kg) {
            return ($tariffa_kg * $this->peso) + 1 + $this->prezzo;
        }

        public function stampaOrdineMagazzino($numero_ordine, $numero_pezzi) {
            echo 'Ordine Numero: ' . $numero_ordine;
            echo '<br>';
            echo 'Codice a barre: ' . $this->codice_a_barre;
            echo '<br>';
            echo 'Collocazione: ' . $this->scaffale;
            echo '<br>';
            echo 'Pezzi ordinati: ' . $this->$numero_pezzi;
        }

        public function stampaOrdineCliente($numero_ordine, $nome_cliente, $tariffa_km) {
            echo 'Ordine Numero: ' . $numero_ordine;
            echo '<br>';
            echo 'Titolo Articolo: ' . $this->titolo;
            echo '<br>';
            echo 'Prezzo: ' . $this->prezzo;
            echo '<br>';
            echo 'Spese spedizione: ' . costiSpedizione($tariffa_km);
            echo '<br>';
            echo 'Prezzo totale: ' . costoTotale($tariffa_km);
        }

    }

?>
