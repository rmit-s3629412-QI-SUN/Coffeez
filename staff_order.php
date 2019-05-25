<?php
header("Content-Type: text/html; charset=utf8");

if(!isset($_POST["checkOrder"])){
    exit("wrong activate");
}


include('connect.php');//connect database

$sql = "select esp, sandwich from shopOrder where status = 'new' limit 1";
$result = mysqli_query($con,$sql);

while($row = $result->fetch_assoc())
{
    $espPrice = $row['esp']*5;
    $sandPrice = $row['sandwich']*5;
    $sum = $espPrice + $sandPrice;
    echo"<p>the Espose number is: ".$row['esp']."</p>";
    echo"<p>the Espose size is: small</p>";
    
    echo"<p>the sandwich number is: ".$row['sandwich']."</p>";
    echo"<input id='changeStatus' type='button' value='complete' name='changeStatus'>
        <script>
            var change = document.getElementById('changeStatus')
            change.onclick = function () {
                window.location.href = 'complete.html'
            }

        </script>";
}
?>