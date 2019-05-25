<?php
 $server = "localhost:3306";
 $username = "root";
 $password = "sunqikk3463902";

 $con = mysqli_connect($server,$username,$password);//链接数据库
    if(!$con){
        die("can't connect".mysqli_error());//如果链接失败输出错误
    }
    
    mysqli_select_db($con,'myDB');//选择数据库（我的是test）
 ?>