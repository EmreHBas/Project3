<?php

// functie: Programma overzicht bieren 




include 'functions.php';

ConnectDb();

$result = OvzBieren(100);
echo $result;

?>