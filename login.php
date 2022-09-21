<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1 style="text-align:center ;">Webbord KakKak</h1><hr>


    <form action="verify.php" method="post">

    <table style="border:2px solid black;width: 40%" align="center">
        <tr  ><td style="text-align:left ;background-color: #6CD2FE;" colspan="2">เข้าสู่ระบบ</td></tr>

        <tr ><td>login   </td><td style="float: right;"><input  size="60" type="text" name="login"></td></tr>
        <tr><td>Password </td><td style="float: right;"><input size="60" type="password" name="pwd"></td></tr>
        <tr><td style="text-align:center" colspan="2"><input type="submit" value="Login"></td></tr>
    </table>
    </form>

    
    <br>
    <center>ถ้ายังไม่ได้เป็นสมาชิก <a  href = "register.php">กรุณาสมัครสมาชิก</a></center>



</body>
</html>