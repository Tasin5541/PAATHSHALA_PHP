<?php
 session_start();
 
 include('database_connection.php');

if(isset($_POST['user_comm'])&& isset($_POST['post_id']) )
{
  $data = array(
	':user_id'		=>	$_SESSION['u_id'],
	':user_nm'		=>	$_SESSION['username'],
	':post_id'		=>	$_POST['post_id'],
	':comment'		=>	$_POST['user_comm'],
 );
  $sql = "INSERT INTO video_comment (comment,user_id,username,video_id )
VALUES (:comment, :user_id, :user_nm, :post_id)";
  
  $statement = $connect->prepare($sql);

  $statement->execute($data);

exit;
}

?>