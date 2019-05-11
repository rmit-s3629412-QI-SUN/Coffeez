<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register_page</title>
    <link rel="stylesheet" href="../css/register.css">


</head>
<body>

<div class="rg_layout">
    <div class="rg_left">
        <p>new member</p>
        <p>register</p>
    </div>
    <div class="rg_center">
        <form  method="post" ACTION="../PHPfiles/register.module">
            <table >
                <tr>
                    <td class="tb_left"><label for="username">username</label></td>
                    <td class="tb_right"><input type="text" id="username" checked="username" name="username" placeholder=" entry username"></td>
                </tr>
                <tr>
                    <td class="tb_left"><label for="password">password</label></td>
                    <td class="tb_right"><input type="password" id="password" checked="password" name="password" placeholder="entry password">
                    </td>
                </tr>
                <tr>
                    <td class="tb_left"><label for="email">Email</label></td>
                    <td class="tb_right"><input type="email" id="email" name="email" checked="email" placeholder="entry email">
                    </td>
                </tr>

                <tr>
                    <td class="tb_left"><label for="phone">telphone</label>
                    <td class="tb_right"><input type="text" id="phone" name="phone" placeholder="entry ">
                    </td>
                </tr>
                <tr>
                    <td class="tb_left">gender</td>
                    <td class="tb_right"><input type="radio" name="gender" value="male"> male <input type="radio" name="gender" value="female">female
                    </td>
                </tr>
                <tr >
                    <td colspan="2" align="center">
                        <input id="sub" type="button" name="sumbit" value="sumbit">
                        <script>
                            var openbtn = document.getElementById('sub');

                            openbtn.onclick = function () {
                                open('../part2_login_page/login_page.html')
                            }
                        </script>
                    </td>
                </tr>
            </table>

        </form>

    </div>
    <div class="rg_right">
        <p>already have a account? <a href="login_page.html" id="a_login">log in</a></p>
    </div>
</div>

</body>
</html>