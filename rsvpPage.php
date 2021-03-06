<?php

//  CRUD - CReate, Update, Delete

$path = $_SERVER['DOCUMENT_ROOT'];
$includes = $path . "/includes/";
?>

<?php include($includes . "phptop-headers.php"); ?>  

<?php include($includes . "liveweb.php"); ?>  

<?php include($includes . "phptop-rsvp.php"); ?>  
<!DOCTYPE html>
<html>

<head>
    <title>RSVP</title>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/rsvpPage.css">
</head>

<body>
    <div class="backgroundWrap">
        <img src="/imgs/engPhoto.jpeg" alt="">
    </div>
    <main>
        <?php include($includes . "non-home-pagenav.php"); ?>   

        <section class="rsvp">

            <img src="/imgs/KCWB.png" alt="Our Brand/Seal">

            <form id="rsvp-form">
                <ul>
                    <li id="name">
                        <div>
                            <label for="first-name">First Name*</label><input type="text" id="first-name" name="fname" placeholder="Skippy" required autocomplete="given-name"/>
                        </div>
                        <div>
                            <label for="last-name">Last Name*</label><input type="text" id="last-name" name="lname" placeholder="The Magnificent" required autocomplete="family-name"/>
                        </div>
                    </li>
                    <!-- <li>
                        <label for="last-name">Last Name*</label><input type="text" id="last-name" required />
                    </li> -->
                    <li>
                        <label for="email">Email*</label><input type="email" id="email" name="email" placeholder="name@example.com" required autocomplete="email"/>
                        <!-- <span>Your email is required so we can alert youin case we need to make changes to the schedule or plans</span> -->
                    </li>
                    <li>
                        <span>Coming to the wedding?*</span>
                        <div class="radio">
                            <input type="radio" id="yesA" name="coming" value="Yes" required />
                            <label for="yesA" class="yes">Yes </label>
                            <input type="radio" id="noA" name="coming" value="No">
                            <label for="noA" class="no">No</label>
                        </div>
                    </li>
                    <li>
                        <span>Are you bringing a plus 1?*</span>
                        <div class="radio">
                            <input type="radio" id="yesB" name="bringing" value="Yes" required />
                            <label for="yesB" class="yes">Yes </label>
                            <input type="radio" id="noB" name="bringing" value="No">
                            <label for="noB" class="no">No</label>
                        </div>
                        <div id="whom-wrap" class="whomWrap">
                            <label for="who">Name of Additional Guest*</label><input type="type" id="who" name="who" placeholder="Joe Shmoe"/>
                            <span><i>If bringing more than 1 person, please separate each name by a comma</i></span>
                        </div>
                    </li>
                    <li>
                        <label for="song">Song suggestion for wedding playlist</label><input type="text" id="song" placeholder="Cotton Eye Joe by Rednex"/>
                    </li>
                </ul>
                <input type="submit" id="submit" value="RSVP" />
            </form>

            <div id="thank-you-wrap" class="thankYouWrap">
                <div id="thank-you">
                    <span>Thank you! We'll see you at the wedding!</span>
                    <img src="/imgs/KCWB.png" alt="Our Brand/Seal">
                </div>
            </div>

        </section>
    </main>
	

    <footer></footer>

	<script src="/js/jquery.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>