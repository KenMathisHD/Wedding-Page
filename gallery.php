<?php

//  CRUD - CReate, Update, Delete

$path = $_SERVER['DOCUMENT_ROOT'];
$includes = $path . "/includes/";

?>

<?php include($includes . "phptop-headers.php"); ?>  


<!DOCTYPE html>
<html>

<head>
    <title>K&C Photo Gallery</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/gallery.css">
</head>

<body>

    <?php include($includes . "non-home-pagenav.php"); ?>  

    <section id="photos" class="imgInit">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-1.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-3.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-4.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-8.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-10.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-5.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-9.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-12.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-20.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-15 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-17.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-23.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-26.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-30.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-34.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-24.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-25.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-32.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-33.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-39.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-44.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-47.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-49.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-48.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-45.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-42.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-36.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-50 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-52 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-57 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-61 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-59 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-51.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-55.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-56.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-65.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-71.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-73.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-78.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-66 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-67.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-74.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-76.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-80.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-84 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-87.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-91.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-79.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-82.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-85.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-89 (1).jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-92.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-94.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-95.jpeg" alt="">
        <img src="/imgs/1x1.jpeg" altImgSrc="/imgs/320/JenZPhoto-96.jpeg" alt="">
    </section>



    <footer></footer>

	<script src="/js/jquery.min.js"></script>
	<script src="/js/gallery.js"></script>
</body>

</html>