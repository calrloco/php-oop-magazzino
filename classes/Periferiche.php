<?php
require_once "Prodotto.php";
class Periferiche extends Prodotto
{


    public function __construct(
        $quantita,
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAquisto,
        $prezzoVendita
    ) {
        parent::__construct(
            $quantita,
            $categoria,
            $fornitore,
            $descrizone,
            $prezzoAquisto,
            $prezzoVendita
        );
    }
    public function setCategoria($categoria)
    {
        $possibiCaregorie = ['casse', 'cuffie', 'microfoni', 'mouse', 'tastiera', 'monitor'];
        parent::setCategoria($categoria);
        if (in_array($categoria = $categoria, $possibiCaregorie)) {
            $this->categoria = $categoria;
        } else {
            die('categoria non riconosciuta');
        }
    }
}
