<?php   
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("wrong activate");
    }//if activate submit
    $esp=0;
    $esp=(int)$_POST['esp'];//post form name
    $sandwich = (int)$_POST['sandwichNumber'];
    $oderConten ='';
    include('connect.php');//connect database 

    if ($esp && $sandwich){//the username and password are not empty
        $sql="insert into shopOrder(esp,sandwich,status) values ($esp,$sandwich,'new')";//sql: insert data
        $result = mysqli_query($con,$sql);//execute sql
        
        if (!$result){
            die('Error: ' . mysqli_error($con));//fail to sign up
        }else{
            echo "successfully make a order";//success sign up
            echo "<script>
                    setTimeout(function(){window.location.href='cart.html';},1000);
                </script>";
        }
        

       
    
    }else{//if sth is empty
           echo "the form should not be empty";
           echo "
                 <script>
                       setTimeout(function(){window.location.href='new_menu.html';},1000);
                 </script>";

                   //try again;
        }   

    mysqli_close($con);//close database

?>