<?php
include('msgcount.php');

//user query
$sql = 'SELECT * FROM user';
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

//data fetch
$noOfUser = mysqli_num_rows($result);

//q&A query
$sql = 'SELECT * FROM qa_post';
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

//data fetch
$noOfQA = mysqli_num_rows($result);

//vid query
$sql = 'SELECT * FROM video';
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

//data fetch
$noOfVid = mysqli_num_rows($result);

//admin query
$sql = 'SELECT * FROM user WHERE admin = 1';
$adresult = mysqli_query($link,$sql) or die(mysqli_error($link));

//ban query
$sql = 'SELECT * FROM user WHERE ban = 1';
$banresult = mysqli_query($link,$sql) or die(mysqli_error($link));

//user query
$tsql = 'SELECT * FROM user WHERE user_rating > 500';
$tresult = mysqli_query($link,$tsql) or die(mysqli_error($link));

?>