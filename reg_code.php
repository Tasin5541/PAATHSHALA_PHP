<?php

$email_flag = 0;		
$msg='DONE';

if(!empty($_POST['r_submit']))    //submit na kora prjnto etar kaj hbe na
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$repass = $_POST['repeat-password'];
	
		if($pass === $repass){
			$host = 'localhost';   //always same thakbe
			$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
			$password ='';
			$db='paathshala';
			
			$link = mysqli_connect($host,$user,$password,$db);
			
			$email_sql = 'SELECT email FROM user WHERE email = "'.$email.'"';
			$result = mysqli_query($link,$email_sql) or die(mysqli_error($link));
			
			$noOfData = mysqli_num_rows($result);
			while($row = mysqli_fetch_row($result)){
				
			if($row[2] === $email)
			{
				$email_flag = 1;
			}
			}
			
			if($email_flag == 1){
				$msg="EMAIL IS USED" ;
			}else{
			
			$host = 'localhost';   //always same thakbe
			$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
			$password ='';
			$db='paathshala';
			
			$link = mysqli_connect($host,$user,$password,$db);
			
			$final_pass = md5($pass);
			
			$sql = "INSERT INTO user (username, email, password)
					VALUES ('".$username."',
									'".$email."',
									'".$final_pass."'									
									);";
			$result = mysqli_query($link,$sql) or die(mysqli_error($link));
			
			$msg="ACCOUNT CREATED" ;
			mysqli_close($link);
			
			session_start();
			
			$link = mysqli_connect($host,$user,$password,$db);
			$connect = new PDO("mysql:host=localhost;dbname=paathshala;charset=utf8mb4", "root", "");
			$sql = 'SELECT * FROM user WHERE email = "'.$email.'"';
			$result = mysqli_query($link,$sql) or die(mysqli_error($link));

			//data fetch
			$noOfData = mysqli_num_rows($result);
			while($row = mysqli_fetch_row($result)){
			
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $row[1] ;
				$_SESSION['u_id'] = $row[0] ;
				$_SESSION['$urating'] = $row[6] ;
				$_SESSION['user_id'] = $row[0];
			}
			mysqli_close($link);
			$success=1;
			
			$lmsg='
			<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong> logged In Successfully</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>' ;
					
			header("refresh:1; url=home.php");
					
			}
			

			//die;   //erpr r code run hbe na
		}
		
		else {
			$msg='PASSWORDS DO NOT MATCH' ;
					
		}

}
?>