<?php
 session_start();
 include('database_connection.php');

if(isset($_POST['user_rep'])&& isset($_POST['com_id']))
{
  $data = array(
	':user_id'		=>	$_SESSION['u_id'],
	':user_nm'		=>	$_SESSION['username'],
	':parent_comment_id'		=>	$_POST['com_id'],
	':user_rep'		=>	$_POST['user_rep'],
);
 
  $sql = "INSERT INTO video_comment (parent_comment_id, comment,user_id,username )
VALUES (:parent_comment_id ,:user_rep, :user_id, :user_nm)";
  
 $statement = $connect->prepare($sql);

$statement->execute($data);
exit;
}

?>