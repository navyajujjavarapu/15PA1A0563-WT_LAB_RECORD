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
      <li><a class="two" href="home.php">Home </a></li>
      </ul>
    </div>
    <section>
    <div class="b">
        <img src="offer.jpg">
        </div>
        <div>
           <form method="get" action="ride.php">
               <label>name</label><input type="text" name="uname"><br></br>
                 <label>type</label><input type="text" name="type"><br></br>
                 <label>from</label><input type="text" name="pickup" ><br></br>
                   <label>to</label><input type="text" name="dropoff" > <br></br>
                   <a href="pool.php"><button name="back_btn" value="back">Back</button>
                   <a href="conform.php"><button name="submit_btn" value="back">Submit</button> 
                   </form>
                   </div>
                   <?php
	    if(isset($_POST['submit_btn'])){
			$pickup=stripslashes($_POST['pickup']);
            $dropoff=stripslashes($_POST['dropoff']);
            $date=stripslashes($_POST['day']);
		
				$query="select * from cars where pickup='$pickup' and dropoff='$dropoff'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
				         header('location:detail.php');				
				}
		         else
				{
					$query="INSERT INTO cars(pickup,dropoff,date)VALUES('$pickup','$dropoff','$date')";
					$sql=mysqli_query($con,$query);
					if($sql){
						echo '<script type="text/javascript">alert("user succesfully entered")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
		}
	?>
                   </body>
                   </html>
                                
