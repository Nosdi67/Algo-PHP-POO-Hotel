<?php

class Client{

    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private array $reservations;


    public function __construct(string $nom,string $prenom,string $dateDeNaissance){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateDeNaissance=new Datetime($dateDeNaissance);
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

        $this->reservations[]=$reservation; // AJOUTER LES RESA DANS LE TABLEAU
    }

    public function getreservationClinet(){ //AFFICHER LES RESA DU TABLEAU

        $resultat="";
        foreach($this->reservations as $reservation){
            $resultat.=$reservation."\n";
        }
            return '<h1>'."Reservations de $this".'</h1>'. '<br>'. //AFFICHER TOUTES LES RESA DU CLIENT EN QUESTION
                    $resultat."\n" .$this->getTotalGlobal();  // AFFICHER LE TOTAL DE TOUTES SES RESA
    }

    
    public function getTotalGlobal(){  // CALCULER LE PRIX GLOBAL DE SES RESERVATIONS
     
       $total = 0;
       foreach ($this->reservations as $reservation) {
        $total+=$reservation->getTotalResa(); //CALCULE LE TOTAL SELON LE NB DE JOURS RESERVEE
       }
       return "Total: ".$total. "€".'<br>';
    }
    
        


    public function __toString(){

        return $this->getnom(). " ". $this->getPrenom();
    }

}



?>