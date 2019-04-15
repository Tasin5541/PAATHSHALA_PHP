<?php
$topic_vid = $_GET['topic'];
$lmsg = '';

$vid_host = 'localhost';   //always same thakbe
$vid_user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$vid_password ='';
$vid_db='paathshala';

$vid_link = mysqli_connect($vid_host,$vid_user,$vid_password,$vid_db);

$vid_sql = "SELECT * FROM video WHERE topic='$topic_vid' ORDER BY date_time DESC";

if(!empty($_POST['search']))
{
	$queried=$_POST["search"];

	$vid_sql = "SELECT * FROM video WHERE topic='$topic_vid' AND MATCH (title)
        AGAINST ('$queried' IN NATURAL LANGUAGE MODE) ORDER BY date_time DESC";
}

$vid_result = mysqli_query($vid_link,$vid_sql) or die(mysqli_error($vid_link));

$noOfData = mysqli_num_rows($vid_result);
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