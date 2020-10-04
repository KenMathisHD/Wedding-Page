<?php

//  CRUD - CReate, Update, Delete

$path = $_SERVER['DOCUMENT_ROOT'];
$includes = $path . "/includes/";
?>

<?php include($includes . "phptop-headers.php"); ?>  

<!DOCTYPE html>
<html>

<head>
    <title>Our Wedding</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/indexHomePage.css">
</head>

<body>

	<div id="mobile-nav" class="nav-mobile-button">
		<span id="swirls"></span>
	</div>	
    <section class="homePage">
		<div class="namesFixed">
			<span>Ciara & Kenny</span>
		</div>
		<?php include($includes . "navMobile.php"); ?>
		<?php include($includes . "navDesk.php"); ?>  
	</section>
	
	

    <footer></footer>

	<script src="/js/jquery.min.js"></script>

</body>

</html>