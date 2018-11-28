<?php
/*
 * Copyright (c) 2016, Signaturgruppen  <info@signaturgruppen.dk>.
 * All rights reserved.
 * @license    See separate agreement regarding license information
 */
?>
<!DOCTYPE html>
<html class="flexboxtweener">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="icon" href="resources/favicon.ico">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>

    <!-- Styling -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="resources/site.css" rel="stylesheet" />
    <link href="resources/materialize/css/materialize.css" rel="stylesheet" />

    <!-- Compiled and minified JavaScript -->
    <script src="resources/materialize/js/materialize.min.js"></script>

    <title><?php echo $model['title']; ?></title>
</head>

<body>
<?php if(array_key_exists('script', $model)) { echo $model['script']; } ?>
<header>
    <!-- Dropdown Structure -->
    <ul id="nemid-dropdown" class="dropdown-content">
        <li><a href="logon.php">Logon</a></li>
        <li><a href="signpdf.php">Sign PDF</a></li>
        <li><a href="signtext.php">Sign text</a></li>
    </ul>
    <ul id="keyfile-dropdown" class="dropdown-content">
        <li><a href="keyfile_logon.php">Logon</a></li>
        <li><a href="keyfile_signpdf.php">Sign PDF</a></li>
        <li><a href="keyfile_signtext.php">Sign text</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a href="https://www.signaturgruppen.dk" class="brand-logo left logo"><img src="resources/logo50x50.png" alt="Signaturgruppen" style="width: 40px; height: 40px;" /></a>
            <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-button" href="#!" data-activates="nemid-dropdown" data-beloworigin="true" data-hover="hover">NemID<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="keyfile-dropdown" data-beloworigin="true" data-hover="hover">Keyfile<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header">NemID<i class="material-icons">arrow_drop_down</i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="logon.php">Logon</a></li>
                                    <li><a href="signpdf.php">Sign PDF</a></li>
                                    <li><a href="signtext.php">Sign text</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header">Keyfile<i class="material-icons">arrow_drop_down</i></a>
                            <div class="collapsible-body">
                                <ul>
                                  <li><a href="keyfile_logon.php">Logon</a></li>
                                  <li><a href="keyfile_signpdf.php">Sign PDF</a></li>
                                  <li><a href="keyfile_signtext.php">Sign text</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <script>$( document ).ready(function(){ $(".button-collapse").sideNav(); })</script>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col s12 center-align"><br/><h3><?php echo $model['title']; ?></h3></div>
        </div>
        <?php if(array_key_exists("script", $model)) : ?>
        <div class="row">
            <div class="col s12">
                <div>
                    <div style="display: table; margin: 0px auto; line-height: 1.0;">
                        <iframe src="<?php echo $model['src']; ?>" width="<?php echo $model['width']; ?>" height="<?php echo $model['height']; ?>" border="0" style="line-height: 1.0; border: none; margin: 0; padding: 0; overflow: hidden;" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if(array_key_exists("result", $model)) : ?>
        <div class="row">
            <div class="col s12">
                <?php echo $model['result']; ?>
            </div>
        </div>
        <?php endif; ?>
</main>

<footer class="page-footer footer hide-on-small-only">
    <div class="FooterContent">
        <div class="row">
            <div class="col s9">
                <div class="FooterTxt1">
                    <h6>Om Signaturgruppen</h6>
                    <p>
                        I Signaturgruppen er vi eksperter i løsninger med NemID, digital signatur og eID.
                        <br/>
                        Vores mission er at hjælpe virksomheder og organisationer med at realisere potentialet i den danske NemID infrastruktur
                    </p>
                    <br/>
                    <p>
                        <a href="https://www.signaturgruppen.dk/loesninger/nemid-tu-services/" target="_blank">Mere information om TU Services: https://www.signaturgruppen.dk/loesninger/nemid-tu-services/</a>
                    </p>
                </div>
            </div>
            <div class="col s3">
                <img src="resources/logo_footer.png" width="108" height="54" />
            </div>
        </div>
    </div>
</footer>

</body>

</html>
