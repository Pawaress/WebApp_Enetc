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
    <title>register</title>
</head>
<body>
    <h1 style="text-align:center ;">สมัครสมาชิก</h1><hr>
    <form>

    <table style="border:2px solid black;width: 40%" align="center">
        <tr  ><td style="text-align:left ;background-color: #6CD2FE;" colspan="2">กรอกข้อมูล</td></tr>

        <tr ><td>ชื่อบัญชี :</td><td style="float: right;"><input size="50" type="user" name="login"></td></tr>
        <tr><td>รหัสผ่าน : </td><td style="float: right;"><input size="50" type="password" name="pwd"></td></tr>
        <tr ><td>ชื่อ-นามสกุล :   </td><td style="float: right;"><input size="50" type="name-surname" name="n-s"></td></tr>
        <tr ><td>เพศ :   </td><td><input type="radio" name="gender" value="m">ชาย<br>
                                  <input type="radio" name="gender" value="F">หญิง<br>
                                  <input type="radio" name="gender" value="unk">อื่นๆ<br></td></tr>
        <tr ><td>อีเมล :   </td><td style="float: right;"><input size="50" type="text" name="mail"></td></tr>
        <tr><td style="text-align:center" colspan="2"><input type="submit" value="สมัครสมาชิก"></td></tr>
        
    </table>
    <br>
    <center> <a  href = "index.php">กลับไปหน้าหลัก</a></center>


</form>
</body>
</html>