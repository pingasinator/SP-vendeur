<?php

class CommandeTable
{

    private $numero = '';
    private $codev = '';

    private $vendeur = '';
    private $codec = '';

    private $client = '';
    private $total_HT = '';

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

    /**
     * @return string
     */
    public function getVendeur(): string
    {
        return $this->vendeur;
    }

    public function getClient(): string{
        return $this->client;
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
}
