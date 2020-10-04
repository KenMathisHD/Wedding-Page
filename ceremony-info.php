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
    <link rel="stylesheet" href="/css/ceremony.css">
</head>

<body>

    <?php include($includes . "non-home-pagenav.php"); ?>

    <section class="ceremonyInfoCont">
        <h2>Wedding/Ceremony Information</h2>

        <div>
            <h3>Ceremony Location and Date</h3>
            <span>Saturday, December 5th, 2020</span>
            <span>228 Jeff Vaughn, Blanco, TX 78606</span>
        </div>

        <div class="schedule">
            <h3>Wedding Schedule</h3>
            <span><i>All given times are in CST</i></span>
            <ul>
                <li><span><b>4:00pm</b> - <i>Guests to begin arriving</i></span></li>
                <li><span><b>4:30pm</b> - <i>Wedding Ceremony</i></span></li>
                <li><span><b>5:00pm</b> - <i>Post-ceremony pictures for wedding party</i></span></li>
                <li><span><b>5:30pm</b> - <i>Reception to begin in pavilion by pool</i></span></li>
                <li><span><b>6:30pm-7:00pm-ish</b> - <i>Cake cutting</i></span></li>
                <li><span><b>9:00pm</b> - <i>Reception ends, remaining guests begin departing</i></span></li>
            </ul>
        </div>

        <div>
            <h3>Dress</h3>
            <span>Honestly, it's pretty lax. Minimum would be dress like you would if you were going to a nice restaurant with your inlaws for the first time and you want to 
            make a good impression</span>
        </div>

        <div>
            <h3>Reception Information</h3>
            <span>Alcohol will be served at the food kiosk under the pavilion. There will be a selection of different beers and wine, but no hard alcohol/liqour/spirits. We will 
            have other non-alcoholic beverages available</span>
            <span>Food for the reception is being provided by 375 Klassy Kitchen</span>
        </div>

        <div>
            <h3>Other Information</h3>
            <span><b>Venue Gate</b> - The gate for the venue closes at 5:30pm, so please make sure you arrive by then if you can't make the ceremony</span>
            <span><b>Weather Forecast</b> - For Blanco at that time of year, we're expecting the high to be somewhere between 66° and 78°, and the low to be around 48°-60°</span>
            <span><b>Alcohol</b> - Alcohol is being provided, please do not bring any alcoholic drinks with you for consumption during the ceremony or reception, especially not any hard 
            alcohol/liqour/spirits</span>
        </div>

        <div class="links">
            <h3>Links</h3>
            <ul>
                <li><a href="https://weather.com/weather/tenday/l/Blanco+TX?canonicalCityId=8d9bda9f3c9b51750f8cf5c1d739cb47f7b71e3269b41933dddac4359d6a3c48">10-day Forecast for Blanco, TX</a></li>
                <li><a href="">Gift Registry</a></li>
                <li><a href="">Directions to venue</a></li>
                <li><a href="/contact-us.php">Contact Info</a></li>
                <li><a href="rsvpPage.php">If you're coming, RSVP!</a></li>
            </ul>
        </div>

    </section>
	
	

    <footer></footer>

	<script src="/js/jquery.min.js"></script>
</body>

</html>