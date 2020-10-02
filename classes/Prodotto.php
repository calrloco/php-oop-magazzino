<?

class Prodotto {
    private int $quantita;
    private string $id;
    private string $categoria;
    private string $forntore;
    private string $descrizone;
    private float $prezzoAquisto;
    private float $prezzoVendita;
    /// costruttore classe prodotto///////
    public function __construct(
    $quantita, 
    $categoria,
    $fornitore,
    $descrizone,
    $prezzoAquisto,
    $prezzoVendita){
          $this->quantita = $quantita;
          $this->categoria = $categoria;
          $this->fornitore = $fornitore;
          $this->descrizone = $descrizione;
          $this->prezzoAquisto = $prezzoAquisto;
          $this->prezzoVendita = $prezzoVendita;
    }
    ///// getters /////////////////////////
    public function getQuantita($quantita){
        return $this->quantita;
    }
    public function getCategoria($quantita){
        return $this->categoria;
    }
    public function getFornitore($quantita){
        return $this->fornitore;
    }
    public function getDescrizione($quantita){
        return $this->descrizione;
    }
    public function getPrezzoAcquisto($quantita){
        return $this->prezzoAquisto;
    }
    public function getPrezzoVendita($quantita){
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
        $this->forntore = $fornitore;
    }
    public function setDescrizione($descrizione){
        $this->descrizione = $descrizione;
    }
    public function setPrezzoAcquisto($prezzoAquisto){
         $this->setQuantitaprezzoAquisto = $prezzoAquisto;
    }
    public function setPrezzoVendita($prezzoVendita){
        $this->prezzoVendita = $prezzoVendita;
    }
}

?>