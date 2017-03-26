<?php

?>















<!DOCTYPE html>
<html>
<head>
<title>New Event</title>
<html lang="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--style-->
<style>
.button {
    background-color:  #d9d9d9; /* Green */
    border: none;
    color: black;
	align:middle;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button:hover {
    box-shadow: 0 16px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

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
	border-radius: 50px;
}
h1{
    text-shadow: 0px 0px 10px black;
}
td{
	width:50%;
	color:white;
	font-size:20;
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
select {
		border: 0;
        appearance:none;
		background: white;
		width: 150px;
		text-indent: 10px;
		color: black;
		font-size:15px;
		font-weight:bold;
		border-radius: 50px;
		padding: 0px;
		box-shadow: inset 0 0 10px rgba(000,000,000, 5.5);
		float:center;
}
input[type=text] {
    width: 50%;
    background-color: white;
    color: black;
    padding: 3px 3px;
    margin: 2px 0;
    border-radius: 10px;
	float:center;
}
table
{
	width:80%;
}
legend{
	font-weight:bold;
}
textarea,input[type=date],input[type=time]{
	border-radius: 10px;
	float:center;
}
#submit{
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

	text-align:center;
	font-weight:bold;
	font-size:20;
}
</style>
</head>


<body>
<center>
<div id="title"><h1 style="text-align:center">Don Bosco Institute of Technology, Kurla (W)</h1></div>
<br>
<div style="background-color:#2d2d2d;color:white">
<h1>Create A New Event</h1>
</div><br><br>


<form action="action_page.php" name="form1">
<fieldset>
<legend>Workshop details</legend>
<table>
<tr>
<td>Title<td><input type="text" name="title"></td></td>
<tr><td>Eligibility</td><td><select name="year">
				 <option selected="~Year" disabled="~Year">Year</option>
				 <option value="F.E.">F.E.</option>
			     <option value="S.E.">S.E.</option>
                 <option value="T.E.">T.E</option>
                 <option value="B.E.">B.E</option>
                 </select>
</td>
</tr>
</table>
<table>
<tr><td>Description</td><td><textarea rows="3" cols="50" name="desc" ></textarea></td></tr>
<tr><td>Academic relevance</td><td><br><textarea rows="3" cols="50" ></textarea></td></tr>
<tr><td>Industrial demand</td><td><br><textarea rows="3" cols="50" ></textarea></td></tr>
<tr><td>Pre-requisite</td><td><br><textarea rows="3" cols="50" ></textarea></td></tr>
</table>
</form>
</fieldset>


<!--worshop schedule-->
<form action="action_page.php" name="form2">
<fieldset>
<legend>Workshop schedule</legend>
<table>
<tr><td>Date&nbsp;&nbsp;<input type="date" name="date" value="dd|mm|yyyy"></td></tr>
<tr><td>No. of sessions&nbsp;&nbsp;<input type="text" name="no. of days" value=""></td></tr>
<tr><td>Time<br>from:&nbsp;&nbsp;<input type="time" name="time1" value="">&nbsp;&nbsp;to:&nbsp;&nbsp;<input type="time" name="time" value=""></td></tr>
<tr><td>Venue&nbsp;&nbsp;<input type="text" name="place" value=""></td></tr>
</table>
<br><br>
<fieldset>
<legend>Fees</legend>
<table><tr>
<td>Non-CSI Member Fee<input type="text" name="nfees" value=""></td>
<td>CSI Member Fee<input type="text" name="fees" value=""></td>
</tr></table>
</fieldset>
</form>
</fieldset>
<!--lecturer details-->
<form action="action page.php" name="form3">
<fieldset>
<legend>Organizers</legend>
		<form name="form3">
		<fieldset>
		<legend>Lecturer</legend>
		<table>
		<tr>
			<td>First name&nbsp;&nbsp;<input type="text" name="f_name1" value="" required></td>
			<td>Last name&nbsp;&nbsp;<input type="text" name="l_name1" value="" required></td>
		</tr>
		<tr>
			<td>First name&nbsp;&nbsp;<input type="text" name="f_name" value=""></td>
			<td>Last name&nbsp;&nbsp;<input type="text" name="l_name" value=""></td>
		</tr>
		</table>
	</fieldset>
	</form><br>
	<form name="form4">
	<fieldset>
	<table>
	<legend>Volunteers</legend>
		<h3>1st volunteer</h3>
		<tr>
		<td>First name&nbsp;&nbsp;<input type="text" name="f_name" value=""></td>
			<td>Last name&nbsp;&nbsp;<input type="text" name="l_name" value=""></td>
		</tr>
		<tr>
			<td>Department&nbsp;&nbsp;<select name="department">
				 <option selected="~Department" disabled="~Department">Department</option>
				 <option value="I.T">INFORMATION TECHNOLOGY</option>
			     <option value="COMP">COMPUTER SCIENCE</option>
                 <option value="EXTC">ELECTRICAL</option>
                 <option value="MECH">MECHANICAL</option>
                 </select> </td>
			<td>year&nbsp;&nbsp;<select name="year">
				 <option selected="~Year" disabled="~Year">Year</option>
				 <option value="F.E.">F.E.</option>
			     <option value="S.E.">S.E.</option>
                 <option value="T.E.">T.E</option>
                 <option value="B.E.">B.E</option>
                 </select></td>
		</tr>
	</table>
	<h3>2nd volunteer</h3>
	<table>
		<tr>
			<td>First name&nbsp;&nbsp;<input type="text" name="f_name" value=""></td>
			<td>Last name&nbsp;&nbsp;<input type="text" name="l_name" value=""></td>
		</tr>
		<tr>
			<td>Department&nbsp;&nbsp;<select name="department">
				 <option selected="~Department" disabled="~Department">Department</option>
				 <option value="I.T">INFORMATION TECHNOLOGY</option>
			     <option value="COMP">COMPUTER SCIENCE</option>
                 <option value="EXTC">ELECTRICAL</option>
                 <option value="MECH">MECHANICAL</option>
                 </select> </td>
			<td>year&nbsp;&nbsp;<select name="year">
				 <option selected="~Year" disabled="~Year">Year</option>
				 <option value="F.E.">F.E.</option>
			     <option value="S.E.">S.E.</option>
                 <option value="T.E.">T.E</option>
                 <option value="B.E.">B.E</option>
                 </select></td>
		</tr>
	</table>
	<h3>3rd volunteer</h3>
	<table>
		<tr>
			<td>First name&nbsp;&nbsp;<input type="text" name="f_name" value=""></td>
			<td>Last name&nbsp;&nbsp;<input type="text" name="f_name" value=""></td>
		</tr>
		<br>
		<tr>
			<td>Department&nbsp;&nbsp;<select name="department">
				 <option selected="~Department" disabled="~Department">Department</option>
				 <option value="I.T">INFORMATION TECHNOLOGY</option>
			     <option value="COMP">COMPUTER SCIENCE</option>
                 <option value="EXTC">ELECTRICAL</option>
                 <option value="MECH">MECHANICAL</option>
                 </select> </td>
			<td>year&nbsp;&nbsp;<select name="year">
				 <option selected="~Year" disabled="~Year">Year</option>
				 <option value="F.E.">F.E.</option>
			     <option value="S.E.">S.E.</option>
                 <option value="T.E.">T.E</option>
                 <option value="B.E.">B.E</option>
                 </select></td>
		</tr>
	</table>
	<h3>4th volunteer</h3>
	<table>
			<tr>
			<td>First name&nbsp;&nbsp;<input type="text" name="f_name" value=""></td>
			<td>Last name&nbsp;&nbsp;<input type="text" name="f_name" value=""></td></tr>
			<tr>
			<td>Department&nbsp;&nbsp;<select name="department">
				 <option selected="~Department" disabled="~Department">Department</option>
				 <option value="I.T">INFORMATION TECHNOLOGY</option>
			     <option value="COMP">COMPUTER SCIENCE</option>
                 <option value="EXTC">ELECTRICAL</option>
                 <option value="MECH">MECHANICAL</option>
                 </select> </td>
			<td>year&nbsp;&nbsp;<select name="year">
				 <option selected="~Year" disabled="~Year">Year</option>
				 <option value="F.E.">F.E.</option>
			     <option value="S.E.">S.E.</option>
                 <option value="T.E.">T.E</option>
                 <option value="B.E.">B.E</option>
                 </select></td></tr>
	</table>
	</fieldset>
	</fieldset>
	</form>
</fieldset>
</form>
<!--button-->
<center><button id="submit" class="button" type="button" onclick="return myFunction();">Submit</button></center>
</center>






<script src="crevent.js"></script>

</body>
</html>
