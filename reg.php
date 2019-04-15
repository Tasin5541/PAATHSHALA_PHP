<?php
include 'reg_code.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/reg.css" />
	
	
	<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	
    

    <title>Registration</title>
</head>
<body>
<!--code starts from here-->
<div class="back">
	<a class="btn btn-light action-button" role="button" href="home.php">CANCEL</a>
</div>
<p><?php echo $msg ?></p>
<div class="registration-form">
  <header>
    <h1>Sign Up</h1>
    <p>Fill in all informations</p>
  </header>
  <form action="" method="POST" enctype="multipart/form-data">
  
     <div class="input-section username-section">
      <input class="username" id="username" name="username" placeholder="SELECT YOUR USERNAME" autocomplete="off"/>
      <div class="animated-button"><span class="icon-username"><i class="fa fa-user-o"></i></i></span><span class="next-button username"><i class="fa fa-arrow-up"></i></span></div>
    </div>
	
    <div class="input-section email-section folded">
      <input class="email" id="email" name="email" type="email" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off"/>
      <div class="animated-button"><span class="icon-paper-plane"><i class="fa fa-envelope-o"></i></span><span class="next-button email"><i class="fa fa-arrow-up"></i></span></div>
    </div>
    <div class="input-section password-section folded">
      <input class="password" id="password" name="password" type="password" placeholder="ENTER YOUR PASSWORD HERE"/>
      <div class="animated-button"><span class="icon-lock"><i class="fa fa-lock"></i></span><span class="next-button password"><i class="fa fa-arrow-up"></i></span></div>
    </div>
    <div class="input-section repeat-password-section folded">
      <input class="repeat-password" id="repeat-password" name="repeat-password" type="password" placeholder="REPEAT YOUR PASSWORD HERE"/>
      <div class="animated-button"><span class="icon-repeat-lock"><i class="fa fa-lock"></i></span>
	  <button id="reg" class="reg_button" name = "r_submit" value = "submit" type="submit"><span class="next-button repeat-password"><i class="fa fa-paper-plane"></i></span></button></div>
    </div>
	
    <div id="success" class="success"> 
      <p>ACCOUNT CREATED</p>
    </div>
	
	
	
  </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>


<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

<script src="assets/js/reg.js"></script>
<script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>

</body>
</html>