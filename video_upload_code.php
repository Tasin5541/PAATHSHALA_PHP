<?php

$msg='';

if(!empty($_POST['vid_submit'])){
	$vid_u_id = $_SESSION['u_id'];
	$vid_username = $_SESSION['username'];
	$vid_topic = $_POST['vid_topic'];
	$vid_title = $_POST['vid_title'];
	$vid_name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	copy($temp,"assets/uploads/".$vid_name);
	
		
		$host = 'localhost';   //always same thakbe
		$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
		$password ='';
		$db='paathshala';
		
		$link = mysqli_connect($host,$user,$password,$db);
		
			$vid_sql = "INSERT INTO video (u_id, username, topic, title, vid_name, date_time)
						VALUES ('".$vid_u_id."',
										'".$vid_username."',
										'".$vid_topic."',
										'".$vid_title."',
										'".$vid_name."',
										now()
										);";
										
			$result = mysqli_query($link,$vid_sql) or die(mysqli_error($link));
										
										
			$msg='
				<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Video Uploaded</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>' ;
						
			mysqli_close($link);
			
}

?>