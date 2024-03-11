

<?php

Class Hotel{

    private string $nom;
    private string $adresse;
    private int $etage;
    private array $chambres;
    private array $reservations;




public function __construct($nom,$adresse,$etage){

        $this->nom=$nom;
        $this->adresse=$adresse;
        $this->etage=$etage;
        $this->chambres=[];
        $this->reservations=[];
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
    public function getAdresse()
    {
        return $this->adresse;
    }

  
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
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

    public function getInfo(){

        return '<h1>'. $this->getNom().'</h1>'.'<br>'.
                 $this->getAdresse(). '<br>'.
                 $this->afficherNbChambres().'<br>'.
                 $this->afficherNbChambresReserve().'<br>'.
                "Nombre de chambres dispo: ".$this->afficherNbChambresDispo();

    }


    public function addChambre(Chambre $chambre){

        $this->chambres[]=$chambre;

    }

    public function addReservations(Reservation $reservation){

        $this->reservations[]=$reservation;
    }
    
    
    public function afficherReservationHotel(){

        $resultat="";
        
        foreach($this->reservations as $reservation){
            $resultat.=$reservation;
            
        }
        if(empty($this->reservations)){
            return "Aucune reservation! ";
        }else{
            return $resultat;
        }
        
    }

    
    public function afficherChambres(){

        $resulat="";

        foreach($this->chambres as $chambre){
            $resulat.=$chambre;
            return $resulat;
        }
    }

    public function afficherNbChambres(){

        $resultat=count($this->chambres);
        return "Nombre de Chambres:  $resultat";
    }

    public function afficherNbChambresReserve(){

        $resultat=count($this->reservations);
        return "Nombre de chambres réservés: $resultat";

        }
    
    public function afficherNbChambresDispo(){

        $resultat=count($this->chambres)-count($this->reservations);
        return $resultat;
    }
     
    
    public function getReservations(){

        return'<h1>'."Réservations de l'hotel $this".'</h1>'.'<br>'.
                $this->afficherReservationHotel();        

    }
    
   
    
    public function __toString(){

        return $this->getNom();
    }
}

?>