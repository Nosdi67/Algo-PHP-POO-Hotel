<?php


Class Reservation{

    private DateTime $dateArrive;
    private DateTime $dateDepart;
    private Client $client;
    private Chambre $chambre;
    


    public function __construct(Client $client,Chambre $chambre,string $dateArrive,string $dateDepart){
        $this->client=$client;
        $this->chambre=$chambre;
        $this->dateArrive= new Datetime ($dateArrive);
        $this->dateDepart= new Datetime ($dateDepart);
        $this->client->addReservationClient($this);
        $this->chambre->addReservationChambre($this);
        $this->chambre->setetat(false);
        $this->chambre->getHotel()->addReservations($this);
        
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
   
    public function getTotalResa(){  //GET LE PRIX TOTAL D'UNE SEUL RESA SELON NB DE JOURS

        $calculejours=$this->dateArrive->diff($this->dateDepart);
        $nbjours = $calculejours->d;
        $prix=$this->chambre->getPrix();
        $total=$prix*$nbjours;
        return $total;

    }
   

    public function __toString(){

        return  "Nom: ".$this->getClient().'<br>'.
                "Dates du séjour: ". $this->getDateArrive(). " - ". $this->getDateDepart().'<br>'.
                "Chambre: ".$this->getNumeroChambre().'<br>'.
                "Prix de la Chambre :".$this->chambre->getPrix()." €".'<br>'.
                "Total: ".$this->getTotalResa().'€'.'<br>';

               
    }
}







?>