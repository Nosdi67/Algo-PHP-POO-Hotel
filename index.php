<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';


});

$hilton= new Hotel("Hilton **** Strasbourg "," 1O Route de la Gare 67000 STRASBOURG",5 );
$regent=new Hotel("Regent **** Paris","adresse",5);
$chambre1=new Chambre($hilton,101,1,"Disponible",60,"oui");
$chambre2=new Chambre($hilton,102,1,"Disponible",60,"oui");
$chambre3=new Chambre($hilton,103,1,"Disponible",60,"oui");
$chambre4=new Chambre($hilton,104,1,"Disponible",60,"non");
$chambre5=new Chambre($hilton,104,1,"Disponible",60,"non");


$client1=new Client(" Robert "," SHAKHMURADYAN " ,"2001-03-22");
$client2=new Client("MURMANN","Micka","1980-01-01");
$reservation1= new Reservation($client1,$chambre1,"2024-03-08","2024-03-10");
$reservation2=new Reservation($client1,$chambre3,"2024-03-08","2024-03-09");
$reservation3=new Reservation($client2,$chambre2,"2024-03-11","2024-03-15");

echo $hilton->getInfo().'<br>';
echo $hilton->getReservations().'<br>';
echo $regent->getReservations().'<br>';
echo $client1->getreservationClinet().'<br>';
$chambre4->setWifi(false);
$chambre5->setWifi(false);

echo $hilton->getListeChambre();




?>