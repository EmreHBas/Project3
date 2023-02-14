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
ConnectDb();

//print bieren
$result = OvzBieren(100);
echo $result;

$result = OvzBieren(2);
echo $result;
>>>>>>> 25253aff4718b3ab0fc6434ea4cd1c7c4f3d19f3
?>