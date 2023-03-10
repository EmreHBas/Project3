<?php

function CrudBieren(){

    //haal alle bier record uit de tabel
    $result = GetData("bier");

    //print tabel 
    PrintCrudBier($result);
}

function PrintCrudBier($result){
//zet de hele tabel in en variabele en print hem 1 keer
$tabel = "<table border = 1px>";

//Print header table

//haal de kolommen uit de eerste [0] van het array
$headers = array_keys($result[0]);
$tabel .= "<tr>";
foreach($headers as $headers){
    $table .="<th bgcolor=gray>" .$header ."</th>"
}

}

?>