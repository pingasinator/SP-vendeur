<?php

class CommandeTable
{

    private $numero = '';
    private $codev = '';
    private $vendeur = '';
    private $codec = '';
    private $client = '';
    private $total_HT = '';
    private $total_TVA = '';
    private $date_livraison = '';
    private $date_commande = '';

    private $valide = '';

    private $etat = '';

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

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getCodev(): string
    {
        return $this->codev;
    }

    public function getCodec(): string
    {
        return $this->codec;
    }

    public function getTotal_HT(): string
    {
        return $this->total_HT;
    }

    public function getVendeur(): string
    {
        return $this->vendeur;
    }

    public function getClient(): string{
        return $this->client;
    }

    public function getTotal_TVA(): string{
        return $this->total_TVA;
    }

    public function getDate_livraison(){
        return $this->date_livraison;
    }

    public function getDate_commande(){
        return $this->date_commande;
    }

    public function getEtat(){
        return $this->etat;
    }

    public function getValide(){
        return $this->valide;
    }

    /***************
     * LES SETTERS
     *************/

    public function setNumero(string $numero){
        $this->numero = $numero;
    }

    public function setCodev(string $codev)
    {
        $this->codev = $codev;
    }

    public function setCodec(string $codec){
        $this->codec = $codec;
    }

    public function setTotal_HT(string $total_HT){
        $this->total_HT = $total_HT;
    }

    public function setVendeur(string $vendeur){
        $this->vendeur = $vendeur;
    }

    public function setClient(string $client){
        $this->client = $client;
    }

    public function setTotal_TVA(string $total_TVA){
        $this->total_TVA = $total_TVA;
    }

    public function setDate_livraison($date_livraison){
        if($date_livraison != null){
            $date = new DateTimeImmutable($date_livraison);
            $this->date_livraison = $date->format('d/m/Y');
        }else{
            $this->date_livraison = $date_livraison;
        }
    }

    public function setDate_commande($date_commande){
        if($date_commande != null){
            $date = new DateTimeImmutable($date_commande);
            $this->date_commande = $date->format('d/m/Y');
        }else{
            $this->date_commande = $date_commande;
        }
    }

    public function setEtat($etat){
        $this->etat = $etat;
    }

    public function setValide($valide){
        $this->valide = $valide;
    }
}
