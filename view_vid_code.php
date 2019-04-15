<?php

$vid_id = $_GET['vid_id'];

$vid_host = 'localhost';   //always same thakbe
$vid_user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$vid_password ='';
$vid_db='paathshala';

$vid_link = mysqli_connect($vid_host,$vid_user,$vid_password,$vid_db);

$vid_sql = 'SELECT * FROM video WHERE vid_id = "'.$vid_id.'"';
$vid_result = mysqli_query($vid_link,$vid_sql) or die(mysqli_error($vid_link));

?>