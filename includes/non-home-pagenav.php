<?php

//  CRUD - CReate, Update, Delete

$path = $_SERVER['DOCUMENT_ROOT'];
$includes = $path . "/includes/";
?>

<head>
    <link rel="stylesheet" href="/css/nav.css">
</head>

<section id="nav-cont" class="nav">
	<div id="mobile-nav" class="nav-mobile-button">
		<span id="swirls"></span>
	</div>
	<div id="name-nav" class="namesNav">	
		<span>Ciara & Kenny</span>
	</div>
	<?php include($includes . "navMobile.php"); ?>
	<?php include($includes . "navDesk.php"); ?>  
</section>