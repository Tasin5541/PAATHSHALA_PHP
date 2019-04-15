<?php
include 'login_check.php';
$reply_div="";
$par_comment_id="99";
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
	<link rel="stylesheet" href="assets/css/comment.css">
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
                <form class="form-inline my-auto d-inline flex-grow-1" target="_self">
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
						<li class="nav-item ">
							<img src="assets/images/circle.gif" alt="Logo" style="width:33px;">
						</li>
						<?php echo $name; ?>
						<li class="nav-item dropdown">
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
		<input type="text" id="email" class="email" maxlength="256"/>
		<p class="helper helper1">email@domain.com</p>
		<span class="indicator"></span>
	</div>
	<div class="inputGroup inputGroup2">
		<label for="password">Password</label>
		<input type="password" id="password" class="password" />
	</div>
	<div class="inputGroup inputGroup3">
		<button id="login" name = "l_submit" value = "submit" type="submit">Log in</button>
	</div>	
</form>
</div>

<?php 
	$user_id=$_SESSION['u_id'];
	include('server.php');
    include('com_server.php'); 
?>
	<div class = "main-body">
		<div class="container pad-tb ">
		<div class="row">
			<!--post-->
			<div class="col-md-8">
				<?php
				include 'view_post_code.php';
				?>
				<?php while($qa_row = mysqli_fetch_row($qa_result)){ 
					$qa_id = $qa_row[0];
					$qa_u_id = $qa_row[1];
					$qa_username=$qa_row[2];
					$qa_topic=$qa_row[3];
					$qa_title=$qa_row[4];
					$qa_brief=$qa_row[5];
					$qa_datetime=$qa_row[6];
				?>
					
					<div class="card shadow mb-4 no_scroll">
						<div class="text-post">
							<div class="card-header py-3">
								<button class="posts text-primary">Q&A </button>
								<button class="posts text-primary"><?php echo $qa_topic; ?> </button>
							</div>
							<div class="card-body">
								<div class="heading">
									
										<img class="img-valign" src="assets/images/account_icon.png">
										<span class="text-primary"><?php echo $qa_username; ?></span>
										
										<div>
											<?php echo $qa_datetime; ?>
										</div>
								</div>
								<div class="p-title">
									<?php echo $qa_title; ?>
								</div>
								<div class="p-text line-space">
									<?php echo $qa_brief; ?>
								</div>
							</div>
							<div class="p-footer">
								<div class="row">
									<div class="col-md-2" style="margin-left:3%;">
										<div class="post-info">
											<!-- if user likes post, style button differently -->
		
											<i <?php if (userLiked($qa_id)): ?>
												  class="fa fa-thumbs-up like-btn"
											  <?php else: ?>
												  class="fa fa-thumbs-o-up like-btn"
											  <?php endif ?>
											  data-id="<?php echo $qa_id ?>"></i>
											<span class="likes"><?php echo getLikes($qa_id); ?></span>
											
											&nbsp;&nbsp;&nbsp;&nbsp;

											<!-- if user dislikes post, style button differently -->
											<i 
											  <?php if (userDisliked($qa_id)): ?>
												  class="fa fa-thumbs-down dislike-btn"
											  <?php else: ?>
												  class="fa fa-thumbs-o-down dislike-btn"
											  <?php endif ?>
											  data-id="<?php echo $qa_id ?>"></i>
											<span class="dislikes"><?php echo getDislikes($qa_id); ?></span>
										  </div>
									</div>
									<div class="col-md-5">
										<a href=view_post.php?qa_id=<?php echo $qa_id; ?>><button class="trans"><span><i class="fa fa-comment"></i></span>
										comment</button></a>
									</div>
									
									<?php if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
										&& $qa_u_id == $_SESSION['u_id'] || $admin_check == true) { ?>
										<div class="col-md-3 edit_dlt ml-auto">
											<a href=edit_qa.php?qa_id=<?php echo $qa_id; ?>><button class="trans"><span><i class="fa fa-pencil-square-o"></i></span>
											</button></a>
											<a href=delete_qa.php?qa_id=<?php echo $qa_id; ?>><button class="trans"><span><i class="fa fa-trash"></i></span>
											</button></a>
										</div>
									<?php } ?>
									
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				
			</div>
			
			<!--comment section-->
			<div class="col-md-4">
				<div class="comment shadow">
					<div class="c-mid">
						<div class="status-upload">
							<form method="post" action="" onsubmit="return post();" id="">
								<textarea id="comment" placeholder="Write a comment" ></textarea>
								<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> COMMENT</button>
							</form>
						</div><!-- Status Upload  -->
						<div class="line">
						</div>
						
									<?php
									$reply_div="";

