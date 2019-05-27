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

    echo "
    <table align='center'>
        <tr>
            <td>
                <div> The Espresso number is :</div>
            </td>
            <td>
            ".$row['esp']."
            </td>
        </tr>
        <tr>
            <td>
                The Espresso size is:
            </td>
            <td>
                small
            </td>
        </tr>
        <tr>
            <td>
                The Espresso price is:
            </td>
             <td>
             ".$espPrice."
             </td>
        </tr>
        <tr>
            <td>
                The sandwich number is:
            </td>
            <td>
            ".$row['sandwich']."
            </td>
        </tr>
        <tr>
            <td>
                The sandwich price is:
            </td>
            <td>
            ".$sandPrice."
            </td>
        </tr>
        <tr>
            <td>
                The total price is:
            </td>
            <td>
            ".$sum."
            </td>
        </tr>
    </table>
        <input id='pay' type='button' value='pay' name='pay'>

         <script>
            var pay = document.getElementById('pay');
            pay.onclick = window.location.href = 'payment.html'
        </script>
    ";}
} else {
    echo "0 results";
}
mysqli_close($con);//close the database

?>