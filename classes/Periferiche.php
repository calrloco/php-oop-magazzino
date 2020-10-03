<?php
require_once "Prodotto.php";
class Periferiche extends Prodotto

{

    private bool $bluetooth;
    public function __construct(
        $quantita,
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAquisto,
        $prezzoVendita,
        $bluetooth
    ) {
        $this->bluetooth = $bluetooth;
        parent::__construct(
            $quantita,
            $categoria,
            $fornitore,
            $descrizone,
            $prezzoAquisto,
            $prezzoVendita
        );
    }
    /////////setter //////////
    public function getBluetooth(){
        return $this->bluetooth;
    }
    //// ovverride del metodo setcategoria
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
    public function setBluetooth($bluetooth)
    {
        if ($bluetooth == true || $bluetooth == false) {
            $this->bluetooth = $bluetooth;
        } else {
            die('bluetooth deve essere un valore booleano');
        }
    }
}
