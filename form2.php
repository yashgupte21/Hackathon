<?php

require("connect2.php");

//$write= mysqli_query($_connect , "INSERT INTO users VALUES('','Barry Allen','flash')") or die("sql error");
//$write= mysqli_query($_connect , "INSERT INTO users VALUES('','Harrison Wells','wells')") or die("sql error");
//$write= mysqli_query($_connect , "INSERT INTO users VALUES('','Cisco Ramon','vibe')") or die("sql error");
//$write= mysqli_query($_connect , "INSERT INTO users VALUES('','Caithlyn Snow','killerfrost')") or die("sql error");

//$delete=mysqli_query($_connect , " DELETE FROM users WHERE id>'9'") or die("sql error");




if($_POST['login'])
{

    $username_form=$_POST['username'];
    $password_form=$_POST['pass'];

    $extract = mysqli_query($_connect,"SELECT * FROM users WHERE username='$username_form' ")or die ("Unable to  extract");

    echo "<br>";
  //  echo mysqli_num_rows($extract);
    echo "<br>";
    echo "<br>";

    $numrows=mysqli_num_rows($extract);

    if($numrows!=0)
    {

      while ($rows=mysqli_fetch_assoc($extract))
      {
          $dbusername=$rows['username'];
          $dbpassword=$rows['password'];

          if($username_form==$dbusername && $password_form==$dbpassword)
          {
            echo ("Login Successfull!");
          }
          else
           {
              echo ("Enter correct username or password.");
            }
      }
    }

}


?>














<html>
<head>
<title>Log In</title>
<style>
#title{
 width:80%;
 height:6%;
 border-radius: 0px 0px 50px 50px;
 background: #77b4d8;
 box-shadow: 0px 9px 15px #969696;
 color:white;

}
td{
 width:10%;
 height:10%;
 border-radius: 200px 200px 200px 200px;
 background: #77b4d8;
 box-shadow: 0px 8px 18px #969696;
 text-align:center;
 font-weight:bold;
 font-size:20;
}
h1{
    text-shadow: 0px 0px 10px black;
}
td{
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
    background-color: #77b4d8;
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
<form name="form1" action='form2.php' method='POST' onsubmit="return myFunction();">
<center>
<div id="title"><h1 style="text-align:center">Don Bosco Institute of Technology, Kurla (W)</h1></div>
<br>
<ul>
  <li><a href="file:///C:/Users/NRUPA/Desktop/Hackathon/fredy/home.html">Home</a></li>
  <li><a href="file:///C:/Users/NRUPA/Desktop/Hackathon/fredy/signuppage.html">Sign Up</a></li>
  <li><a class="active"href="file:///C:/Users/NRUPA/Desktop/Hackathon/fredy/loginpage.html">Log In</a></li>
</ul>
<br><br>
<table border="0" cellpadding="20" cellspacing="35">
<tr>
<td style="border-radius: 50px 50px; width:60%">Username&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name='username' style="border-radius: 0px 50px 50px 0px"></td>
</tr>
<tr>
<td style="border-radius: 50px 50px; width:60%">Password&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name='pass' style="border-radius: 0px 50px 50px 0px"></td>
</tr>
</table>
<input type="submit" onsubmit="return myFunction();" name='login' value="Log In">
</center>
</form>






<script src="login.js"></script>
</body>
</html>
