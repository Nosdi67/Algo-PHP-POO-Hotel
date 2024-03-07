<?php


Class Reservation{

    private DateTime $dateArrive;
    private DateTime $dateDepart;
    private Client $client;
    private Chambre $chambre;


    public function __construct(DateTime $dateArrive,DateTime $dateDepart){

        $this->dateArrive=$dateArrive;
        $this->dateDepart=$dateDepart;
        $this->client=$client;
        $this->chambre=$chambre;
    }

    
    public function getChambre()
    {
        return $this->chambre;
    }

    
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }


    public function getClient()
    {
        return $this->client;
    }

    
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

  
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

  
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }



}


?>