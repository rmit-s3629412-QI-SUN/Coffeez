<?php   
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['staffsubmit'])){
        exit("wrong activate");
    }//if activate submit

    $staffname=$_POST['staffname'];//post form name
    $staffpassword=$_POST['staffpassword'];//post form userpassword
    

    include('connect.php');//connect database 
    $q="insert into Staff(staffname,staffpassword) values ('$staffname','$staffpassword')";//sql: insert data
    $reslut=mysqli_query($con,$q);//execute sql
    
    if (!$reslut){
        die('Error: ' . mysqli_error($con));//fail to sign up
    }else{
        echo "successfully sign up";//success sign up
        echo "<script>
                setTimeout(function(){window.location.href='staff_login.html';},1000);
            </script>";
    }

    mysqli_close($con);//close database

?>