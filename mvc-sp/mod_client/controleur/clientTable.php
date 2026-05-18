<?php

class ClientTable
{

    private $codec = '';
    private $nom = '';
    private $adresse = '';
    private $cp = '';
    private $ville = '';
    private $telephone = '';


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
    public function getCodec(): string
    {
        return $this->codec;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function getCp(): string
    {
        return $this->cp;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }




    /***************
     * LES SETTERS
     *************/

    public function setCodec($codec): void
    {
        $this->codec = $codec;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    public function setCp(string $cp): void
    {
        $this->cp = $cp;
    }

    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }



}