if(!empty($_POST['1st_reply']))
{
	$par_comment_id=$_POST['1st_reply'];
	$reply_div = '<div class="row reply">
											<form method="post" action="" onsubmit="return post_reply();" id="">
												<textarea id="reply" placeholder="Write a reply" ></textarea>
												<button type="submit" id="reply_btn" class="trans"><span><i class="fa fa-comment"></i></span>
												reply</button>
												
											</form>
											
											
										</div>';
}
else{
	$reply_div="";
}
?>
									
									<?php echo $reply_div; ?>
						
						<!--comments-->
						<div class="c_section" id="all_comments">
						
						
							<?php
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "paathshala";


							$conn = new mysqli($servername, $username, $password, $dbname);
							$sql = "SELECT comment_id, comment,username FROM comments where parent_comment_id = 0 and post_id = '$qa_id' order by comment_id desc";
  
							$result = $conn->query($sql);
							while($row = $result->fetch_assoc()) {
    
							
							$comment=$row['comment'];
							$comment_id=$row['comment_id'];
							$com_username=$row['username'];
							
							?>
							<div class="row mb_10">
								<div class="col-md-2">
									<img class="c_img" src="assets/images/account_icon.png">
								</div>
								<div class="col-md-9 ">
									<div class="c_section_right">
										<p class="c_name"><?php echo $com_username;?>
										<p> <?php echo $comment;?>
									</div>
									
									
									<div class="row">
										<div class="col-md-5">
											<div class="com-info">
											<!-- if user likes post, style button differently -->
		
											<i <?php if (com_userLiked($comment_id)): ?>
												  class="fa fa-thumbs-up com_like-btn"
											  <?php else: ?>
												  class="fa fa-thumbs-o-up com_like-btn"
											  <?php endif ?>
											  data-com_id="<?php echo $comment_id ?>"></i>
											<span class="likes"><?php echo com_getLikes($comment_id); ?></span>
											
											&nbsp;&nbsp;&nbsp;&nbsp;

											<!-- if user dislikes post, style button differently -->
											<i 
											  <?php if (com_userDisliked($comment_id)): ?>
												  class="fa fa-thumbs-down com_dislike-btn"
											  <?php else: ?>
												  class="fa fa-thumbs-o-down com_dislike-btn"
											  <?php endif ?>
											  data-com_id="<?php echo $comment_id ?>"></i>
											<span class="dislikes"><?php echo com_getDislikes($comment_id); ?></span>
										  </div>
										</div>
										<div class="col-md-5 com-info">
											<button class="trans rep" name="init_reply" value="<?php echo $comment_id ?>"><span><i class="fa fa-comment"></i></span>
											<a>reply</a></button>
										</div>
										<form class="comment_reply" data-id="" onsubmit="return post_reply();" method="post" action="">
											<input type="hidden" class="hidden" value="" class="post_id">
											<textarea class="form-control reply_box" rows="3" name="post_rep" class="post_rep"></textarea>
											<button type="submit" class="btn btn-primary" class="post_rep_sub">Reply</button>
										</form>
									</div>
									
									<!--ekhane kaj-->
										
										
										
										<div class="row" id="all_reply">
										
											<?php
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbname = "paathshala";
											


											$connec = new mysqli($servername, $username, $password, $dbname);
											$rp_sql = "SELECT comment_id, comment,username FROM comments where  parent_comment_id= '$comment_id' order by comment_id desc";
	  
											$result1 = $connec->query($rp_sql);
											while($row1 = $result1->fetch_assoc()) {
		
								                $rep_com_id=$row1['comment_id'];
												$reply=$row1['comment'];
												$rep_username=$row1['username'];									

											?>
											
											<div class="col-md-2">
												<img class="c_img" src="assets/images/account_icon.png">
											</div>
											<div class="col-md-10 ">
												<div class="c_section_right">
													<p class="c_name"><?php echo $rep_username;?>
													<p>  <?php echo $reply;?>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="com-info">
															<!-- if user likes post, style button differently -->
						
															<i <?php if (com_userLiked($rep_com_id)): ?>
																  class="fa fa-thumbs-up com_like-btn"
															  <?php else: ?>
																  class="fa fa-thumbs-o-up com_like-btn"
															  <?php endif ?>
															  data-com_id="<?php echo $rep_com_id ?>"></i>
															<span class="likes"><?php echo com_getLikes($rep_com_id); ?></span>
															
															&nbsp;&nbsp;&nbsp;&nbsp;

															<!-- if user dislikes post, style button differently -->
															<i 
															  <?php if (com_userDisliked($rep_com_id)): ?>
																  class="fa fa-thumbs-down com_dislike-btn"
															  <?php else: ?>
																  class="fa fa-thumbs-o-down com_dislike-btn"
															  <?php endif ?>
															  data-com_id="<?php echo $rep_com_id ?>"></i>
															<span class="dislikes"><?php echo com_getDislikes($rep_com_id); ?></span>
														</div>
													
													</div>
													
												</div>
											</div>
											<?php
											}
											?>
										</div>
															
								</div>
								
							</div>
							<?php
								}
							 ?>
							 
						</div>
						
						
						
						
						
					

						
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	

  <script src="assets/js/TweenMax.min.js"></script>
  <script type="text/javascript">
  var par_com_id;
	$(document).ready(function(){
  $(document).on('click' , 'button.rep' , function(){
	  par_com_id = $(this).val();
     var closestDiv = $(this).closest('div'); // also you can use $(this).parent()
     //closestDiv.fadeOut();
     $('.comment_reply').not(closestDiv.next('.comment_reply')).hide();
     //$('.rep').closest('div').not(closestDiv).show()
     closestDiv.next('form.comment_reply').slideToggle(100);
  });
});
</script>
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
  	url: 'server.php',
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
  	url: 'server.php',
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
    <script type="text/javascript">
	$(document).ready(function(){

// if the user clicks on the like button ...
$('.com_like-btn').on('click', function(){

  var comment_id = $(this).data('com_id');
  var us_id =<?php echo $_SESSION['u_id']; ?>;
  $com_clicked_btn = $(this);
  if ($com_clicked_btn.hasClass('fa-thumbs-o-up')) {
  	action = 'like';
  } else if($com_clicked_btn.hasClass('fa-thumbs-up')){
  	action = 'unlike';
  }
  $.ajax({
  	url: 'com_server.php',
  	type: 'post',
  	data: {
		'us_id': us_id,
  		'action': action,
  		'comment_id': comment_id
  	},
  	success: function(data){
  		com_res = JSON.parse(data);
  		if (action == "like") {
  			$com_clicked_btn.removeClass('fa-thumbs-o-up');
  			$com_clicked_btn.addClass('fa-thumbs-up');
  		} else if(action == "unlike") {
  			$com_clicked_btn.removeClass('fa-thumbs-up');
  			$com_clicked_btn.addClass('fa-thumbs-o-up');
  		}
  		// display the number of likes and dislikes
  		$com_clicked_btn.siblings('span.likes').text(com_res.likes);
  		$com_clicked_btn.siblings('span.dislikes').text(com_res.dislikes);

  		// change button styling of the other button if user is reacting the second time to post
  		$com_clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
  	}
  });		

});

// if the user clicks on the dislike button ...
$('.com_dislike-btn').on('click', function(){
  var comment_id = $(this).data('com_id');
  var us_id = <?php echo $_SESSION['u_id']; ?>;
  $com_clicked_btn = $(this);
  if ($com_clicked_btn.hasClass('fa-thumbs-o-down')) {
  	action = 'dislike';
  } else if($com_clicked_btn.hasClass('fa-thumbs-down')){
  	action = 'undislike';
  }
  $.ajax({
  	url: 'com_server.php',
  	type: 'post',
  	data: {
		'us_id': us_id,
  		'action': action,
  		'comment_id': comment_id
  	},
  	success: function(data){
  		com_res = JSON.parse(data);
  		if (action == "dislike") {
  			$com_clicked_btn.removeClass('fa-thumbs-o-down');
  			$com_clicked_btn.addClass('fa-thumbs-down');
  		} else if(action == "undislike") {
  			$com_clicked_btn.removeClass('fa-thumbs-down');
  			$com_clicked_btn.addClass('fa-thumbs-o-down');
  		}
  		// display the number of likes and dislikes
  		$com_clicked_btn.siblings('span.likes').text(com_res.likes);
  		$com_clicked_btn.siblings('span.dislikes').text(com_res.dislikes);
  		
  		// change button styling of the other button if user is reacting the second time to post
  		$com_clicked_btn.siblings('i.fa-thumbs-up').removeClass('fa-thumbs-up').addClass('fa-thumbs-o-up');
  	}
  });	

});

});
	</script>
