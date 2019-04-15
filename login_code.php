<?php
session_start();

$name='';
$lmsg='';
$success= 0;
$admin_panel='';
$admin_check=false;

$host = 'localhost';   //always same thakbe
$user = 'root';        //server create korar shomoi username set kora jai.eta db access korar jnno
$password ='';
$db='paathshala';

$link = mysqli_connect($host,$user,$password,$db);

if(!empty($_POST['l_submit']))   //submit na kora prjnto etar kaj hbe na
{
$connect = new PDO("mysql:host=localhost;dbname=paathshala;charset=utf8mb4", "root", "");

//data query
$email = $_POST['email'];
$pass = md5($_POST['password']);  //db er encoded pass er sthe ei pass o encode kore milaite hbe
$sql = 'SELECT * FROM user WHERE email = "'.$email.'" AND ban = 0';
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

//data fetch
$noOfData = mysqli_num_rows($result);
while($row = mysqli_fetch_row($result)){
	
	if($row[3] == $pass && $row[4] == 1){
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $row[1] ;
		$_SESSION['u_id'] = $row[0] ;
		$_SESSION['admin'] = true;
		$_SESSION['$urating'] = $row[6] ;
		
		$_SESSION['user_id'] = $row[0];
				$sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$row[0]."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
		$success=1;
		
		$lmsg='
		<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong> logged In Successfully</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>' ;
		
		header("Location: admin.php");
	}
		
	
	else if($row[3] == $pass){
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $row[1] ;
		$_SESSION['u_id'] = $row[0] ;
		$_SESSION['$urating'] = $row[6] ;
		$success=1;
		
		$_SESSION['user_id'] = $row[0];
				$sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$row[0]."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
		
		$lmsg='
		<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong> logged In Successfully</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>' ;
	}

}

mysqli_close($link);

if($success==0) {
		$lmsg='
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong> log In Unsuccessfull</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>' ;
	}
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$name= '<li class="nav-item ">
					<a class="nav-link disabled u_name_container">' . $_SESSION['username'] . '</a>
				</li>';
}

if(isset($_SESSION['admin'])){
	$admin_check = true;
	/*
	$admin_panel='<li class="nav-item">
					<a class="nav-link" href="admin_message.php">ADMIN PANEL</a>
				</li>';
				*/
}

?>