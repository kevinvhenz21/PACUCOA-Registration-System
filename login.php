<?php include('config/connection.php');
		session_start();
		if(isset($_SESSION['p_user_id'])){
				header("location: pages/main.php");
		}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vrickt Dynamics</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <script src="libraries/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="libraries/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="libraries/font-awesome/css/font-awesome.min.css"> 

   <link rel="stylesheet" href="libraries/fontawesome2/web-fonts-with-css/css/fontawesome-all.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/style.css">


   <link rel="icon" href="dist/img/logo/logo_small.png"> 
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.css">


  
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-box-body">
   
  <div class="login-logo">
    <a href="login.php"><img src="dist/img/logo/login_logo.png" style=height:auto;max-width:100%;max-height:170px;width:auto></a>
  </div>
   
    <form action="" method="POST">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
		<div class="col-sm-2">
		</div>
        <div class="col-sm-8" align="center">
          <button type="submit" name="login_user" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
		<div class="col-sm-2">
		</div>
      </div>
	  <br>
	  <div align="center">
		Copyright © 2018 Lyceum of the Philippines University - Manila | Powered by ICT Department | All rights reserved
	  </div>
    </form>
	
  </div>
</div>
</body>
</html>
<?php
	  if (isset($_POST['login_user'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$username=mysqli_real_escape_string($conn, $username);
		$password=mysqli_real_escape_string($conn, $password);
		$pass = md5($password);
		
		$sql = "select * from tbl_users where username='$username' AND password='$password' AND status = '1'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_num_rows($result);
		
			if($row > 0){
					$data=mysqli_fetch_assoc($result);
					$userid = $data['id'];
					$name = $data['name'];
					$password = $data['password'];
					$stat = $data['status'];

					
					$_SESSION['p_user_id']=$userid;
					$_SESSION['p_user']=$username;
					$_SESSION['p_password']=$password;
					$_SESSION['p_name']=$name;
					header("location:pages/main.php");
			}

			else{
					echo '<script>alert("Invalid Username and Password")</script>';		
			}
			mysqli_close($conn);
		}

?>
