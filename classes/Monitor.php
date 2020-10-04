<?php
require_once 'Periferiche.php';
class Monitor extends Periferiche
{
    private int $pollici;
    private string $apectRatio;
    private string $risoluzione;
    private string $refreshRate;

    function __construct(
        $pollici,
        $apectRatio,
        $risoluzione,
        $refreshRate,
        $quantita,
        $categoria,
        $fornitore,
        $descrizone,
        $prezzoAcquisto,
        $prezzoVendita,
        $totaleVenduti,
        $bluetooth
    ) {
        $this->pollici = $pollici;
        $this->apectRatio = $apectRatio;
        $this->risoluzione = $risoluzione;
        $this->refreshRate = $refreshRate;
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
    ////getters /////////////////////////
    public function getPollici()
    {
        return $this->pollici;
    }
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }
    public function getRisoluzione()
    {
        return $this->risoluzione;
    }
    public function getRefreshRate()
    {
        return $this->refreshRate;
    }
    //////setters //////////////////
    public function setPollici($pollici)
    {
        if ($pollici <= 120 && $pollici >= 12) {
            $this->pollici = $pollici;
        } else {
            die('Range non ammesso inserisci una grandezza compresa fra 12 e 120');
        }
    }
    public function setAspectRatio($aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;
    }
    public function setRisouluzione($risouluzione)
    {
        $this->risouluzione = $risouluzione;
    }
    public function setRefreshRate($refreshRate)
    {
        $this->refreshRate = $refreshRate;
    }
}
