<?php

class ProduitTable
{

    private $descriptif = '';
    private $designation = '';
    private $poid_piece = '';
    private $prix_unitaire_HT = '';
    private $quantite = '';
    private $reference = '';
    private $stock = '';


    public function hydrater(array $data)
    {
        foreach ($data as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }


    public function __construct($data = null){

        if($data != null){

            $this->hydrater($data);
        }
    }


    /***************
     * LES GETTERS
     *************/

    /**
     * @return string
     */
    public function getDescriptif(): string
    {
        return $this->descriptif;
    }

    public function getDesignation(): string
    {
        return $this->designation;
    }

    public function getPoid_Piece(): string
    {
        return $this->poid_piece;
    }

    public function getPrix_Unitaire_HT(): string
    {
        return $this->prix_unitaire_HT;
    }

    public function getQuantite(): string
    {
        return $this->quantite;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getStock(): string
    {
        return $this->stock;
    }


    /***************
     * LES SETTERS
     *************/

    public function setDescriptif($descriptif): void
    {
        $this->descriptif = $descriptif;
    }

    public function setDesignation(string $designation): void
    {
        $this->designation = $designation;
    }

    public function setPoid_Piece(string $poid_piece): void
    {
        $this->poid_piece = $poid_piece;
    }

    public function setPrix_Unitaire_HT(string $prix_unitaire_HT): void
    {
        $this->prix_unitaire_HT = $prix_unitaire_HT;
    }

    public function setQuantite(string $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    public function setStock(string $stock): void
    {
        $this->stock = $stock;
    }



}
