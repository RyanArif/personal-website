<?php
function htmlHeading($pageTitle)
{
    echo "<!DOCTYPE html>
    <html lang='en'>
        <head>
            <title>Ryan Arif - ".$pageTitle."</title>
            <meta charset = 'UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' href='w3.css'>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css'>
            <!-- Favicon -->
            <link rel='apple-touch-icon' sizes='57x57' href='/apple-icon-57x57.png'>
            <link rel='apple-touch-icon' sizes='60x60' href='/apple-icon-60x60.png'>
            <link rel='apple-touch-icon' sizes='72x72' href='/apple-icon-72x72.png'>
            <link rel='apple-touch-icon' sizes='76x76' href='/apple-icon-76x76.png'>
            <link rel='apple-touch-icon' sizes='114x114' href='/apple-icon-114x114.png'>
            <link rel='apple-touch-icon' sizes='120x120' href='/apple-icon-120x120.png'>
            <link rel='apple-touch-icon' sizes='144x144' href='/apple-icon-144x144.png'>
            <link rel='apple-touch-icon' sizes='152x152' href='/apple-icon-152x152.png'>
            <link rel='apple-touch-icon' sizes='180x180' href='/apple-icon-180x180.png'>
            <link rel='icon' type='image/png' sizes='192x192'  href='/android-icon-192x192.png'>
            <link rel='icon' type='image/png' sizes='32x32' href='/favicon-32x32.png'>
            <link rel='icon' type='image/png' sizes='96x96' href='/favicon-96x96.png'>
            <link rel='icon' type='image/png' sizes='16x16' href='/favicon-16x16.png'>
            <link rel='manifest' href='/manifest.json'>
            <meta name='msapplication-TileColor' content='#ffffff'>
            <meta name='msapplication-TileImage' content='/ms-icon-144x144.png'>
            <meta name='theme-color' content='#ffffff'>
        </head>
        <body>
            <!--Navbar-->
            <div class='w3-top'>
                <div class='w3-bar w3-blue w3-left-align w3-medium w3-card'>
                    <a href='?home' class='w3-button w3-hide-small w3-padding-large w3-hover-white'>Home</a>
                    <a href='?tutoring' class='w3-button w3-hide-small w3-padding-large w3-hover-white'>Tutoring</a>
                    <a href='?resume' class='w3-button w3-hide-small w3-padding-large w3-hover-white'>Resume</a>
                </div>
            </div>
            <!--Navbar, but for mobile-->
            <div class='w3-sidebar w3-bar-block w3-border-right' style='display:none;' id='sidebar'>
                <button onclick='w3_close()' class='w3-bar-item w3-large'>Close &times;</button>
                <a href='?home' class='w3-bar-item w3-button'>Home</a>
                <a href='?tutoring' class='w3-bar-item w3-button'>Tutoring</a>
                <a href='?resume' class='w3-bar-item w3-button'>Resume</a>
            </div>
            <div class='w3-blue'>
                <button class='w3-button w3-blue w3-xlarge' onclick='w3_open()'><i class='fas fa-bars'></i></button>
            </div>
            <!--Header-->
            <header class='w3-container w3-blue w3-center' style='padding:128px 16px'>
                <h1 class='w3-jumbo'>RYAN ARIF</h1>
                <h5 class='w3-large'>Tutor. Developer. Mathematician.</h5>
            </header>
    ";
}

function htmlFooter()
{
    echo "<footer class='w3-container w3-padding-64 w3-center w3-opacity w3-blue'>
    <!--Please don't steal :( -->
    <p>Ryan Arif<br>Copyright © 2019</p>
</footer>
";
}
?>