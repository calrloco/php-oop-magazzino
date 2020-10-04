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
        $prezzoAcquisto,
        $prezzoVendita,
        $totaleVenduti,
        $bluetooth
    ) {
        $this->bluetooth = $bluetooth;
        parent::__construct(
            $quantita,
            $categoria,
            $fornitore,
            $descrizone,
            $prezzoAcquisto,
            $prezzoVendita,
            $totaleVenduti
        );
    }
    /////////setter //////////
    public function getBluetooth(){
        return $this->bluetooth;
    }
    //// ovverride del metodo setcategoria
    public function setCategoria($categoria)
    {
        $possibiCategorie = ['casse', 'cuffie', 'microfoni', 'mouse', 'tastiera', 'monitor'];
        parent::setCategoria($categoria);
        if (in_array($categoria = $categoria, $possibiCategorie)) {
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
