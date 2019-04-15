<!--
//login.php
!-->

<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
	header('location:index.php');
}

if(isset($_POST['login']))
{
	$query = "
		SELECT * FROM user 
  		WHERE username = :username
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':username' => $_POST["username"]
		)
	);	
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if(md5($_POST["password"]) == $row[3])
			{
				$_SESSION['user_id'] = $row[0];
				$_SESSION['username'] = $row['username'];
				$sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$row['id']."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
				header('location:index.php');
			}
			else
			{
				$message = '<label>Wrong Password</label>';
			}
		}
	}
	else
	{
		$message = '<label>Wrong Username</labe>';
	}
}


?>

<html>  
    <head>  
        <title>Chat Application using PHP Ajax Jquery</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Tutorial - <a href="https://www.webslesson.info/2018/07/live-chat-system-in-php-using-ajax-jquery.html">Chat Application using PHP Ajax Jquery</a></h3><br />
			<br />
			<div class="panel panel-default">
  				<div class="panel-heading">Chat Application Login</div>
				<div class="panel-body">
					<p class="text-danger"><?php echo $message; ?></p>
					<form method="post">
						<div class="form-group">
							<label>Enter Username</label>
							<input type="text" name="username" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter Password</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-info" value="Login" />
						</div>
					</form>
					<br />
					<br />
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- webslesson_mainblogsec_Blog1_1x1_as -->
					<ins class="adsbygoogle"
						 style="display:block"
						 data-ad-client="ca-pub-4529508631166774"
						 data-ad-host="ca-host-pub-1556223355139109"
						 data-ad-host-channel="L0007"
						 data-ad-slot="6573078845"
						 data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					<br />
					<br />
					<p><b>User 1</b></p>
					<p><b>Username</b> - johnsmith<br /><b>Password</b> - password</p>
					<p><b>Username</b> - peterParker<br /><b>Password</b> - password</p>
					<p><b>Username</b> - davidMoore<br /><b>Password</b> - password</p>
					<br />
					<br />
				</div>
			</div>
		</div>

    </body>  
</html>