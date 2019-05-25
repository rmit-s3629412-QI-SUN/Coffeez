<?php   
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("wrong activate");
    }//if activate submit
    $username = $_POST['username'];
    $newpassword = (string)$_POST['newpassword'];
    $phone = (int)$_POST['phone'];

    // echo gettype($username),$username;

    // echo gettype($newpassword),$newpassword;
    
    // echo gettype($phone),$phone;
    include('connect.php');

    if ($username && $newpassword && $phone){//the username and password are not empty
        $sql = "update  Customers set password='{$newpassword}' where username='{$username}' and phone = {$phone}" ;
        $result = mysqli_query($con,$sql);//execute sql
        if (!$result){
            die('Error: ' . mysqli_error($con));//fail to sign up
        }else{
            echo "successfully change password";//success sign up
            // echo "<script>
            //         setTimeout(function(){window.location.href='login.html';},1000);
            //     </script>";
        }
    }else{//if sth is empty
        echo "the form should not be empty";
        echo "
              <script>
                    setTimeout(function(){window.location.href='reset.html';},1000);
              </script>";

                //try again;
     }   
    

    mysqli_close($con);//close database

?>