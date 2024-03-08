

<?php

Class Hotel{

    private string $nom;
    private string $adresse;
    private int $etage;
    private array $chambres;



public function __construct($nom,$adresse,$etage){

        $this->nom=$nom;
        $this->adresse=$adresse;
        $this->etage=$etage;
        $this->chambres=[];
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


    public function addChambre(Chambre $chambre){

        $this->chambres[]=$chambre;

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




    public function __toString(){

        return $this->getNom();
    }
}

?>