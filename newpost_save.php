<?php

session_start();
$cat_id=$_POST['category'];
$user_id=$_SESSION['user_id'];
$topic=$_POST['topic'];
$content=$_POST['comment'];

$conn= new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="SELECT * FROM post";
$sql="INSERT INTO post(title, content, post_date, cat_id, user_id) VALUES ('$topic','$content',NOW(),'$cat_id','$user_id')";

$conn->exec($sql);
$conn=null;
$_SESSION['add_login']='success';

header("location:index.php");
die();


?>