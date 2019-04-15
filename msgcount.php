<?php
$host = 'localhost';   //always same thakbe
$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$password ='';
$db='paathshala';

$link = mysqli_connect($host,$user,$password,$db);

//user query
if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){
$sql = 'SELECT * FROM chat_message WHERE status = 1 AND to_user_id = "'.$_SESSION['u_id'].'"';
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

//data fetch
$noOfFeed = mysqli_num_rows($result);
}
?>