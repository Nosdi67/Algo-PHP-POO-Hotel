<?php

Class Chambre{

    private int $numero;
    private int $etage;
    private string $statut;
    private int $prix;
    private $wifi;
    private Hotel $hotel;

    public function __construct(Hotel $hotel,int $numero,int $etage,string $statut,int $prix,$wifi){

        $this->hotel=$hotel;
        $this->numero=$numero;
        $this->etage=$etage;
        $this->statut=$statut;
        $this->prix=$prix;
        $this->wifi=$wifi;
        
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

    public function getStatut()
    {
        return $this->statut;
    }

 
    public function setStatut($statut)
    {
        $this->statut = $statut;

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

    public function getInfo(){
        return  $this->getHotel()."Numero de Chambre: ". $this->getNumero() . " Etage: ".$this->getEtage()." Statut: ".$this->getStatut(). " Le prix ".$this->getPrix()." Wifi ".$this->getWifi(); 
    }

    
}


?>