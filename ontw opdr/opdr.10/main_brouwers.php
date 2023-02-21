<?php
//functie: Programme overzicht bieren
// auteur: 

//initialisatie
include 'functions.php';

//main

//connect database bieren
$conn = ConnectDb();
var_dump($conn);

//print bieren
OvzBrouwers($conn);


?>