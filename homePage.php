<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home Page</title>
</head>
<body>
    <div class="slider">
        <div class="load">
        </div>
        <div class="content">
            <header>
                <a href="#" class="brand">Kenya</a>
                <div id="google_translate_element"></div>
                  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><br>

                <div class="menu-btn"></div>
                <div class="navigation">
                  <div class="navigation-items">
                    <a href="homePage.php">Home</a>
                    <a href="idApplication.php">Apply for an ID</a>
                    <a href="idReapplication.php">Lost/Stolen ID</a>
                    <a href="profile.php">My Profile</a>
                    <a href="help.php">Instructions</a>
                    <a href="processLogout.php">Logout</a>
                  </div>
                </div>
              </header>
            <div class="principal">
                <h1>WELCOME</h1>
                <p>Tuko pamoja hadi mwisho!</p>
            </div>
        </div>
    </div>
</body>
</html>