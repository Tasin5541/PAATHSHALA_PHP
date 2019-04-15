<?php

$qa_id = $_GET['qa_id'];

$qa_host = 'localhost';   //always same thakbe
$qa_user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$qa_password ='';
$qa_db='paathshala';

$qa_link = mysqli_connect($qa_host,$qa_user,$qa_password,$qa_db);

$qa_sql = 'SELECT * FROM qa_post WHERE qa_id = "'.$qa_id.'"';
$qa_result = mysqli_query($qa_link,$qa_sql) or die(mysqli_error($qa_link));

?>