<script src="assets/js/login.js"></script>
<script src="assets/js/login2.js"></script>
<script type="text/javascript">
function post()
{
  var comment = document.getElementById("comment").value;
  var post_id = <?php echo $qa_id; ?>;
   var u_id = <?php echo $_SESSION['u_id']; ?>;
 
  if(comment)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comment.php',
      data: 
      {
         user_comm:comment,
		 post_id : post_id,
		 'u_id': u_id
	     
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
        location.reload(true);
  
      }
    });
  }
  
  return false;
}

function post_reply()
{
  var x = document.getElementsByName("post_rep");
  var reply;
  var i;
	for (i = 0; i < x.length; i++) {
	  if (x[i].value != "") {
		reply=x[i].value;
	  }
}
  var com_id = par_com_id;
  var u_id = <?php echo $_SESSION['u_id']; ?>;
  if(reply)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_reply.php',
      data: 
      {
         user_rep:reply,
		 com_id:com_id,
		 'u_id': u_id
	     
      },
      success: function (response) 
      {
		  //location.reload();
	    //document.getElementById("all_reply").innerHTML=response+document.getElementById("all_reply").innerHTML;
	    document.getElementById("reply").value="";
		document.getElementById("com_id").value="";
		
  //location.reload();
      },
	  success: function() {
  location.reload();
}
    });
  }
  
  return false;
}

</script>
</body>

</html>