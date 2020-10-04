<?php
require_once 'Periferiche.php';
class Tastiera extends Periferiche
{
    private string $tipoTastiera;
    private string $tastiFunzione;

    public function __construct(
        $tipoTastiera,
        $tastiFunzione,
        $quantita,
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAcquisto,
        $prezzoVendita,
        $totaleVenduti,
        $bluetooth
    ) {
        $this->tipoTastiera = $tipoTastiera;
        $this->tastiFunzione = $tastiFunzione;

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
    //////getters /////////////////////////
    public function getTipoTastiera(){
        return $this->tipoTastiera;
    }
    public function getTastiFunzione(){
        return $this->tastiFunzione;
    }
    ////setters //////////////////
    public function setTipoTastiera($tipoTastiera){
        $tipiTastiera = ['qwerty','qwertz','azerty','dvorak','xpert'];
        if(in_array(strtolower($tipoTastiera),$tipiTastiera)){
           $this->tipoTastiera = $tipoTastiera;
        }else{
            die('tipo tastiera non valido');
        }
    }
}
