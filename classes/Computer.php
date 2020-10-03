<?php
require_once "Prodotto.php";
/////classe computer possono essere create istanze di laptop o desktop
class Computer extends Prodotto
{

    private string $type;
    private string $sistemaOperativo;
    private string $storage;
    private string $monitor;
    private string $processor;

    //////function costruttore//////////////
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
            $prezzoVendita
        );
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
    public function getStorage($storage)
    {
        return $this->storage = $storage;
    }
    public function getMonitor($monitor)
    {
        return $this->monitor = $monitor;
    }
    public function getProcessor($processor)
    {
        return $this->processor = $processor;
    }
    /////setters////////////////////////////////
    public function setType($type)
    {
        $tipi = ['gaming', 'editing', 'notebook', 'low specs'];
        if (in_array($type, $tipi)) {
            $this->type = $type;
        } else {
            die('Unknown type');
        }
    }
    public function setSistemaOperativo($sitemOperativo)
    {
        $sistemiOperativi = ['windows', 'macos'];
        if (in_array(strtolower($sitemOperativo), $sistemiOperativi)) {
            $this->sistemaOperativo = $sitemOperativo;
        } else {
            die("Sistema Operativo Non riconosciuto");
        }
    }
    public function setStorage($storage)
    {
        if (!empty($storage)) {
            $this->storage = $storage;
        }else{
            die("Storage non specificato");
        }
    }
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;
    }
    public function setProcessor($processor)
    {
        $this->processor = $processor;
    }
}
