<?php
header("Content-Type: text/html; charset=utf8");

if(!isset($_POST["submit"])){
    exit("wrong activate");
}//if activate submit

include('connect.php');//connect database

$sql = "select esp, sandwich from shopOrder where status = 'new' limit 1";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {

    while($row = $result->fetch_assoc())
    {
    $espPrice = $row['esp']*5;
    $sandPrice = $row['sandwich']*5;
    $sum = $espPrice + $sandPrice;
    echo"<p>the Espose number is: ".$row['esp']."</p>";
    echo"<p>the Espose size is: small</p>";
    echo"<p>the Espose price is: ".$espPrice."</p>";
    echo"<p>the sandwich number is: ".$row['sandwich']."</p>";
    echo"<p> the sandwich price is: ".$sandPrice."</p>";
    echo"<p> the total price price is: ".$sum."</p>";

    $showSandwichNumber = $row['sandwich'];
    $showEspNumber = $row['esp'];
    
    }
} else {
    echo "0 results";
}
mysqli_close($con);//close the database

?>