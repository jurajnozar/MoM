<?php
    //Initiate localization
    //if (!isset($_GET['locale_id'])){
        $locale = 'en_US.UTF-8';
    //} else {
    //    $locale = $_GET['locale_id'];
    //}
    putenv("LANGUAGE=".$locale);
    setlocale(LC_ALL, $locale);
    $domain = "messages";
    bindtextdomain($domain, "locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    textdomain($domain);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Shadows+Into+Light+Two|Amatic+SC:400,700|Open+Sans+Condensed:300,700|Roboto:400,700,900&display=swap&subset=latin-ext" rel="stylesheet">

        <title>Model management</title>
        <link rel="shortcut icon" type="image/png" href="assets/draw/Logo.png">
        <link rel="shortcut icon" type="image/svg+xml" href="assets/draw/Logo.svg">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    </head>

    <body>
        <? echo gettext("hello"); ?>
    </body>
</html>