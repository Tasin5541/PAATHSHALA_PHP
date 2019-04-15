<?php
include 'login_code.php';
?>
<?php
include 'home_vid_code.php';
?>
<?php
include('msgcount.php');
?>
<?php
if( isset($_SESSION['username']) && !empty($_SESSION['username']) ){ 
	$user_id=$_SESSION['u_id'];
	include('vid_server.php');
	
	$user_ratesql = 'SELECT * FROM user WHERE id = "'.$_SESSION['u_id'].'"';
	$user_ratesql = mysqli_query($link,$user_ratesql) or die(mysqli_error($link));
	while($user_raterow = mysqli_fetch_row($user_ratesql)){
		$_SESSION['$urating'] = $user_raterow[6] ;
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	
  
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="assets/css/reset.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="stylesheet" href="assets/css/login2.css">
	<link rel="stylesheet" href="assets/css/sidebar.css">
	<link rel="stylesheet" href="assets/css/post.css">
	<link rel="stylesheet" href="assets/css/bg.css">
</head>

<body class = "bg-gray">
    <nav class="navbar nav-bg navbar-dark fixed-top navbar-expand-md navigation-clean-search">
        <div class="container">
		<a class="navbar-brand" href="home.php">PAATSHALA</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <?php if(isset($_SESSION['admin'])){ ?>
                    <li class="nav-item" role="presentation">
						<a class="nav-link" href="admin.php">Admin Panel</a>
					</li>
				<?php } ?>
                </ul>
                <form class="form-inline my-auto d-inline flex-grow-1" method="POST" enctype="multipart/form-data">
                    <div class="form-group div-border">
						<label for="search-field">
							<i class="fa fa-search"></i>
						</label>
						<input class="form-control flex-grow-1 search-field" placeholder="search PAATHSHALA" type="search" name="search" id="search-field">
					</div>
                </form>
				
				
				<ul class="navbar-nav ml-auto">
				<?php if( !isset($_SESSION['username']) && empty($_SESSION['username']) )
				{
				?>
					<button onclick="document.getElementById('id01').style.display='block'" class="l_button">Login</button>
					<a class="btn btn-light action-button" role="button" href="reg.php">Sign Up</a>
					
					<?php }else{ ?>
						<li class="nav-item " role="presentation">
							<img src="assets/images/circle.gif" alt="Logo" style="width:33px;">
						</li>
						<?php echo $name; ?>
						<li class="nav-item dropdown" role="presentation">
						  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"></a>
						  
						  <div class="dropdown-content dropdown-menu-right">
							<a class="dropdown-item" href="logout.php">Logout</a>
						  </div>
						</li>
				<?php } ?>
				</ul>
				
				</div>
        </div>
    </nav>
	
	
	<!--Login-->
	<div id="id01" class="modal">
<form class="modal-content animate login-form" method="POST" enctype="multipart/form-data" action="">

<div class="imgcontainer">
      <span id="x_btn" onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>
	
	<div class="svgContainer">
		<div>
			<svg class="mySVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 200">
				<defs>
					<circle id="armMaskPath" cx="100" cy="100" r="100"/>
				</defs>
				<clipPath id="armMask">
					<use xlink:href="#armMaskPath" overflow="visible"/>
				</clipPath>
				<circle cx="100" cy="100" r="100" fill="#a9ddf3"/>
				<g class="body">
					<path fill="#FFFFFF" d="M193.3,135.9c-5.8-8.4-15.5-13.9-26.5-13.9H151V72c0-27.6-22.4-50-50-50S51,44.4,51,72v50H32.1 c-10.6,0-20,5.1-25.8,13l0,78h187L193.3,135.9z"/>
					<path fill="none" stroke="#3A5E77" stroke-width="2.5" stroke-linecap="round" stroke-linejoinn="round" d="M193.3,135.9 c-5.8-8.4-15.5-13.9-26.5-13.9H151V72c0-27.6-22.4-50-50-50S51,44.4,51,72v50H32.1c-10.6,0-20,5.1-25.8,13"/>
					<path fill="#DDF1FA" d="M100,156.4c-22.9,0-43,11.1-54.1,27.7c15.6,10,34.2,15.9,54.1,15.9s38.5-5.8,54.1-15.9 C143,167.5,122.9,156.4,100,156.4z"/>
				</g>
				<g class="earL">
					<g class="outerEar" fill="#ddf1fa" stroke="#3a5e77" stroke-width="2.5">
						<circle cx="47" cy="83" r="11.5"/>
						<path d="M46.3 78.9c-2.3 0-4.1 1.9-4.1 4.1 0 2.3 1.9 4.1 4.1 4.1" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<g class="earHair">
						<rect x="51" y="64" fill="#FFFFFF" width="15" height="35"/>
						<path d="M53.4 62.8C48.5 67.4 45 72.2 42.8 77c3.4-.1 6.8-.1 10.1.1-4 3.7-6.8 7.6-8.2 11.6 2.1 0 4.2 0 6.3.2-2.6 4.1-3.8 8.3-3.7 12.5 1.2-.7 3.4-1.4 5.2-1.9" fill="#fff" stroke="#3a5e77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
				</g>
				<g class="earR">
					<g class="outerEar" fill="#ddf1fa" stroke="#3a5e77" stroke-width="2.5">
						<circle cx="155" cy="83" r="11.5"/>
						<path d="M155.7 78.9c2.3 0 4.1 1.9 4.1 4.1 0 2.3-1.9 4.1-4.1 4.1" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<g class="earHair">
						<rect x="131" y="64" fill="#FFFFFF" width="20" height="35"/>
						<path d="M148.6 62.8c4.9 4.6 8.4 9.4 10.6 14.2-3.4-.1-6.8-.1-10.1.1 4 3.7 6.8 7.6 8.2 11.6-2.1 0-4.2 0-6.3.2 2.6 4.1 3.8 8.3 3.7 12.5-1.2-.7-3.4-1.4-5.2-1.9" fill="#fff" stroke="#3a5e77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
				</g>
				<path class="chin" d="M84.1 121.6c2.7 2.9 6.1 5.4 9.8 7.5l.9-4.5c2.9 2.5 6.3 4.8 10.2 6.5 0-1.9-.1-3.9-.2-5.8 3 1.2 6.2 2 9.7 2.5-.3-2.1-.7-4.1-1.2-6.1" fill="none" stroke="#3a5e77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
				<path class="face" fill="#DDF1FA" d="M134.5,46v35.5c0,21.815-15.446,39.5-34.5,39.5s-34.5-17.685-34.5-39.5V46"/>
				<path class="hair" fill="#FFFFFF" stroke="#3A5E77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M81.457,27.929 c1.755-4.084,5.51-8.262,11.253-11.77c0.979,2.565,1.883,5.14,2.712,7.723c3.162-4.265,8.626-8.27,16.272-11.235 c-0.737,3.293-1.588,6.573-2.554,9.837c4.857-2.116,11.049-3.64,18.428-4.156c-2.403,3.23-5.021,6.391-7.852,9.474"/>
				<g class="eyebrow">
					<path fill="#FFFFFF" d="M138.142,55.064c-4.93,1.259-9.874,2.118-14.787,2.599c-0.336,3.341-0.776,6.689-1.322,10.037 c-4.569-1.465-8.909-3.222-12.996-5.226c-0.98,3.075-2.07,6.137-3.267,9.179c-5.514-3.067-10.559-6.545-15.097-10.329 c-1.806,2.889-3.745,5.73-5.816,8.515c-7.916-4.124-15.053-9.114-21.296-14.738l1.107-11.768h73.475V55.064z"/>
					<path fill="#FFFFFF" stroke="#3A5E77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M63.56,55.102 c6.243,5.624,13.38,10.614,21.296,14.738c2.071-2.785,4.01-5.626,5.816-8.515c4.537,3.785,9.583,7.263,15.097,10.329 c1.197-3.043,2.287-6.104,3.267-9.179c4.087,2.004,8.427,3.761,12.996,5.226c0.545-3.348,0.986-6.696,1.322-10.037 c4.913-0.481,9.857-1.34,14.787-2.599"/>
				</g>
				<g class="eyeL">
					<circle cx="85.5" cy="78.5" r="3.5" fill="#3a5e77"/>
					<circle cx="84" cy="76" r="1" fill="#fff"/>
				</g>
				<g class="eyeR">
					<circle cx="114.5" cy="78.5" r="3.5" fill="#3a5e77"/>
					<circle cx="113" cy="76" r="1" fill="#fff"/>
				</g>
				<g class="mouth">
					<path class="mouthBG" fill="#617E92" d="M100.2,101c-0.4,0-1.4,0-1.8,0c-2.7-0.3-5.3-1.1-8-2.5c-0.7-0.3-0.9-1.2-0.6-1.8 c0.2-0.5,0.7-0.7,1.2-0.7c0.2,0,0.5,0.1,0.6,0.2c3,1.5,5.8,2.3,8.6,2.3s5.7-0.7,8.6-2.3c0.2-0.1,0.4-0.2,0.6-0.2 c0.5,0,1,0.3,1.2,0.7c0.4,0.7,0.1,1.5-0.6,1.9c-2.6,1.4-5.3,2.2-7.9,2.5C101.7,101,100.5,101,100.2,101z"/>
					<path style="display: none;" class="mouthSmallBG" fill="#617E92" d="M100.2,101c-0.4,0-1.4,0-1.8,0c-2.7-0.3-5.3-1.1-8-2.5c-0.7-0.3-0.9-1.2-0.6-1.8 c0.2-0.5,0.7-0.7,1.2-0.7c0.2,0,0.5,0.1,0.6,0.2c3,1.5,5.8,2.3,8.6,2.3s5.7-0.7,8.6-2.3c0.2-0.1,0.4-0.2,0.6-0.2 c0.5,0,1,0.3,1.2,0.7c0.4,0.7,0.1,1.5-0.6,1.9c-2.6,1.4-5.3,2.2-7.9,2.5C101.7,101,100.5,101,100.2,101z"/>
					<path style="display: none;" class="mouthMediumBG" d="M95,104.2c-4.5,0-8.2-3.7-8.2-8.2v-2c0-1.2,1-2.2,2.2-2.2h22c1.2,0,2.2,1,2.2,2.2v2 c0,4.5-3.7,8.2-8.2,8.2H95z"/>
					<path style="display: none;" class="mouthLargeBG" d="M100 110.2c-9 0-16.2-7.3-16.2-16.2 0-2.3 1.9-4.2 4.2-4.2h24c2.3 0 4.2 1.9 4.2 4.2 0 9-7.2 16.2-16.2 16.2z" fill="#617e92" stroke="#3a5e77" stroke-linejoin="round" stroke-width="2.5"/>
					<defs>
						<path id="mouthMaskPath" d="M100.2,101c-0.4,0-1.4,0-1.8,0c-2.7-0.3-5.3-1.1-8-2.5c-0.7-0.3-0.9-1.2-0.6-1.8 c0.2-0.5,0.7-0.7,1.2-0.7c0.2,0,0.5,0.1,0.6,0.2c3,1.5,5.8,2.3,8.6,2.3s5.7-0.7,8.6-2.3c0.2-0.1,0.4-0.2,0.6-0.2 c0.5,0,1,0.3,1.2,0.7c0.4,0.7,0.1,1.5-0.6,1.9c-2.6,1.4-5.3,2.2-7.9,2.5C101.7,101,100.5,101,100.2,101z"/>
					</defs>
					<clipPath id="mouthMask">
						<use xlink:href="#mouthMaskPath" overflow="visible"/>
					</clipPath>
					<g clip-path="url(#mouthMask)">
						<g class="tongue">
							<circle cx="100" cy="107" r="8" fill="#cc4a6c"/>
							<ellipse class="tongueHighlight" cx="100" cy="100.5" rx="3" ry="1.5" opacity=".1" fill="#fff"/>
						</g>
					</g>
					<path clip-path="url(#mouthMask)" class="tooth" style="fill:#FFFFFF;" d="M106,97h-4c-1.1,0-2-0.9-2-2v-2h8v2C108,96.1,107.1,97,106,97z"/>
					<path class="mouthOutline" fill="none" stroke="#3A5E77" stroke-width="2.5" stroke-linejoin="round" d="M100.2,101c-0.4,0-1.4,0-1.8,0c-2.7-0.3-5.3-1.1-8-2.5c-0.7-0.3-0.9-1.2-0.6-1.8 c0.2-0.5,0.7-0.7,1.2-0.7c0.2,0,0.5,0.1,0.6,0.2c3,1.5,5.8,2.3,8.6,2.3s5.7-0.7,8.6-2.3c0.2-0.1,0.4-0.2,0.6-0.2 c0.5,0,1,0.3,1.2,0.7c0.4,0.7,0.1,1.5-0.6,1.9c-2.6,1.4-5.3,2.2-7.9,2.5C101.7,101,100.5,101,100.2,101z"/>
				</g>
				<path class="nose" d="M97.7 79.9h4.7c1.9 0 3 2.2 1.9 3.7l-2.3 3.3c-.9 1.3-2.9 1.3-3.8 0l-2.3-3.3c-1.3-1.6-.2-3.7 1.8-3.7z" fill="#3a5e77"/>
				<g class="arms" clip-path="url(#armMask)">
					<g class="armL">
						<path fill="#ddf1fa" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5" d="M121.3 97.4L111 58.7l38.8-10.4 20 36.1z"/>
						<path fill="#ddf1fa" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5" d="M134.4 52.5l19.3-5.2c2.7-.7 5.4.9 6.1 3.5.7 2.7-.9 5.4-3.5 6.1L146 59.7M160.8 76.5l19.4-5.2c2.7-.7 5.4.9 6.1 3.5.7 2.7-.9 5.4-3.5 6.1l-18.3 4.9M158.3 66.8l23.1-6.2c2.7-.7 5.4.9 6.1 3.5.7 2.7-.9 5.4-3.5 6.1l-23.1 6.2M150.9 58.4l26-7c2.7-.7 5.4.9 6.1 3.5.7 2.7-.9 5.4-3.5 6.1l-21.3 5.7"/>
						<path fill="#a9ddf3" d="M178.8 74.7l2.2-.6c1.1-.3 2.2.3 2.4 1.4.3 1.1-.3 2.2-1.4 2.4l-2.2.6-1-3.8zM180.1 64l2.2-.6c1.1-.3 2.2.3 2.4 1.4.3 1.1-.3 2.2-1.4 2.4l-2.2.6-1-3.8zM175.5 54.9l2.2-.6c1.1-.3 2.2.3 2.4 1.4.3 1.1-.3 2.2-1.4 2.4l-2.2.6-1-3.8zM152.1 49.4l2.2-.6c1.1-.3 2.2.3 2.4 1.4.3 1.1-.3 2.2-1.4 2.4l-2.2.6-1-3.8z"/>
						<path fill="#fff" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M123.5 96.8c-41.4 14.9-84.1 30.7-108.2 35.5L1.2 80c33.5-9.9 71.9-16.5 111.9-21.8"/>
						<path fill="#fff" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M108.5 59.4c7.7-5.3 14.3-8.4 22.8-13.2-2.4 5.3-4.7 10.3-6.7 15.1 4.3.3 8.4.7 12.3 1.3-4.2 5-8.1 9.6-11.5 13.9 3.1 1.1 6 2.4 8.7 3.8-1.4 2.9-2.7 5.8-3.9 8.5 2.5 3.5 4.6 7.2 6.3 11-4.9-.8-9-.7-16.2-2.7M94.5 102.8c-.6 4-3.8 8.9-9.4 14.7-2.6-1.8-5-3.7-7.2-5.7-2.5 4.1-6.6 8.8-12.2 14-1.9-2.2-3.4-4.5-4.5-6.9-4.4 3.3-9.5 6.9-15.4 10.8-.2-3.4.1-7.1 1.1-10.9M97.5 62.9c-1.7-2.4-5.9-4.1-12.4-5.2-.9 2.2-1.8 4.3-2.5 6.5-3.8-1.8-9.4-3.1-17-3.8.5 2.3 1.2 4.5 1.9 6.8-5-.6-11.2-.9-18.4-1 2 2.9.9 3.5 3.9 6.2"/>
					</g>
					<g class="armR">
						<path fill="#ddf1fa" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5" d="M265.4 97.3l10.4-38.6-38.9-10.5-20 36.1z"/>
						<path fill="#ddf1fa" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5" d="M252.4 52.4L233 47.2c-2.7-.7-5.4.9-6.1 3.5-.7 2.7.9 5.4 3.5 6.1l10.3 2.8M226 76.4l-19.4-5.2c-2.7-.7-5.4.9-6.1 3.5-.7 2.7.9 5.4 3.5 6.1l18.3 4.9M228.4 66.7l-23.1-6.2c-2.7-.7-5.4.9-6.1 3.5-.7 2.7.9 5.4 3.5 6.1l23.1 6.2M235.8 58.3l-26-7c-2.7-.7-5.4.9-6.1 3.5-.7 2.7.9 5.4 3.5 6.1l21.3 5.7"/>
						<path fill="#a9ddf3" d="M207.9 74.7l-2.2-.6c-1.1-.3-2.2.3-2.4 1.4-.3 1.1.3 2.2 1.4 2.4l2.2.6 1-3.8zM206.7 64l-2.2-.6c-1.1-.3-2.2.3-2.4 1.4-.3 1.1.3 2.2 1.4 2.4l2.2.6 1-3.8zM211.2 54.8l-2.2-.6c-1.1-.3-2.2.3-2.4 1.4-.3 1.1.3 2.2 1.4 2.4l2.2.6 1-3.8zM234.6 49.4l-2.2-.6c-1.1-.3-2.2.3-2.4 1.4-.3 1.1.3 2.2 1.4 2.4l2.2.6 1-3.8z"/>
						<path fill="#fff" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M263.3 96.7c41.4 14.9 84.1 30.7 108.2 35.5l14-52.3C352 70 313.6 63.5 273.6 58.1"/>
						<path fill="#fff" stroke="#3a5e77" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M278.2 59.3l-18.6-10 2.5 11.9-10.7 6.5 9.9 8.7-13.9 6.4 9.1 5.9-13.2 9.2 23.1-.9M284.5 100.1c-.4 4 1.8 8.9 6.7 14.8 3.5-1.8 6.7-3.6 9.7-5.5 1.8 4.2 5.1 8.9 10.1 14.1 2.7-2.1 5.1-4.4 7.1-6.8 4.1 3.4 9 7 14.7 11 1.2-3.4 1.8-7 1.7-10.9M314 66.7s5.4-5.7 12.6-7.4c1.7 2.9 3.3 5.7 4.9 8.6 3.8-2.5 9.8-4.4 18.2-5.7.1 3.1.1 6.1 0 9.2 5.5-1 12.5-1.6 20.8-1.9-1.4 3.9-2.5 8.4-2.5 8.4"/>
					</g>				
				</g>
			</svg>
		</div>
	</div>
	
	<div class="inputGroup inputGroup1">
		<label for="email1">Email</label>
		<input type="text" id="email" name="email" class="email" maxlength="256" required />
		<p class="helper helper1">email@domain.com</p>
		<span class="indicator"></span>
	</div>
	<div class="inputGroup inputGroup2">
		<label for="password">Password</label>
		<input type="password" id="password" name="password" class="password" required />
	</div>
	<div class="inputGroup inputGroup3">
		<button id="login" name = "l_submit" value = "submit" type="submit">Log in</button>
	</div>	
</form>
</div>

	<div class = "main-body">
		<?php echo $lmsg; ?>
		<div class="container pad-tb ">
		<div class="row">
		<!--sidebar-->
			<div class="col-md-2 ">
				<nav class="main-menu shadow">
					<ul>
						<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) ) { ?>
						<li class="sidebar_msg">
							<a href="index.php"><i class="fa fa-envelope-o fa-2x"><span class="badge badge-danger badge-counter"><?php echo $noOfFeed; ?></span></i>
								<span class="nav-text">Message</span>
							</a>
						</li>
					<?php } ?>
						
						<li class="">
							<i class="fa  fa-2x"></i>
							<span class="nav-text">POSTS</span>
						</li>

						<li class="has-subnav">
							<a href="home.php"><i class="fa fa-font fa-2x"></i>
								<span class="nav-text">Q & A</span>
							</a>
						</li>

						<li class="has-subnav active">
							<a href="home_vid.php"><i class="fa fa-video-camera fa-2x"></i>
								<span class="nav-text">Video</span>
							</a>
						</li>
						
						<li class="sidebar_topic">
							<i class="fa  fa-2x"></i>
							<span class="nav-text">TOPICS</span>
						</li>

						<li class="has-subnav">
							<a href=topic_vid.php?topic=PHYSICS><i class="fa fa-superpowers fa-2x"></i>
								<span class="nav-text">Physics</span>
							</a>
						</li>

						<li class="has-subnav">
							<a href=topic_vid.php?topic=CHEMISTRY><i class="fa fa-flask fa-2x"></i>
								<span class="nav-text">Chemistry</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=MATH><i class="fa fa-calculator fa-2x"></i>
								<span class="nav-text">Math</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=BIOLOGY><i class="fa fa-heartbeat fa-2x"></i>
								<span class="nav-text">Biology</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=BENGALI><i class="fa fa-language fa-2x"></i>
								<span class="nav-text">Bengali</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=ENGLISH><i class="fa fa-info fa-2x"></i>
								<span class="nav-text">English</span>
							</a>
						</li>
						<li class="has-subnav">
							<a href=topic_vid.php?topic=ICT><i class="fa fa-code fa-2x"></i>
								<span class="nav-text">ICT</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=CSE><i class="fa fa-laptop fa-2x"></i>
								<span class="nav-text">CSE</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=EEE><i class="fa fa-bolt fa-2x"></i>
								<span class="nav-text">EEE</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=CE><i class="fa fa-building-o fa-2x"></i>
								<span class="nav-text">CE</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=ARCHITECTURE><i class="fa fa-university fa-2x"></i>
								<span class="nav-text">Architecture</span>
							</a>
						</li>
						
						<li class="has-subnav">
							<a href=topic_vid.php?topic=MPE><i class="fa fa-industry fa-2x"></i>
								<span class="nav-text">MPE</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=ME><i class="fa fa-cogs fa-2x"></i>
								<span class="nav-text">ME</span>
							</a>
						</li>

						<li>
							<a href=topic_vid.php?topic=OTHER><i class="fa fa-table fa-2x"></i>
								<span class="nav-text">Other</span>
							</a>
						</li>

					</ul>

					<ul class="logout">
						<li href="">
							<a href="feedback.php">
								<i class="fa fa-rss fa-2x"></i>
								<span class="nav-text">
									Feedback
								</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			
			<!--post-->			
			<div class="col-md-7">
			
				<?php while($vid_row = mysqli_fetch_row($vid_result)){ 
					$vid_id = $vid_row[0];
					$vid_u_id = $vid_row[1];
					$vid_username=$vid_row[2];
					$vid_topic=$vid_row[3];
					$vid_title=$vid_row[4];
					$vid_name=$vid_row[5];
					$vid_datetime=$vid_row[6];
					
					$vid_com_sql = "SELECT * FROM video_comment WHERE video_id=$vid_id";
					$vid_com_result = mysqli_query($vid_link,$vid_com_sql) or die(mysqli_error($vid_link));

					$noOfCom = mysqli_num_rows($vid_com_result);
				?>
					
					<div class="card shadow mb-4">
						<div class="text-post">
							<div class="card-header py-3">
								<button class="posts text-primary">TUTORIAL </button>
								<button class="posts text-primary"><?php echo $vid_topic; ?> </button>
							</div>
							<div class="card-body">
								<div class="heading">
									
										<img class="img-valign" src="assets/images/account_icon.png">
										<span class="text-primary"><?php echo $vid_username; ?></span>
										
										<div>
											<?php echo $vid_datetime; ?>
										</div>
								</div>
								<div class="p-title">
									<?php echo $vid_title; ?>
								</div>
								<div class="p-text line-space">
									<?php echo "<video style='width:100%;' controls>
																<source src='assets/uploads/" .$vid_name." 'type='video/mp4'>
																</video>"; ?>
								</div>
							</div>
							<div class="p-footer">
							<?php if( isset($_SESSION['username']))
								{
							?>
								<div class="row">
									<div class="col-md-2" style="margin-left:3%;">
										<div class="post-info">
											<!-- if user likes post, style button differently -->
		
											<i <?php if (userLiked($vid_id)): ?>
												  class="fa fa-thumbs-up like-btn"
											  <?php else: ?>
												  class="fa fa-thumbs-o-up like-btn"
											  <?php endif ?>
											  data-id="<?php echo $vid_id ?>"></i>
											<span class="likes"><?php echo getLikes($vid_id); ?></span>
											
											&nbsp;&nbsp;&nbsp;&nbsp;

											<!-- if user dislikes post, style button differently -->
											<i 
											  <?php if (userDisliked($vid_id)): ?>
												  class="fa fa-thumbs-down dislike-btn"
											  <?php else: ?>
												  class="fa fa-thumbs-o-down dislike-btn"
											  <?php endif ?>
											  data-id="<?php echo $vid_id ?>"></i>
											<span class="dislikes"><?php echo getDislikes($vid_id); ?></span>
										  </div>
									</div>
									<div class="col-md-5">
										<a href=view_vid.php?vid_id=<?php echo $vid_id; ?>><button class="trans"><span><i class="fa fa-comment"></i></span>
										comment (<?php echo $noOfCom; ?>)</button></a>
									</div>
									
									<?php if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
										&& $vid_u_id == $_SESSION['u_id'] || $admin_check == true) { ?>
										<div class="col-md-3 edit_dlt ml-auto">
											<a href=edit_vid.php?vid_id=<?php echo $vid_id; ?>><button class="trans"><span><i class="fa fa-pencil-square-o"></i></span>
											</button></a>
											<a href=delete_vid.php?vid_id=<?php echo $vid_id; ?>><button class="trans"><span><i class="fa fa-trash"></i></span>
											</button></a>
										</div>
									<?php } ?>
									
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php mysqli_close($vid_link); ?>
			</div>
			
			<?php if( isset($_SESSION['username']))
				{
			?>
			<!--create post-->
			<div class="col-md-3">
				<div class="p-create shadow">
					<img class="cover-pic" src="assets/images/covers.jpg">
					<div class="cover-text line-space" >
						Ask away anything you want, upload tutorials to help others or if you don't feel like it just come and 
						hangout with others in the community
					</div>
					<div class="buttons">
						<a href="qa.php"><button class="btn btn-info p-btn effect6">ASK A QUESTION</button></a>
						<?php if($_SESSION['$urating']>500){ ?>
						<a href="video_upload.php"><button class="btn btn-outline-primary t-btn effect6">UPLOAD A TUTORIAL</button></a>
						<?php } ?>
					</div>
				</div>
				
				<!--profile-->
				<div class="profile shadow">
					<img class="profile-pic img-valign" src="assets/images/circle.gif">
					<span class="p-head"><?php echo $_SESSION['username'] ?></span>
					<div class="tags">
						<?php if($_SESSION['$urating']>500) { ?>
						<button class="p-tag">TEACHER</button>
						<?php }elseif($_SESSION['$urating']>300) { ?>
						<button class="p-tag">ASSISTANT</button>
						<?php }elseif($_SESSION['$urating']>200) { ?>
						<button class="p-tag">AMATEUR</button>
						<?php }elseif($_SESSION['$urating']>100) { ?>
						<button class="p-tag">NOVICE</button>
						<?php }else { ?>
						<button class="p-tag">WHO ARE YOU?</button>
						<?php } ?>
						<?php if(isset($_SESSION['admin'])) { ?>
						<button class="p-tag">MODERATOR</button>
						<?php } ?>
					</div>
					<div class= "rating">
						<span class="p-head">RATING: </span>
						<span class="p-head"><?php echo $_SESSION['$urating']; ?></span>
					</div>
				</div>
				<?php } ?>
				
			</div>
			
		</div>
	</div>
	</div>
	

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	

  <script src="assets/js/TweenMax.min.js"></script>

<script src="assets/js/login.js"></script>
<script src="assets/js/login2.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

// if the user clicks on the like button ...
$('.like-btn').on('click', function(){
  var post_id = $(this).data('id');
  var us_id =<?php echo $_SESSION['u_id']; ?>;
  $clicked_btn = $(this);
  if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
  	action = 'like';
  } else if($clicked_btn.hasClass('fa-thumbs-up')){
  	action = 'unlike';
  }
  $.ajax({
  	url: 'vid_server.php',
  	type: 'post',
  	data: {
		'us_id': us_id,
  		'action': action,
  		'post_id': post_id
  	},
  	success: function(data){
  		res = JSON.parse(data);
  		if (action == "like") {
  			$clicked_btn.removeClass('fa-thumbs-o-up');
  			$clicked_btn.addClass('fa-thumbs-up');
  		} else if(action == "unlike") {
  			$clicked_btn.removeClass('fa-thumbs-up');
  			$clicked_btn.addClass('fa-thumbs-o-up');
  		}
  		// display the number of likes and dislikes
  		$clicked_btn.siblings('span.likes').text(res.likes);
  		$clicked_btn.siblings('span.dislikes').text(res.dislikes);

  		// change button styling of the other button if user is reacting the second time to post
  		$clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
  	}
  });		

});

