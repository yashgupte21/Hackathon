<?php

require("connect2.php");

if(isset($_POST['signup']))
{

    $username_form=$_POST['username'];
    $password_form=$_POST['pass'];

    $extract = mysqli_query($_connect,"SELECT * FROM users")or die ("Unable to  extract");

    echo "<br>";
   echo mysqli_num_rows($extract);
    echo "<br>";
    echo "<br>";

    $numrows=mysqli_num_rows($extract);

    if($numrows!=0)
    {

      while ($rows=mysqli_fetch_assoc($extract))
      {
          $dbusername=$rows['username'];
          $dbpassword=$rows['password'];

          if($username_form != $dbusername)
          {
            $write= mysqli_query($_connect , "INSERT INTO users VALUES('','$username_form','$password_form')") or die("sql error");
            echo ("Signup successfull");

          }
          else
          {
              echo ("Username is alredy taken. Try another username");
            }
      }
    }

}



 ?>


 <html>
 <head>
 <title>Sign Up</title>
 <style>
 #title{
 	width:80%;
 	height:6%;
 	border-radius: 0px 0px 50px 50px;
 	background: #750021;
 	box-shadow: 0px 9px 15px #969696;
 	color:white;

 }
 td{
 	width:10%;
 	height:10%;
 	background: #750021;
 	box-shadow: 0px 8px 18px #969696;
 	text-align:center;
 	font-weight:bold;
 	font-size:20;
 }
 h1{
     text-shadow: 0px 0px 10px black;
 }
 td{
 	width:50%;
 	color:white;
     text-shadow: 0px 0px 10px black;
 }
 ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
     overflow: hidden;
     background-color: #333;
 	box-shadow: 0px 9px 15px #969696;
 }

 li {
     float: left;
 	font-weight:light;
 	font-size:18;
 	font-family:arial;
 }

 li a {
     display: block;
     color: white;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
 }

 li a:hover:not(.active) {
     background-color: #111;
 }

 .active {
     background-color: #750021;
 }
 input[type=submit] {
     width: 50%;
     background-color: #4fdb3f;
     color: white;
     padding: 14px 20px;
     margin: 8px 0;
     border: none;
     border-radius: 50px 50px;
 	width: 30%;
     cursor: pointer;
 	text-shadow: 0px 0px 10px black;
 	box-shadow: 0px 9px 15px #969696;
 	text-align:center;
 	font-weight:bold;
 	font-size:20;
 }
 </style>
 </head>
 <body>
 <form action='signup.php' method='POST' name="form2" onsubmit="return myFunction();">
 <center>
 <div id="title"><h1 style="text-align:center">Don Bosco Institute of Technology, Kurla (W)</h1></div>
 <br>
 <ul>
   <li><a href="http://localhost/hackathon/home.php">Home</a></li>
   <li><a class="active" href="http://localhost/hackathon/signup.php">Sign Up</a></li>
   <li><a href="http://localhost/hackathon/form2.php">Log In</a></li>
 </ul>
 <br><br><br>
 <table cellpadding="20" cellspacing="25">
 <tr>
 <td style="border-radius: 200px 0px 0px 200px">Username</td>
 <td style="border-radius: 0px 200px 200px 0px"><input type="text" name='username' style="border-radius: 0px 50px 50px 0px"></td>
 </tr>
 <tr>
 <td style="border-radius: 200px 0px 0px 200px">Password</td>
 <td style="border-radius: 0px 200px 200px 0px"><input type="text" name='pass' style="border-radius: 0px 50px 50px 0px"></td>
 </tr>
 <tr>
 <td style="border-radius: 200px 0px 0px 200px">Re-enter password</td>
 <td style="border-radius: 0px 200px 200px 0px"><input type="text" name="re-pass" style="border-radius: 0px 50px 50px 0px"></td>
 </tr>
 </table>
 <input type="submit" name='signup' value="Sign Up" onsubmit="return myFunction();">
 </center>
 </form>













 <script src="signup.js"></script>


 </body>
  </html>
