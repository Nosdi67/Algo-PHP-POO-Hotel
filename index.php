<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';


});

$hilton= new Hotel("Hilton **** Strasbourg "," 1O Route de la Gare 67000 STRASBOURG",5 );
$regent=new Hotel("Regent **** Paris","adresse",5);
$chambre1=new Chambre($hilton,101,1,"Disponible",60,"oui");
$chambre2=new Chambre($hilton,102,1,"Disponible",60,"oui");
$chambre3=new Chambre($hilton,103,1,"Disponible",60,"oui");
$chambre4=new Chambre($hilton,104,1,"Disponible",60,"oui");
$chambre5=new Chambre($hilton,104,1,"Disponible",60,"oui");


$client1=new Client(" Robert "," SHAKHMURADYAN " ,"2001-03-22");
$client2=new Client("MURMANN","Micka","1980-01-01");
$reservation1= new Reservation($client1,$chambre1,"2024-03-08","2024-03-10");
$reservation2=new Reservation($client1,$chambre3,"2024-03-08","2024-03-09");
$reservation3=new Reservation($client2,$chambre2,"2024-03-11","2024-03-15");


echo $hilton->getInfo().'<br>';
echo $hilton->getReservations().'<br>';
echo $regent->getReservations().'<br>';
echo $client1->getreservationClinet().'<br>';

echo    "<table><thead>
        <tr>
        <th>Chambres</th>
        <th>Prix</th>
        <th>Wifi</th>
        <th>Etat</th>           
        </tr>
        </thead>"."<tbody>";


    

    echo"<tr>
         <td>" .$chambre1->getNumero().  "</td>
         <td>" .$chambre1->getPrix().  "</td>
         <td>" .$chambre1->getwifi().  "</td>
         <td style=background-color:red;>" .$chambre1->estReserve()  ."</td>                           
         </tr>".

        "<tr>
         <td>" .$chambre2->getNumero().  "</td>
         <td>" .$chambre2->getPrix().  "</td>
         <td>" .$chambre2->getwifi().  "</td>
         <td style=background-color:red;>" .$chambre2->estReserve()  ."</td>                           
         </tr>".

         "<tr>
         <td>" .$chambre3->getNumero().  "</td>
         <td>" .$chambre3->getPrix().  "</td>
         <td>" .$chambre3->getwifi().  "</td>
         <td style=background-color:red;>" .$chambre3->estReserve()  ."</td>                           
         </tr>".

         "<tr>
         <td>" .$chambre4->getNumero().  "</td>
         <td>" .$chambre4->getPrix().  "</td>
         <td>" .$chambre4->getwifi().  "</td>
         <td style=background-color:green;>" .$chambre4->estReserve()  ."</td>                           
         </tr>".

         "<tr>
         <td>" .$chambre5->getNumero().  "</td>
         <td>" .$chambre5->getPrix().  "</td>
         <td>" .$chambre5->getwifi().  "</td>
         <td style=background-color:green;>" .$chambre5->estReserve()  ."</td>                           
         </tr>";
    
    
    
    
         
        
        echo "</tbody></table>";



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




?>