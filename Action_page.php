<?php 

echo "Datum: " . date("Y/m/d") . "<br>";
echo "Username: " . $_POST ["username"] . "<br>";
echo "Password: " . $_POST ["password"];

$len = strlen($_POST["username"]);
echo "De lengte van username: $len";

if ($len <5 ) {
    echo "Username moet groter zijn dan 4 tekens <br>"; 
}



/*array vullen*/ 

$a[0]= "jan";
$a[1]= "rob";
$a[2]= "piet";

var_dump($a);
echo "<br>";
?>

