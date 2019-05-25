 <?php
header("Content-Type: text/html; charset=utf8");

if(!isset($_POST["submit"])){
    exit("wrong activate");
}//if activate submit

include('connect.php');//connect database
$name = $_POST['username'];//post the  username value of the form
$userpassowrd = $_POST['password'];//post the password value of the form


if ($name && $userpassowrd){//the username and password are not empty
         $sql = "select * from Customers where username = '$name' and password='$userpassowrd'";//sql:whether exits or not test username and password
         $result = mysqli_query($con,$sql);//execute sql
         $rows=mysqli_num_rows($result);//return a result
         if($rows){//0 false 1 true
               echo "log in successful";
               header("refresh:0;url=new_menu.html");//if succeed, turn to the order page
               exit;
         }else{
            echo "something is wrong";
            echo "
                <script>
                        setTimeout(function(){window.location.href='login.html';},1000);
                </script>

            ";//if wrong , try the page again;
         }
         

}else{//if sth is empty
            echo "the form should not be empty";
            echo "
                  <script>
                        setTimeout(function(){window.location.href='login.html';},1000);
                  </script>";

                    //try again;
}

mysqli_close();//close the database


?>