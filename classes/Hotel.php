

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
        $this->chambres=[]; //tableau vide chambres
        $this->reservations=[]; //tableau vide reservations
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

    public function getInfo(){ //appel d'info
        return '<h1>'. $this->getNom().'</h1>'.'<br>'.
                 $this->getAdresse(). '<br>'.
                 $this->afficherNbChambres().'<br>'.
                 $this->afficherNbChambresReserve().'<br>'.
                "Nombre de chambres dispo: ".$this->afficherNbChambresDispo();

    }


    public function addChambre(Chambre $chambre){

        $this->chambres[]=$chambre; //AJOUTER LES CHAMBRES DANS LE TABLEAU

    }

    public function addReservations(Reservation $reservation){

        $this->reservations[]=$reservation; //AJOUT DE RESA DANS LE TABLEAU RESA
    }
    
    
    public function afficherReservationHotel(){ //AFFICHER CHAQUE RESA D HOTEL

        $resultat="";
        
        foreach($this->reservations as $reservation){ // FOREACH POUR RECUPERER CHAQUE RESA DU TABLEAU DES RESA
            $resultat.=$reservation.'<br>';
            
        }
        if(empty($this->reservations)){  //SI LE TABLEAU EST VIDE AFFICEHR PAS DE RESA
            return "Aucune reservation! ";
        }else{
            return $resultat;
        }
        
    }

    
    public function afficherChambres(){ //AFFICHER LES CHAMBRES D HOTEL, MEME PRINCIPE QU'EN HAUT

        $resulat="";

        foreach($this->chambres as $chambre){
            $resulat.=$chambre;
            return $resulat;
        }
    }

    public function afficherNbChambres(){ //COMPTER LE NOMBRE DES CHAMBRES DANS LE TABLEAU CHAMBRES

        $resultat=count($this->chambres);
        return "Nombre de Chambres:  $resultat";
    }

    public function afficherNbChambresReserve(){ //COMPTER LE NOMBRE DES CHAMBRES RESERVEES DANS LE TABLEAU DES RESA

        $resultat=count($this->reservations);
        return "Nombre de chambres réservés: $resultat";

        }
    
    public function afficherNbChambresDispo(){ //COMPTER LES 2 TABLEAUX ET FAIRE UNE SOUSTRACTION POUR AVOIR LE NB DE CHAMBRES DISPO

        $resultat=count($this->chambres)-count($this->reservations);
        return $resultat;
    }
     
    
    public function getReservations(){ //AFFICEHR TT LES RESA D HOTEL

        return'<h1>'."Réservations de l'hotel $this".'</h1>'.'<br>'.
                $this->afficherReservationHotel().'<br>';        

    }

    public function getListeChambre(){
        
        echo  
        "<head> 
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
        </head>";
        
        
 echo   "<table><thead>
        <tr>
        <th>Chambres</th>
        <th>Prix</th>
        <th>Wifi</th>
        <th>Etat</th>           
        </tr>
        </thead>"."<tbody>";

        foreach($this->chambres as $info){

           


    echo"<tr>
         <td>".$info->getNumero()."</td>
         <td>".$info->getPrix(). "</td>";
        
        if($info->getWifi(true)==="Oui"){
            echo "<td> <i class='fa-solid fa-wifi'> </i></td>";
        }elseif($info->getWifi(false)==="Non"){
            echo "<td>".$info->getWifi(false)."</td>";
        }

         "<td>".$info->getWifi(). "</td>";
              
        if($info->estReserve(true)==="Disponible"){
            echo "<td style='background-color:green;'>".$info->estReserve()."</td>";
        }else{
            echo "<td style='background-color:red;'>".$info->estReserve(false)."</td>";
        }
        
         "</tr>";
         }
    

        echo "<style>
    table {
       
        width: 50%;
       
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        text-align:center;
    }
    th {
        background-color: White;
    }
</style>";

echo "</tbody></table>";
    }
    
   
    
    public function __toString(){

        return $this->getNom();
    }
}

?>



    

    echo"<tr>
         <td>" .$chambre1->getNumero().  "</td>
         <td>" .$chambre1->getPrix().  "</td>
         <td>" .$chambre1->getwifi().  "</td>
         <td style=background-color:red;>" .$chambre1->estReserve()  ."</td>                           
         </tr>";

    
    
    
    
         
        
       



        