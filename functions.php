<?php
//auteur
//funtie: algemene functies tbv hergebruik

function ConnectDb(){
    echo "connect<br>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="bieren"; 

try {
  $conn = new PDO("mysql:host=$servername;dbname= $dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}

function Ovzbieren()
    echo "overzicht<br>";

function Ovzbieren($getal){
    echo "overzicht<br>";
    $uitkomst= $getal * 10;
    return $uitkomst;


}


?>
.