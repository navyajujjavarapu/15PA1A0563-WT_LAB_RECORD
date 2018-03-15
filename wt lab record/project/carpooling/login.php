<?php
        session_start();
        require 'cofigure.php';
?>

<html>
<head>
    <link rel="stylesheet" type=text/css href="login.css" />
</head>
<body>
<div class='a'>
      <h1 style="color:white">CAR POOLING</h1>
      <ul class="h" type="none">
      <li><a class="s" href="Login">Login </a></li>
      <!--<li><a class="s" href="Register">Register </a></li>-->
      <li><a class="s" href="home.php">Home </a></li>
      </ul>
    </div>
	<div>
<center>
  <pre>
    <div class="one">
	<h1>Login</h1>
    <form action= "login.php" method="POST">
     <b>Username:</b><input type="text"  class="t" name="username"/><br/>
     <b>Password:</b><input type="password"  class="t" name="password"/><br/></br>
     <input class="two" type="submit" value=" login      " name="login"/><br></br>
       <a href="register.php"><input class="three" type="button" value="   register"></a>
   </form>
   <?php
   if(isset($_POST['login'])){
	   
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from users where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location:index.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
   </div>
  </pre>
</center>
</div>
</body>
</html>
