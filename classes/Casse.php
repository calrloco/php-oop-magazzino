<?php
require_once "Periferiche.php";
class Cassa extends Periferiche
{
    private string $frequency;
    private string $power;
    private bool $bluetooth;

    function __construct(
        $frequency,
        $power,
        $bluetooth,
        $quantita,
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAquisto,
        $prezzoVendita
    ) {
      $this->frequency = $frequency;
      $this->power = $power;
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
    ///// getters /////////////////////////
    public function getFrequency(){
        return $this->frequency;
    }
    public function getPower(){
          return $this->power;
    }
    public function getBluetooth(){
        return $this->bluetooth;
    }
    public function setFrequency($frequency){
           $this->frequency = $frequency;
    }
    public function setPower($power){
        $this->power = $power;
    }
    public function setBluetooth($bluetooth){
        if($bluetooth != true || $bluetooth != false){
              die("Invalid valore pre bluetooth");
        }else{
            $this->bluetooth = $bluetooth;
        }
    }
}
