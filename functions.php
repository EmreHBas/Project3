<?php

function ConnectDb(){
    echo "connect<br>";
    $servername = "localhost";
    $username = "root";
    $password = "";
<<<<<<< HEAD
    $dbname = "bieren";
=======
    $dbname ="bieren"; 
>>>>>>> 1bfe48ab2f106522907fcee723a59d2d7b0c6238

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
<<<<<<< HEAD
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}

function OvzBieren($getal){
=======
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

return $conn;
}


function Ovzbieren($getal){
>>>>>>> 1bfe48ab2f106522907fcee723a59d2d7b0c6238
    echo "overzicht<br>";
    $uitkomst = $getal * 10;
    return $uitkomst;
}

<<<<<<< HEAD
?>
=======

?>
>>>>>>> 1bfe48ab2f106522907fcee723a59d2d7b0c6238
