<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../css/login_page.css">

</head>
<body >
<center><img id="showCF" src="../image/cf_back1.jpg" alt="环境" ></center>
<script>
    var num = 1;
    function f() {
        num++;
        if(num > 4){
            num = 1;
        }
        var img = document.getElementById('showCF');
        img.src = "../image/cf_back" + num + ".jpg";
    }
    setInterval(f,3000);
</script>
<form action="#" method="get">
    <h1 align="center"> coffeez </h1><br>
    <table style="background-color:seashell" width="400" height="400" align="center">
        <tr>
            <td style="background-color:salmon" align="center" height="25%" colspan="2">
                <h2 > log in </h2>
            </td>
        </tr>
        <tr>
            <td align="center" height="25%" ><lable for="username"><h3>username</h3></lable></td>
            <td><input type="text" id="username" checked="username" name="username" placeholder=" entry username" ></td>
        </tr>
        <tr>
            <td align="center"><lable for="password"><h3>password</h3></lable></td>
            <td><input type="password" id="password" checked="password" name="password" placeholder="entry password"></td>
        </tr>
        <tr>
            <td align="center" height="25%" colspan="2">
              <a href="menu.php">  <input type="button" value='log in'></a>
            </td>
        </tr>

    </table>
</form>
</body>
</html>