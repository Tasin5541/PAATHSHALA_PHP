<?php
include('database_connection.php');
$msg='';

if(!empty($_POST['qa_submit'])){
	
	$data = array(
	':qa_u_id'		=>	$_SESSION['u_id'],
	':qa_username'		=>	$_SESSION['username'],
	':qa_topic'		=>	$_POST['qa_topic'],
	':qa_title'		=>	$_POST['qa_title'],
	':qa_brief'		=>	$_POST['qa_brief'],
);

		
			$news_sql = "INSERT INTO qa_post (u_id, username, topic, title, brief, date_time)
						VALUES (:qa_u_id, :qa_username, :qa_topic, :qa_title, :qa_brief, now())";
						
			$statement = $connect->prepare($news_sql);

			if($statement->execute($data)){				
			$msg='
				<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Question Submitted</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>' ;
			}
			else{
				$msg='
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>There Was An Error. Please Try Again</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>' ;
			}
						
			
}

?>