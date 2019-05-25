<?php
header("Content-Type: text/html; charset=utf8");

if(!isset($_POST["staffsubmit"])){
    exit("wrong activate");
}//if activate submit

include('connect.php');//connect database
$staffname = $_POST['staffname'];//post the  staffname value of the form
$staffpassowrd = $_POST['staffpassword'];//post the staffpassword value of the form


if ($staffname && $staffpassowrd){//the username and password are not empty
         $sql = "select * from Staff where staffname = '$staffname' and staffpassword='$staffpassowrd'";//sql:whether exits or not test staffname and staffpassword
         $result = mysqli_query($con,$sql);//execute sql
         $rows=mysqli_num_rows($result);//return a result
         if($rows){//0 false 1 true
               echo "log in successful";
               header("refresh:0;url=menu.html");//if succeed, turn to the order page
               exit;
         }else{
            echo "something is wrong";
            echo "
                <script>
                        setTimeout(function(){window.location.href='order.html';},1000);
                </script>

            ";//if wrong , try the page again;
         }
         

}else{//if sth is empty
            echo "the form should not be empty";
            echo "
                  <script>
                        setTimeout(function(){window.location.href='staff_login.html';},1000);
                  </script>";

                    //try again;
}

mysqli_close();//close the database


?>