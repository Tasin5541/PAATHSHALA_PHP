<?php

$msg='';
$vid_id = $_GET['vid_id'];

if(!empty($_POST['vid_update'])){
	$vid_title = $_POST['vid_title'];
	
		
		$host = 'localhost';   //always same thakbe
		$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
		$password ='';
		$db='paathshala';
		
		$link = mysqli_connect($host,$user,$password,$db);
		
			$news_sql = "UPDATE video SET title = '".$vid_title."' 
									WHERE vid_id = '".$vid_id."' ";
										
			$result = mysqli_query($link,$news_sql) or die(mysqli_error($link));
										
										
			$msg='
				<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Tutorial Updated</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>' ;
						
			mysqli_close($link);
			
			header("refresh:0; url=view_vid.php?vid_id=".$vid_id."");
}
if(!empty($_POST['vid_cancel'])){
	header("refresh:0; url=view_vid.php?vid_id=".$vid_id."");
}

?>