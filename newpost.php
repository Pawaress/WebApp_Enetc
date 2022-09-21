<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center ;">Webbord KakKak</h1><hr>

    <table>
    <tr>   <td colspan="2"><?php echo "ผู้ใช้ : $_SESSION[username]";?></td> </tr>    
    <tr>   <td>หมวดหมู่:</td><td> 
     
    <select>
        :
        <option value="all">--เรื่องทั่วไป--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select></td></tr>


    <tr>   <td> หัวข้อ :</td><td><input  size="30" type="text" name="login"></td>  </tr>
    <tr>   <td> เนื้อหา :</td><td><textarea name="message" rows="2"col="30"></textarea></td>  </tr>
    <tr>   <td> </td><td><input type="submit" value="ส่งข้อความ"></td>  </tr>
    
    </table>
</body>
</html>