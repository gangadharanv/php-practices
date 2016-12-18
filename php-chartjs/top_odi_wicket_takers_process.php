<?php

//address of the server where db is installed

$servername="localhost";

//username to connect to the db

//the default value is root

$username="root";

//password to connect to the db

//this is the value you specified during installation of WAMP stack

$password="root";

//name of the db under which the table is created

$dbname="test";

//establishing the connection to the db.

$conn = mysqli_connect($servername, $username, $password,$dbname);


//checking if there were any error during the last connection attempt

if($conn->connect_error){

	die("Connection failed: " . $conn->connect_error);

}else{

	// Form values to send post method

	if(!isset($_POST['sb'])){
		header("location:top_odi_wicket_takers_form.php");
		exit;
	}
	$playername = $_POST['playername'];
	$wickets = $_POST['wickets'];

	$sql = 'INSERT INTO top_odi_wicket_takers Values(NULL,"'.$playername.'","'.$wickets.'")';

	mysqli_query($conn,$sql);
	header("location:chart.html");
	exit; 
}
?>