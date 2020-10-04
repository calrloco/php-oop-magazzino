<?php
require_once "Periferiche.php";
class Cassa extends Periferiche
{
    private string $frequency;
    private string $power;

    function __construct(
        $frequency,
        $power,
        $quantita,
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAcquisto,
        $prezzoVendita,
        $totaleVenduti,
        $bluetooth
    ) {
      $this->frequency = $frequency;
      $this->power = $power;
      
        parent::__construct(
            $quantita,
            $categoria,
            $fornitore,
            $descrizone,
            $prezzoAcquisto,
            $prezzoVendita,
            $totaleVenduti,
            $bluetooth
        );
    }
    ///// getters /////////////////////////
    public function getFrequency(){
        return $this->frequency;
    }
    public function getPower(){
          return $this->power;
    }
    public function setFrequency($frequency){
           $this->frequency = $frequency;
    }
    public function setPower($power){
        $this->power = $power;
    }
   
}
