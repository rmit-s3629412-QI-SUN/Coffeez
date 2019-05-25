<?php
header("Content-Type: text/html; charset=utf8");

if (isset($_POST["changeStatus"])){
    exit("wrong activate");
}//if activate submit

include('connect.php');//connect database

$sql = "update shopOrder set status = 'completed' where status = 'new' limit 1";
$result = mysqli_query($con,$sql);

if (!$result){
    die('Error: ' . mysqli_error($con));//fail to sign up
    }else{
            echo 'successfully change status';//success sign up
            echo "<script>
                    setTimeout(function(){window.location.href='staff_order.html';},10000);
                </script>";
        }

mysqli_close($con);//close the database

?>