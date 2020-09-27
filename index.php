<?php

//  CRUD - CReate, Update, Delete

$path = $_SERVER['DOCUMENT_ROOT'];
$includes = $path . "/includes/";
?>

<?php include($includes . "localserver.php"); ?>  

<?php try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // setting the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully"; 
	
	$sql = "INSERT INTO $lowerdb (FirstName, LastName, Email, Attending, Bringing, Song)
	 VALUES ('John', 'Doe', 'john@example.com', 'Yes', 'Yes', 'Take He Home Country Roads by John Denver')";

	$conn->exec($sql);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
	echo "Error: " . $sql . "<br>" . $conn->e;
}
		
$conn = null;?>

<?php include($includes . "phptop.php"); ?>  
<!DOCTYPE html>
<html>

<head>
    <title>Our Wedding</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <section class="homePage">
		<div class="namesFixed">
			<span>Ciara & Kenny</span>
		</div>
		<?php include($includes . "navbar.php"); ?>  
	</section>
	
	<section class="rsvp">

		<form action="">
			<ul>
				<li>
					<label for="">First Name</label><input type="text">
				</li>
				<li>
					<label for="">Last Name</label><input type="text">
				</li>
				<li>
					<label for="">Email</label><input type="text">
				</li>
				<li>
					<span>Coming to the wedding?</span>
					<label for="">Yes</label>
					<input type="radio" name="coming">
					<label for="">No</label>
					<input type="radio" name="coming">
				</li>
				<li>
					<label for="">Plus 1?</label><input type="checkbox">
				</li>
				<li>
					<label for="">Song suggestion for wedding playlist</label><input type="text">
				</li>
			</ul>
			<input type="submit" value="Submit">
		</form>

	</section>

    <footer></footer>


    <script src="/js/script.js"></script>
</body>

</html>