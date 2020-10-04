<?php
require_once 'Periferiche.php';
class Mouse extends Periferiche
{
    private int $dpi;
    private bool $pulsantiProgrammabili;
    private int $numeroPulsantiProgrammabili;

    public function __construct(
        $dpi,
        $pulsantiProgrammabili,
        $numeroPulsantiProgrammabili,
        $quantita,
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAcquisto,
        $prezzoVendita,
        $bluetooth,
        $totaleVenduti
    ) {
        $this->dpi = $dpi;
        $this->pulsantiProgram = $pulsantiProgrammabili;
        $this->numeroPulsantiProgrammabili = $numeroPulsantiProgrammabili;

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
    public function getDpid()
    {
        return $this->dpi;
    }
    public function getPulsantiProgrammabili()
    {
        return $this->pulsantiProgrammabili;
    }
    public function getNumeroPulsantiProgrammabili()
    {
        return $this->numeroPulsantiProgrammabili;
    }
    public function setDpid($dpid)
    {
        if ($dpid < 1600 && $dpid >= 400) {
            $this->dpi = $dpid;
        } else {
            die('dpi fuori Range min 400 max 1600');
        }
    }
    public function setPulsantiProgrammabili($pulsantiProgrammabili)
    {
        if ($pulsantiProgrammabili != true || $pulsantiProgrammabili != false) {

            die('inserisci valore booleano');
        } else {
            $this->pulsantiProgrammabili = $pulsantiProgrammabili;
        }
    }
    public function setNumeroPulsantiProgrammabili($numeroPulsantiProgrammabili)
    {
        if ($this->setPulsantiProgrammabili === false || $numeroPulsantiProgrammabili == 0) {
            $this->numeroPulsantiProgrammabili = 0;
        } else if ($numeroPulsantiProgrammabili > 8) {
            die("inserisci un numero tra 1 e 8");
        } else {
            $this->numeroPulsantiProgrammabili = $numeroPulsantiProgrammabili;
        }
    }
}
