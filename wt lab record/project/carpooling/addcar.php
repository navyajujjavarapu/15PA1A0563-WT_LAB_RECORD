<?php
     require 'cofigure.php';
?>
<?php
	    if(isset($_POST['submit_btn'])){
	    echo "jujuu";
			
            $email=stripslashes($_POST['email']);
			
				$query="select * from cars where carid='$carid'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("car already exists")</script>';
					
				}else
				{
					$query="INSERT INTO cars(email)VALUES('$email')";
					$sql=mysqli_query($con,$query);
					if($sql){
						echo '<script type="text/javascript">alert("user succesfully entered his details")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
         
		   }
	?>
<!DOCTYPE html>
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
	 <br></br>
  <h2>ADD NEW CAR</h2>
     <form class="c1" action="addcar.php" method="post">
      
       <label><b>Email</b>
       <input type="email" name="email" class="textinput" ><br><br>
       </label>
        <label>price</label>
        <select>
           <option value="1">90</option>
           <option value="2">100</option>
           <option value="3">110</option>
           <option value="4">120</option>
           </select><br><br>
        
      <label><b>No of seats  </b>
        <br>
        <select>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
</select><br><br>
      </label>
      <label><b>Car Type</b>
        <br>
        <input type="text" name="utype" ><br><br>
      </label>
     
        </form>
       <a href="pool.php"><input type="submit" name="submit_btn" value="Submit"></a>

</body>
</html>
