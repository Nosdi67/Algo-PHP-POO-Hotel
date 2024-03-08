<?php

Class Chambre{

    private int $numero;
    private int $etage;
    private bool $estReserve;
    private int $prix;
    private $wifi;
    private Hotel $hotel;
    private array $reservations;


    public function __construct(Hotel $hotel,int $numero,int $etage,bool $estReserve,int $prix,$wifi,){
        $this->hotel=$hotel;
        $this->numero=$numero;
        $this->etage=$etage;
        $this->estReserve=$estReserve;
        $this->prix=$prix;
        $this->wifi=$wifi;
        $this->hotel->addChambre($this);
        $this->reservations=[];
    
    }
    
    public function reserver(){
      $this->estReserve=true;
        
    }
    public function estReserve(){

        if ($this->estReserve=true){
            return "Reservé";
           }else{
            return "Disponible";
           };
    }
    public function getEstReserve()
    {
        return $this->estReserve;
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

    public function addReservationChambre(Chambre $numero){

        $this->reservations[]=$numero;
    }

    public function afficherReservationChambre(){

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