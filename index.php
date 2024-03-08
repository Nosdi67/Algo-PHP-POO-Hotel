<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';


});

$hilton= new Hotel("Hilton **** Strasbourg "," 1O Route de la Gare 67000 STRASBOURG",5 );
$chambre1=new Chambre($hilton,101,1,"Disponible",60,"oui");
$chambre2=new Chambre($hilton,101,1,"Disponible",60,"oui");
$client1=new Client(" Robert "," SHAKHMURADYAN " ,"2001/03/22");
$reservation1= new Reservation($client1,"08/03/2024","09/03/2024");



echo $hilton->getnom().'<br>';
echo $chambre1->getInfo().'<br>';
echo $hilton->afficherNbChambres().'<br>';
echo $reservation1;
?>