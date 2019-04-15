<?php
session_start();

$name='';
$admin_check = false;

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