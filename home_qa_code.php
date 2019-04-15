<?php

$qa_host = 'localhost';   //always same thakbe
$qa_user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$qa_password ='';
$qa_db='paathshala';

$qa_link = mysqli_connect($qa_host,$qa_user,$qa_password,$qa_db);

$qa_sql = "SELECT * FROM qa_post ORDER BY date_time DESC";

if(!empty($_POST['search']))
{
	$queried=$_POST["search"];

	$qa_sql = "SELECT * FROM qa_post WHERE MATCH (title)
        AGAINST ('$queried' IN NATURAL LANGUAGE MODE) ORDER BY date_time DESC";
}
$qa_result = mysqli_query($qa_link,$qa_sql) or die(mysqli_error($qa_link));

$noOfData = mysqli_num_rows($qa_result);
if($noOfData===0)
{
	$lmsg='
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong> NO POSTS TO SHOW</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>' ;
}
?>