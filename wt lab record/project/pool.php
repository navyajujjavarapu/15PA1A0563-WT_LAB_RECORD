<?php
   session_start();
   require 'cofigure.php';
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
    <form action="addcar.html" method="get">
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
        
        <select>
           <option value="am">1</option>
           <option value="pm">2</option>
           <option value="am">3</option>
           <option value="pm">4</option>
           </select><br><br/>
           <a href="conform.php"><button type="submit" value="Submit">Submit</button><br><br/>
           <a href="home.php"><button name="back_btn" value=" Back  ">Back</button>
    </form>
    </div>
</body>
</html>
