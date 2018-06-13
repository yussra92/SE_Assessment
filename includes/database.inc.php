<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Registration_data";

$conn = mysql_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$con=mysql_connect('localhost','root','')
if (!$con)
{
	echo 'Not connected to database'
}
if(mysql_select_db("Registration_data",$con))
{
	echo 'Database not selected';
}

if(isset($_POST['submit']))
{
	$user_id=$_POST['user_id'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$address1=$_POST['address1'];
	$address2=$_POST['address2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$Country=$_POST['Country'];
	$date=$_POST['date'];


	$query="INSERT INTO information (USER_ID, First Name, Last Name, Address 1, Address 2, City, State, Zip, Country, Date)VALUES('$user_id'$first_name','$last_name','$address1','$address2','$city','$state','$zip','$Country','$date')"

	if(mysql_query($query)
	{
		echo "<h2>Inserted</h2>";
	}	

 header("refresh:2; url=index.html")

}

?>