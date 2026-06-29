<?php

class ProfilTable
{

    private $codev = '';
    private $nom = '';
    private $prenom = '';
    private $telephone = '';
    private $adresse = '';
    private $ville = '';
    private $cp = '';

    private $ventes = 0.0;

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
    public function getCodev(): string
    {
        return $this->codev;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function getCP(): string
    {
        return $this->cp;
    }

    public function getVentes(): float{
        return $this->ventes;
    }

    /***************
     * LES SETTERS
     *************/

    public function setCodev(string $codev){
        $this->codev = $codev;
    }
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    public function setCP(string $cp): void
    {
        $this->cp = $cp;
    }

    public function setVentes(string $ventes): void{
        $this->ventes = $ventes;
    }
}
