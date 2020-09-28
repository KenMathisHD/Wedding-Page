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
    <title>RSVP</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/rsvpPage.css">
</head>

<body>

    <?php include($includes . "navbar.php"); ?>  

	<section class="rsvp">

        <form>
            <ul>
                <li>
                    <label for="first-name">First Name</label><input type="text" id="first-name" required />
                </li>
                <li>
                    <label for="last-name">Last Name</label><input type="text" id="last-name" required />
                </li>
                <li>
                    <label for="email">Email</label><input type="text" id="email" required />
                    <span>Your email is required so we can alert youin case we need to make changes to the schedule or plans</span>
                </li>
                <li>
                    <span>Coming to the wedding?</span>
                    <label for="yesA">Yes</label>
                    <input type="radio" id="yesA" name="coming" value="Yes" required />
                    <label for="noA">No</label>
                    <input type="radio" id="noA" name="coming" value="No">
                </li>
                <li>
                    <span>Are you bringing a plus 1?</span>
                    <label for="yesB">Yes</label>
                    <input type="radio" id="yesB" name="bringing" value="Yes" required />
                    <label for="noB">No</label>
                    <input type="radio" id="noB" name="bringing" value="No">
                </li>
                <li>
                    <label for="song">Song suggestion for wedding playlist</label><input type="text" id="song" />
                </li>
            </ul>
            <input type="submit" id="submit" value="Submit" />
        </form>

    </section>
	

    <footer></footer>

	<script src="/js/jquery.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>