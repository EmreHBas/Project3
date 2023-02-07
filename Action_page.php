<?php 




$len = strlen($_POST['username']);
echo " de lengte van uname : $len <br>";

if ( $len < 5) {
    echo " <br> Username moet groter zijn dan 4 tekens <br>";
} else if ( $len > 10) {
    echo " <br> Username moet korter zijn dan 10 tekens <br>";
}


echo "Datum: " . date("Y/m/d") . "<br>";
echo "Username: " . $_POST ["fname"] . "<br>";
echo "Password: " . $_POST ["lname"];

$len = strlen($_POST["fname"]);
echo " <br> De lengte van username: $len";

if ($len <5 ) {
    echo " <br>Username moet groter zijn dan 4 tekens <br>"; 
}

var_dump($_POST);


/*array vullen*/ 
$a[0]= "jan";
$a[1]= "rob";
$a[2]= "piet";

//$b = array(10,11,12,34,100,1000); //ook mogelijk!!

echo '<table border="1" width= "200">';
foreach($_POST as $value){

    //toevoegen tr en td
   

    //print naam

    echo "<tr><td>";
    echo $value . "<br>";
    echo "</tr></td>";
}
echo '</table>';
//var_dump($a);
echo "<br>";



?>
