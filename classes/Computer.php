<?php
require_once "Prodotto.php";

class Computer extends Prodotto {
    
    private string $type;
    private string $sistemaOperativo;
    private string $storage;
    private string $monitor;
    private string $processor;

    public function __construct(
        $quantita, 
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAquisto,
        $prezzoVendita,
        $type,
        $sistemaOperativo,
        $storage,
        $monitor,
        $processor
        
    ) {
        $this->type = $type;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->storage = $storage;
        $this->monitor = $monitor;
        $this->processor = $processor;
        parent::__construct(
        $quantita, 
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAquisto,
        $prezzoVendita);
    }
    ///getters////////////////////////////////
    public function getType($type)
    {
        return $this->type = $type;
    }
    public function getSistemaOperativo($sistemaOperativo)
    {
        return $this->sistemaOperativo = $sistemaOperativo;
    }
    public function getStorage($storage){
        return $this->storage = $storage;
    }
    public function getMonitor($monitor){
        return $this->monitor = $monitor;
    }
    public function getProcessor($processor){
        return $this->processor = $processor;
    }
    /////setters////////////////////////////////
    public function setType($type){
        $this->type = $type;
    }
    public function setSistemaOperativo($sitemOperativo){
         $this->sistemaOperativo = $sitemOperativo;
    }
    public function setStorage($storage){
        $this->storage = $storage;
    }
    public function setMonitor($monitor){
        $this->monitor = $monitor;
    }
    public function setProcessor($processor){
        $this->processor = $processor;
    }
}
