<?php 

echo "Datum: " . date("Y/m/d") . "<br>";
echo "Username: " . $_POST ["username"] . "<br>";
echo "Password: " . $_POST ["password"];
$len = strlen($_POST["username"]);
echo "de lengte van username $len";

if ($len <5 ) {
    echo "username moet groter zijn dan 4 tekens <br> "
}
else {
# code... 
}
?>
