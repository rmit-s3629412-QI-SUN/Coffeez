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

    echo " 
    <table align = 'center' >
    <tr>
        <td>
            <div>The Espresso number is : </div>
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
            The sandwich number is:
        </td>
        <td>
                ".$row['sandwich']."
        </td>
    </tr>
    <tr>
        <td colspan='2'>
            <input id='changeStatus' type='button' value='complete' name='change'>
            <script>
                var change = document.getElementById('changeStatus')
                change.onclick = function () {
                    window.location.href = 'complete.html'
                }

            </script>
        </td>
    </tr>
</table>
    ";
}
?>