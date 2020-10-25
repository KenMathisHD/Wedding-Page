<?php

//  CRUD - CReate, Update, Delete

$path = $_SERVER['DOCUMENT_ROOT'];
$includes = $path . "/includes/";
?>

<?php include($includes . "phptop-headers.php"); ?>  

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/indexHomePage.css">
	<meta name="description" content="Marriage of Kenny and Ciara">
	<meta property="og:title" content="Home" />
	<meta property="og:description" content="Wedding Homepage" />
	<meta property="og:site_name" content="Ken-n-ciar.com" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_US" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<main>
		<div class="backgroundWrap">
			<img src="/imgs/engPhoto.jpeg" alt="">
		</div>
		<div class="fadeInWrap">

			<?php include($includes . "non-home-pagenav.php"); ?>

		</div>
	</main>
</body>

</html>