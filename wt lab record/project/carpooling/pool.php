<?php
   session_start();
   require 'cofigure.php';
?>
<?php
  if(isset($_POST['Submit_btn'])){
	echo '<script type="text/javascript">alert("Thank you for booking")</script>';
	}
	?>		
<html>
<head>
        <link rel="stylesheet" type=text/css href="pool.css" />
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
    <div class="main">
    <form action="addcar.php" method="get">
       <label>Pick-up</label>   <input type="text" name="pickup" ><br></br>
       <label>Drop-off</label>  <input type="text" name="dropoff " > <br></br>
       <label>Car Number</label>    <input type="text" name="carno" ><br></br>
       <label>Start Time</label>
        <input type="number" name="hour" placeholder="HH" >
        <input type="number" name="minutes" placeholder="MM">
        <select>
           <option value="am">AM</option>
           <option value="pm">PM</option>
           </select><br><br>
        <label>End Time</label>
        <input type="number" name="hour" placeholder="HH" >
        <input type="number" name="minutes" placeholder="MM" >
        <select>
            <option value="am">AM</option>
            <option value="pm">PM</option>
            </select><br><br>
        
       
          <button type="submit" value="Submit" name="Submit_btn">Submit</button><br><br/>
           <a href="home.php"><button name="back_btn" value=" Back  ">Back</button>
    </form>
    </div>
</body>
</html>
