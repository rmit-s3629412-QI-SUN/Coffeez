<?php   
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("wrong activate");
    }//if activate submit

    $name=$_POST['username'];//post form name
    $userpassword=$_POST['password'];//post form userpassword
    $phone = $_POST['phone'];

    include('connect.php');//connect database 
    $q="insert into Customers(username,password,phone) values ('$name','$userpassword','$phone')";//sql: insert data
    $reslut=mysqli_query($con,$q);//execute sql
    
    if (!$reslut){
        die('Error: ' . mysqli_error($con));//fail to sign up
    }else{
        echo "successfully sign up";//success sign up
        echo "<script>
                setTimeout(function(){window.location.href='login.html';},1000);
            </script>";
    }

    mysqli_close($con);//close database

?>