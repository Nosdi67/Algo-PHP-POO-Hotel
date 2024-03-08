<?php


Class Reservation{

    private DateTime $dateArrive;
    private DateTime $dateDepart;
    private Client $client;
    private Chambre $chambre;
    


    public function __construct(Client $client,string $dateArrive,string $dateDepart){
        $this->client=$client;
        $this->dateArrive= new datetime ($dateArrive);
        $this->dateDepart= new datetime ($dateDepart);
        $this->client->addReservationClient($this);
       
        
    }
    public function getNumeroChambre(){
        
        return $this->chambre->getNumero();
    }

    public function getDateDepart()
    {
        return $this->dateDepart->format('d-m-Y');
    }

    
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

  
    public function getDateArrive()
    {
        return $this->dateArrive->format('d-m-Y');
    }

  
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    public function setChambre($chambre)
    {
        $this->chambre->setNumero($chambre);

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

    
    
    

    public function __toString(){

        return  "Nom: ".$this->getClient().
                "Dates: ". $this->getDateArrive(). " - ". $this->getDateDepart();
                "Chambre: ".$this->getNumeroChambre();
               
    }



    
}



?>