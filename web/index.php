<?php
    include('./locale/localization.php');
    // initialize localization
    L10n::initialize($_GET['locale_id']);
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
        <? echo L10n::trans('hello'); ?>
    </body>
</html>