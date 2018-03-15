<?php
   
     require 'cofigure.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type=text/css href="register.css" />
    <style>
          .car{
            padding:10px;
            text-align:center;
          }
          .two,.three{
             border: none;
    color: grey;
    padding: 15px 32px;
    text-align: center;
   font-size:20px;
          }
          a,li{
           text-align:right;
           padding:0px 10px 0px 0px;
           }
    </style>
</head>
 
<body>
    <div class='a'>
      <h1>CAR POOLING</h1>
      <ul class="c" type="none">
                <li ><a class="s" href="logout.php">Logout </a></li>
       </ul>
    </div>
    <br></br>
       <form  class="car">
          <a href="ride.php"><input class="two" type="button" value="GET A RIDE " name="get"/><br><br></br>
	 <a href="addcar.html"><input class="three" type="button" value="GIVE A RIDE"/></a>
	 </form>
       </body>
       </html>
