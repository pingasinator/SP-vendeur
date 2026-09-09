<?php

class LigneCommandeTable{

    private $numero;
    private $numero_ligne;
    private $reference;
    private $designation;
    private $quantite;
    private $prixUnitaireHT;
    private $prixVente;
    private $prixTotal;

    public function hydrater(array $data)
    {
        foreach ($data as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
        $this->setprixTotal(floatval($this->getPrixVente()) * floatval($this->getQuantite()));
    }

    public function __construct($data = null){

        if($data != null){

            $this->hydrater($data);
        }
    }

    /***************
     * LES GETTERS
     *************/

    public function getNumero(){
        return $this->numero;
    }

    public function getNumeroLigne(){
        return $this->numero_ligne;
    }

    public function getReference(){
        return $this->reference;
    }

    public function getDesignation(){
        return $this->designation;
    }

    public function getQuantite(){
        return $this->quantite;
    }

    public function getPrixUnitaireHT(){
        return $this->prixUnitaireHT;
    }

    public function getPrixVente(){
        return $this->prixVente;
    }

    public function getPrixTotal(){
        return $this->prixTotal;
    }

    /***************
     * LES SETTERS
     *************/

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setNumeroLigne($numero){
        $this->numero_ligne = $numero;
    }

    public function setReference($reference){
        $this->reference = $reference;
    }

    public function setDesignation($designation){
        $this->designation = $designation;
    }

    public function setQuantite($quantite){
        $this->quantite = $quantite;
    }

    public function setPrixUnitaireHT($prixUnitaireHT){
        $this->prixUnitaireHT = $prixUnitaireHT;
    }

    public function setPrixVente($prixVente){
        $this->prixVente = $prixVente;
    }

    public function setPrixTotal($prixTotal){
        $this->prixTotal = $prixTotal;
    }
}