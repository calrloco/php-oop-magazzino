<?php

class Prodotto {
    private int $quantita;
    private string $categoria;
    private string $fornitore;
    private string $descrizone;
    private float $prezzoAcquisto;
    private float $prezzoVendita;
   
    /// costruttore classe prodotto///////
    public function __construct(
    $quantita, 
    $categoria,
    $fornitore,
    $descrizone,
    $prezzoAcquisto,
    $prezzoVendita){
          $this->quantita = $quantita;
          $this->categoria = $categoria;
          $this->fornitore = $fornitore;
          $this->descrizone = $descrizone;
          $this->prezzoAcquisto = $prezzoAcquisto;
          $this->prezzoVendita = $prezzoVendita;
    }
    ///// getters /////////////////////////
    public function getQuantita(){
        return $this->quantita;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getFornitore(){
        return $this->fornitore;
    }
    public function getDescrizione(){
        return $this->descrizone;
    }
    public function getPrezzoAcquisto(){
        return $this->prezzoAcquisto;
    }
    public function getPrezzoVendita(){
        return $this->prezzoVendita;
    }
    //// setter ///////////////////////////
    public function setQuantita($quantita){
        if($quantita < 1){
          $this->quantita = 0;
        }else{
          $this->quantita = $quantita;
    }
    }
    public function setCategoria($categoria){
            $this->categoria = $categoria;
   
    }
    public function setFornitore($fornitore){
        if(strlen($fornitore)>3){
        $this->forntore = $fornitore;
       }else{
           die("Fornitore non valido");
       }
    }
    public function setDescrizione($descrizone){
        if(strlen($descrizone)> 6){
        $this->descrizone = $descrizone;
    }else{
        die("Descrizione non valida");
    }
    }
    public function setPrezzoAcquisto($prezzoAcquisto){
        if(!empty($prezzoAcquisto)){
         $this->prezzoAcquisto = $prezzoAcquisto;
        }else{
            die("Prezzo Acquisto non valido");
        }
    }
    public function setPrezzoVendita($prezzoVendita){
        if(!empty($prezzoVendita)){
            $this->prezzoVendita = $prezzoVendita;
           }else{
               die("Prezzo Vendita non valido");
           }
    }
}
