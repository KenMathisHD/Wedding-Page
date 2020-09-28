<?php

//  CRUD - CReate, Update, Delete

$path = $_SERVER['DOCUMENT_ROOT'];
$includes = $path . "/includes/";
?>

<?php include($includes . "localserver.php"); ?>  

<?php include($includes . "phptop.php"); ?>  
<!DOCTYPE html>
<html>

<head>
    <title>Our Wedding</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/indexHomePage.css">
</head>

<body>

    <section class="homePage">
		<div class="namesFixed">
			<span>Ciara & Kenny</span>
		</div>
		<?php include($includes . "navbar.php"); ?>  
	</section>
	
	

    <footer></footer>

	<script src="/js/jquery.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>