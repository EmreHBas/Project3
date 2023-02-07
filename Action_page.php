<?php 




$len = strlen($_POST['fname']);
echo " de lengte van uname : $len <br>";

if ( $len < 5) {
    echo " <br> Username moet groter zijn dan 4 tekens <br>";
} else if ( $len > 10) {
    echo " <br> Username moet korter zijn dan 10 tekens <br>";
}


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

//$b = array(10,11,12,34,100,1000); //ook mogelijk!!

echo '<table border="1" width= "200">';
foreach($a as $value){

    //toevoegen tr en td
    echo "<tr><td>";

    //print naam
    echo $value . "<br>";

    //afsluiten tr en td
    echo "</td></tr>";
}


//var_dump($a);
echo "<br>";


?>
