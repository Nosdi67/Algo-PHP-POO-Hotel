<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';


});

$hilton= new Hotel("Hilton **** Strasbourg "," 1O Route de la Gare 67000 STRASBOURG",5 );
$chambre1=new Chambre($hilton,101,1,"Disponible",60,"oui");

echo $hilton->getnom().'<br>';
echo $chambre1->getInfo();
?>