<?php

Class Chambre{

    private int $numero;
    private int $etage;
    private bool $estReserve;
    private float $prix;
    private string $wifi;
    private Hotel $hotel;
    private array $reservations;


    public function __construct(Hotel $hotel,int $numero,int $etage,bool $estReserve,float $prix,string $wifi){
        $this->hotel=$hotel;
        $this->numero=$numero;
        $this->etage=$etage;
        $this->estReserve=$estReserve;
        $this->prix=$prix;
        $this->wifi=$wifi;
        $this->hotel->addChambre($this);
        $this->reservations=[];
    
    }

    
    
    public function estReserve(){ 
        if($this->estReserve==true){
            return " Disponible";

        }elseif($this->estReserve==false){
            return " Réservée";
        }
    
    }  

   
    public function setEstReserve($estReserve)
    {
        $this->estReserve = $estReserve;

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
        return $this->wifi;
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