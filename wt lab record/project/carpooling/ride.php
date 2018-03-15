<?php
   session_start();
     require 'cofigure.php';
?>
<html>
<head>
        <link rel="stylesheet" type=text/css href="ride.css" />
</head>
<body>
   <div class='a'>
      <h1>CAR POOLING</h1>
      <ul class="one" type="none">
      <li><a class="two" href="logout.php">Logout</a></li>
     <!--<li><a class="two" href="Register">Register </a></li>-->
      <li><a class="two" href="index.php">Home </a></li>
      </ul>
    </div>
	 <br><br/>
    <div class="main">
    <form action="conform.php" method="POST">
       <br><label>Pick-up</label>   <input type="text" name="pickup" ><br></br>
       <label>Drop-off</label>  <input type="text" name="dropoff " > <br></br>
       <label>Date</label>      <input type="date" name="day"><br></br>
       <a href="available.php"><button type="submit" form="form1" value="Submit " name="submit_btn">Submit</button>
         
    </form>
    <a href="index.php"><button name="back_btn" value="  Back ">Back</button>
    </div>
   
</body>
</html>
