<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MENU</title>
    <link rel="stylesheet" href="../css/menu_page.css">
    <style>

    </style>
</head>
<body>
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
<center><h1 id="menu" >MENU</h1></center>
<form action="#" method="get">
    <table class="coffee" align="center">
        <tr ><center><h1 id="cf">coffee</h1></center></tr>
        <tr>
            <td>
                <img id="cf1" src="../image/coffee1.jpeg" alt="cf1">
            </td>
            <td>
                <img id="cf2" src="../image/coffee2.jpeg" alt="cf1">
            </td>
            <td>
                <img id="cf3" src="../image/coffee3.jpeg" alt="cf1">
            </td>
        </tr>
        <tr>
            <td class="cf1">
                <select id="cf1_style" class="cf1_select" name="sytle">
                    <option value="1" selected="">Espresso</option>
                    <option value="2">double espresso</option>
                </select>
                <select id="cf1_size" class="cf1_select" name="e_size">
                    <option value="0" selected="">size</option>
                    <option value="small">small</option>
                </select>
                <select id="cf1_num" class="cf1_select" name="e_number">
                    <option value="0">number</option>
                    <option value="1" selected="">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td class="cf2">
                <select id="cf2_style" class="cf2_style" name="Latte">
                    <option value="Latte" selected="">Latte</option>
                </select>
                <select id="cf2_size" class="cf2_style" name="l_size">
                    <option value="0" selected="">size</option>
                    <option value="lager">lager</option>
                </select>
                <select id="cf2_num" class="cf2_style" name="l_number">
                    <option value="0" selected="">number</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td class="cf3">
                <select id="cf3_style" class="cf3_style" data-gwd-name="others">
                    <option value="0" selected="">others</option>
                    <option value="cappuccino">Cappuccino</option>
                    <option value="longback">long black</option>
                    <option value="hotchocolate">hot chocolate</option>
                </select>
                <select id="cf3_size" class="cf3_size" data-gwd-name="o_size">
                    <option value="0" selected="">size</option>
                    <option value="small">small</option>
                    <option value="med">medium</option>
                    <option value="lage">large</option>
                </select>
                <select id="cf3_num" class="cf3_num" data-gwd-name="o_number">
                    <option value="0" selected="">number</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <center><h1 id="teatitle">TEA</h1></center>
            </td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3">
               <center><img id="tea" src="../image/tea.jpeg" alt="tea_back"></center>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <select id="tea_style" name="tea_style">
                    <option value="0" selected="">style</option>
                    <option value="1">Earl Grey</option>
                    <option value="2">Assam</option>
                    <option value="3">Green</option>
                    <option value="4">Mint</option>
                </select>
                <select id="tea_size" name="tea_size">
                    <option value="1" selected="">small</option>
                    <option value="2">medium</option>
                    <option value="3">large</option>
                </select>
                <select id="tea_num" name="tea_number">
                    <option value="0" selected="">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center"><h1 id="food">food</h1></td>
        </tr>
        <tr>
            <td align="center" colspan="3">
                <img id="sandwich" src="../image/sandwich.jpeg" alt="sandwich">
                <img id="cake" src="../image/cake.jpeg" alt="cake">
            </td>
        <tr>
            <td colspan="3" align="center">
                <select id="sw_num" class="food_styale" name="food_style">
                    <option value="0" selected="">food</option>
                    <option value="1">sandwich</option>
                    <option value="2">cake</option>
                </select>
                <select id="food_num" class="food_num" name="food_number">
                    <option value="0" selected="">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td id="next" align="center" ><h1 >NEXT</h1></td>
        </tr>
        <tr>
            <td colspan="3" align="center" width="50px" height="50px">
            <input type="button" id="cart" value="cart" class="btn">
            <input type="button" id="back" value="log out" class="btn" >
            <script>
                var back = document.getElementById('back')
                back.onclick = function () {
                    location.href = "login_page.html"
                }
            </script>
        </td>
        </tr>
    </table>
                    <center><p><h1>Cart</h1> </p></center>
    <table align="center">
        <tr align="center">
            <td colspan="3" >Coffee</td>
        </tr>
        <tr>
            <td>style</td>
            <td>size</td>
            <td>number</td>
        </tr>
        <tr>
            <td><input class="show_cf" type="text" id="show_cfstyle" value=""></td>
            <td><input class="show_cf" type="text" id="show_cfsize" value=""></td>
            <td><input class="show_cf" type="text" id="show_cfnumber" value=""></td>
        </tr>
        <tr align="center">
            <td colspan="3" >Tea</td>
        </tr>
        <tr>
            <td>style</td>
            <td>size</td>
            <td>number</td>
        </tr>
        <tr>
            <td><input class="show_tea" type="text" id="show_teastyle" value=""></td>
            <td><input class="show_tea" type="text" id="show_teasize" value=""></td>
            <td><input class="show_tea" type="text" id="show_teanumber" value=""></td>
        </tr>
        <tr>
            <td colspan="3" >Food</td>
        </tr>
        <tr>
            <td>style</td>
            <td>number</td>
        </tr>
        <tr>
            <td><input class="show_food" type="text" id="show_fdstyle" value=""></td>
            <td><input class="show_food" type="text" id="show_fdnumber" value=""></td>
        </tr>
        <tr>
            <td><?php
                echo 'the total fee is: 18 dollar' 
            
            
            
            
            ?></td>
        </tr>
        <tr>
            <td>
                <h3>Payment</h3>
            </td>
        <tr>
        <td>
            <input type="radio" value="card" name="pay" id="card">credit card
            <input type="radio" value="Paypal" name="pay" id="paypal"> Paypal
        </td>
        </tr>
            <td>
                <input id="pay" type="button" value="pay" name="pay it">
                <input id="logout" type="button" value="log out" name="pay it">
                <script>
                    var out = document.getElementById('logout')
                    out.onclick = function () {
                        location.href = "login_page.html"
                    }
                </script>
            </td>

        </tr>
    </table>



</form>
</body>
</html>