<?php
//functie: Programme overzicht bieren
// auteur: 

//initialisatie
include 'opdr12.php';

//main

//connect database bieren
$conn = ConnectDb();
var_dump($conn);

//print bieren
OvzBier($conn);


?>