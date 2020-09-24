<?php

//  CRUD - CReate, Update, Delete


if (!isset($_GET['action'])) {							//if action variable doesn't exist
	$_GET['action'] = '';								//add action variable
}
session_start();										//starts the php session, drops that cookie

if ($_GET['action'] == 'addTopping') {					//if the action being used is addTopping
	$result = array();									//$result sets up an object called result, and creates a blank array within that result object
	$result['errormsg'] = '';							//sets up result.errormsg and makes iot's value blank - nothing
	$result['success'] = 0;								//sets up result.success and makes it's value 0, or false


	if (isset($_GET['topping']) && !empty($_GET['topping'])) {						//if the superglobal variable 'topping' exists and is something other than null
														//need to also check if topping has a value, i.e. is not empty
		if (!isset($_SESSION['toppings'])) {			//if the superglobal session variable 'toppings' does not exist
			$_SESSION['toppings'] = array();			//then we're going to create that variable and continue on
		}
		$_SESSION['toppings'][] = $_GET['topping'];		//saying the array 'toppings' is equal to the array 
		$result['success'] = 1;						//updating the value of result.success as 1 since topping exists



	}						//else statement only works if topping variable (in this case, element) doesn't exist, need to add check to see if topping has value (i.e. is empty of not)
	else {											//if topping didnt exist
		$result['errormsg'] = 'No Topping Entered';		//we'd update result.errormsg with No Topping Entered
	}

	echo json_encode($result);							//basically returns result as json
	exit;



} else if ($_GET['action'] == 'getToppings') {			//else if we're grabbing the list of toppings (getToppings is called)
	$result = array();									//define result object, add blank array
	$result['errormsg'] = '';							//add .errormsg to object, make it blank
	$result['success'] = 1;								//add .success to object, make it 1 by default
	$result['toppings'] = array();						//add .toppings to object, make it a blank array

	if (isset($_SESSION['toppings'])) {					//if the serssion variable toppings exists
		$result['toppings'] = $_SESSION['toppings'];	//result.toppings is equal to the session variable toppings
		$result['success'] = 1;							//update .success to 1
	}
	else {
		$result['success'] = 0;
		$result['errormsg'] = 'Toppings array does not exist for some reason';
	}
	
	echo json_encode($result);							//basically return the result
	exit;




}?>