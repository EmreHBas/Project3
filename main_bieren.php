<?php
<<<<<<< HEAD

// functie: Programma overzicht bieren 




include 'functions.php';

ConnectDb();

$result = OvzBieren(100);
echo $result;

=======
//functie: Programme overzicht bieren
// auteur: 

//initialisatie
include 'functions.php';

//main

//connect database bieren
$conn = ConnectDb();
var_dump($conn);

//print bieren
OvzBieren($conn);


<<<<<<< HEAD
$result = OvzBieren(2);
echo $result;
>>>>>>> 25253aff4718b3ab0fc6434ea4cd1c7c4f3d19f3
=======
>>>>>>> 7afa4ec4a40560423fdf7eac6c21267d34259867
?>