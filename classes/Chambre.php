<?php

Class Chambre{

    private int $numero;
    private int $etage;
    private bool $etat;
    private float $prix;
    private bool $wifi;
    private Hotel $hotel;
    private array $reservations;


    public function __construct(Hotel $hotel,int $numero,int $etage,bool $etat,float $prix,bool $wifi){
        $this->hotel=$hotel;
        $this->numero=$numero;
        $this->etage=$etage;
        $this->etat=$etat;
        $this->prix=$prix;
        $this->wifi=$wifi;
        $this->hotel->addChambre($this);
        $this->reservations=[];
    
    }

    
    
    public function estReserve() { 
        return $this->etat ? "Disponible" : "Réservée";
    }  
    
   
    public function setetat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    public function getHotel()
    {
        return $this->hotel;
    }

  
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getWifi()
    {
        return $this->wifi ? "Oui" : "Non";
    }

   
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

  
    public function getPrix()
    {
        return $this->prix;
    }

  
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }


    public function getEtage()
    {
        return $this->etage;
    }

    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    

    public function addReservationChambre(Reservation $numero){ //AJOUTER LE NUMERO DES CHAMBRES RESERVE DANS LE TABLEAU DE RESERVATION 

        $this->reservations[]=$numero; 
    }

    public function afficherReservationChambre(){ //AFFICHER LES RESERVATION DANS LE TABLEAU DES RESA

        $resultat="";
        foreach($this->reservations as $reservation){
            $resultat.=$reservation;
            return $resultat;
        }
    }
    

    public function getInfo(){
        return  $this->getHotel()."Numero de Chambre: ". $this->getNumero() . " Etage: ".$this->getEtage()." Statut: ".$this->estReserve();

    
}

   
}   

?>