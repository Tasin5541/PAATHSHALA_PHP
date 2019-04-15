<?php

$host = 'localhost';   //always same thakbe
$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$password ='';
$db='paathshala';

$link = mysqli_connect($host,$user,$password,$db);

//user query
$sql = 'SELECT * FROM user';
$uresult = mysqli_query($link,$sql) or die(mysqli_error($link));

?>