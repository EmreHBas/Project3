<?php
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
?>