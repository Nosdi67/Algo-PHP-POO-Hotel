<?php

class Client{

    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private array $reservations;


    public function __construct(string $nom,string $prenom,string $dateDeNaissance){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateDeNaissance=new datetime($dateDeNaissance);
        $this->reservations=[];
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
        return $this->dateDeNaissance->format('d-m-Y');
    }


    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }
    public function addReservationClient(Reservation $reservation){

        $this->reservations[]=$reservation;
    }


    public function __toString(){

        return $this->getnom(). " ". $this->getPrenom();
    }

}



?>