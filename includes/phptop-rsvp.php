<?php

//  CRUD - CReate, Update, Delete


if (!isset($_GET['action'])) {							//if action variable doesn't exist
	$_GET['action'] = '';								//add action variable
}
session_start();										//starts the php session, drops that cookie

if ($_GET['action'] == 'sendData') {					//if the action being used is sendData
	$result = array();									//$result sets up an object called result, and creates a blank array within that result object
	$result['errormsg'] = 'No Error Detected';							//sets up result.errormsg and makes iot's value blank - nothing
	$result['success'] = 0;								//sets up result.success and makes it's value 0, or false


	if (isset($_GET['rsvpData'])) {						//if the superglobal variable 'rsvpData' exists
		
		$rsvpData = json_decode($_GET['rsvpData']); 	//decodes the json to something php can read


		//assigning values
		$firstName = (string) $rsvpData->firstName;
		$lastName = (string) $rsvpData->lastName;
		$email = (string) $rsvpData->email;
		$attending = (string) $rsvpData->attending;
		$bringing = (string) $rsvpData->bringing;
		$who = (string) $rsvpData->who;
		$song = (string) $rsvpData->song;
		

		//sending the data
		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);								// setting the PDO error mode to exception
			
			$sql = "INSERT INTO $lowerdb (FirstName, LastName, Email, Attending, Bringing, Who, Song)
			 VALUES ('$firstName', '$lastName', '$email', '$attending', '$bringing', '$who', '$song')";
		
			$conn->exec($sql);
			// echo json_encode("Connection Successful");
		}
		catch(PDOException $e) {
			echo json_encode("Connection failed: " . $e->getMessage());
			echo json_encode("Error: " . $sql . "<br>" . $conn->e);
		}
				
		$conn = null;
		$result['success'] = 1;

	}						
	else {											//if rsvpData didnt exist
		$result['errormsg'] = 'Data was not sent or was sent unsuccessfully';		//we'll update result.errormsg
	}

	echo json_encode($result);						//return result
	exit;



} else if ($_GET['action'] == 'sendErrorData') {		//else if we're dealing with an error
	$result = array();									//define result object, add blank array
	$result['errormsg'] = 'No Error Detected';							//add .errormsg to object, make it blank
	$result['success'] = 0;								//add .success to object, make it 0 by default

	if (isset($_GET['errorCounter'])) {						//if the superglobal variable 'errorCounter' exists

		if (!isset($_SESSION['errorCount'])) {			//if the superglobal session variable 'errorCount' does not exist
			$_SESSION['errorCount'] = array();			//then we're going to create that variable and continue on
		}
		$_SESSION['errorCount'] = $_GET['errorCounter'];		//updating the session variable value to the pulled in value 
		$result['success'] = 1;							//updating the value of result.success as 1 since topping exists


	}
	else {											//if errorCounter didnt exist
		$result['errormsg'] = 'Data was not sent or was sent unsuccessfully';		//we'd update result.errormsg
	}
	
	echo json_encode($result);							//return result
	exit;

}

?>