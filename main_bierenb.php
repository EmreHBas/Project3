<?php

// functie: Programma overzicht bieren 




include 'functionsb.php';

ConnectDb();

$result = OvzBieren(100);
echo $result;

?>