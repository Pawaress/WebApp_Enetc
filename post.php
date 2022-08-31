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
<div align="center">
ต้องการกระทู้หมายเลข<?php echo $_GET['id'];?>
<table style="border:2px solid black;width: 40%" align="center">
<tr ><td style="text-align:left ;background-color: #6CD2FE;">กรอกข้อมูล</td></tr>
<tr ><td style="text-align:center ;"><textarea name="message" rows="10"col="30">
</textarea></td></tr>
<tr><td style="text-align:center"><form><input type="submit" value="ส่งข้อความ"></form></td></tr>

</table>
<br>
<a  href = "index.html">กลับไปหน้าหลัก</a>
</div>
</body>
</html>