// if the user clicks on the dislike button ...
$('.dislike-btn').on('click', function(){
  var post_id = $(this).data('id');
  var us_id =<?php echo $_SESSION['u_id']; ?>;
  $clicked_btn = $(this);
  if ($clicked_btn.hasClass('fa-thumbs-o-down')) {
  	action = 'dislike';
  } else if($clicked_btn.hasClass('fa-thumbs-down')){
  	action = 'undislike';
  }
  $.ajax({
  	url: 'vid_server.php',
  	type: 'post',
  	data: {
		'us_id': us_id,
  		'action': action,
  		'post_id': post_id
  	},
  	success: function(data){
  		res = JSON.parse(data);
  		if (action == "dislike") {
  			$clicked_btn.removeClass('fa-thumbs-o-down');
  			$clicked_btn.addClass('fa-thumbs-down');
  		} else if(action == "undislike") {
  			$clicked_btn.removeClass('fa-thumbs-down');
  			$clicked_btn.addClass('fa-thumbs-o-down');
  		}
  		// display the number of likes and dislikes
  		$clicked_btn.siblings('span.likes').text(res.likes);
  		$clicked_btn.siblings('span.dislikes').text(res.dislikes);
  		
  		// change button styling of the other button if user is reacting the second time to post
  		$clicked_btn.siblings('i.fa-thumbs-up').removeClass('fa-thumbs-up').addClass('fa-thumbs-o-up');
  	}
  });	

});

});
  
  
  </script>
</body>

</html>