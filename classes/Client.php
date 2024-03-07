<?php

class Client{

    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;


    public function __construct(string $nom,string $prenom,DateTime $dateDeNaissance){

        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateDeNaissance=$dateDeNaissance;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    
    public function getPrenom()
    {
        return $this->prenom;
    }

 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }


    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function __tostring(){

        return $this->getnom(). " ". $this->getPrenom();
    }

}



?>