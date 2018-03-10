<?php
 session_start();
?>
<html>
<head>
    <link rel="stylesheet" type=text/css href="register.css" />
</head>

<body>
    <div class='c'>
      <h1>CAR POOLING</h1>
      <ul class="one" type="none">
      <li><a class="two" href="login.php">Login </a></li>
     <!--<li><a class="two" href="Register">Register </a></li>-->
      <li><a class="two" href="index.php">Home </a></li>
	  <?php
	    session_destroy();
        header('location:home.php');
	  ?>
      </ul>
    </div>
</body>
</html>
