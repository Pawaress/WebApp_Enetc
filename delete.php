<?php
session_start();
$id= $_GET['id'];
if($_SESSION['role']!='a'){
    header("location:index.php");}
    else {echo "ลบกระทู้ หมายเลข $id";}

?>
