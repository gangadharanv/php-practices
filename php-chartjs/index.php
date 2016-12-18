
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

$dbname="jobcard_creation";

//establishing the connection to the db.

mysql_connect($servername, $username, $password) or die();
mysql_select_db($dbname);


//checking if there were any error during the last connection attempt

/*if($conn->connect_error){

	die("Connection failed: " . $conn->connect_error);

}*/

	    //the SQL query to be executed

$query = mysql_query("SELECT count(jl.jobcard_no),jme.employee_name from jobcard_list jl join jc_masters_employees jme on jl.sale_by_id = jme.id where department =1 group by jme.employee_name");

		//storing the result of the executed query

//$result = $conn->query($query);

//initialize the array to store the processed data
		$jsonArray = array();
		//check if there is any data returned by the SQL Query
		if (mysql_num_rows($query) > 0) {
		  //Converting the results into an associative array
		  while($row = mysql_fetch_assoc($query)) {


		    $jsonArrayItem = array();
		    $jsonArrayItem['label'] = $row['employee_name'];
		    $jsonArrayItem['value'] = $row['count(jl.jobcard_no)'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		  
		}
		//Closing the connection to DB
		//$conn->close();
		mysql_close();
		//set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);
		exit;


?>