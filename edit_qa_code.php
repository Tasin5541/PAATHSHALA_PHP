<?php

$msg='';
$qa_id = $_GET['qa_id'];

if(!empty($_POST['qa_update'])){
	$qa_title = $_POST['qa_title'];
	$qa_brief = $_POST['qa_brief'];
	
		
		$host = 'localhost';   //always same thakbe
		$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
		$password ='';
		$db='paathshala';
		
		$link = mysqli_connect($host,$user,$password,$db);
		
			$news_sql = "UPDATE qa_post SET title = '".$qa_title."', brief = '".$qa_brief."' 
									WHERE qa_id = '".$qa_id."' ";
										
			$result = mysqli_query($link,$news_sql) or die(mysqli_error($link));
										
										
			$msg='
				<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Question Updated</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>' ;
						
			mysqli_close($link);
			
			header("refresh:0; url=view_post.php?qa_id=".$qa_id."");
}
if(!empty($_POST['qa_cancel'])){
	header("refresh:0; url=view_post.php?qa_id=".$qa_id."");
}

?>