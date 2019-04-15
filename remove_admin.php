<?php
$uid = $_GET['uid'];

$host = 'localhost';   //always same thakbe
$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$password ='';
$db='paathshala';

$link = mysqli_connect($host,$user,$password,$db);

//user query
$sql = "UPDATE user SET admin = '0' WHERE id = '".$uid."' ";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

mysqli_close($link);

header("Location: users.php");

?>