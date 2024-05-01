<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	</head>
	<style>
		.card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border:4px #8470e8 solid;
			border-radius:15px;	
		}
		.body{
			background-image: url("img/4.jpeg");
			background-size: cover;
			
		}
	</style>
	<body class="body">
		<section class="sec">
			<div class="card">
				<div class="row">
					<div class="col-md-12">
						<h3>Admin Login</h3>
	<?php session_start();
		if(isset($_SESSION['error'])){
			echo $_SESSION['error'];
			unset($_SESSION['error']);
			}
	?>
					<form action="process.php" method="post">
						<div class="form-group">
							<input required type="text" class="form-control" name="username" placeholder="Your Email *" value="" />
						</div>
						<div class="form-group">
							<input required type="password" class="form-control" name="password" placeholder="Your Password *" value="" />
						</div>
						<div class="form-group">
							<input required type="submit" class="magnifyBtn" value="Login"/>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</section>
	
	</body>
	</html>

