<?php

function CrudBieren(){

    //haal alle bier record uit de tabel
    $result = GetData("bier");

    //print tabel 
    PrintCrudBier($result);
}

?>