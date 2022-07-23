<?php

function begin($title)
{
    echo '<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EWUSIDAN CONSULT - '.$title.'</title>
    
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="main/assets/icons.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="main/assets/icons.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="main/assets/icons.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="main/assets/icons.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="main/assets/icons.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="main/assets/icons.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="main/assets/icons.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="main/assets/icons.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="main/assets/icons.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="main/assets/icons.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="main/assets/icons.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="main/assets/icons.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="main/assets/icons.ico/favicon-16x16.png">
    <link rel="manifest" href="main/assets/icons.ico/manifest.json">
    '.Yolk::uicore('cssa').'
    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="main/assets/icons.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
        <meta property="og:type" content="website">
        <meta property="og:url" content="ewusidanconsult.com">
        <meta property="og:title" content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
        <meta property="og:description"
            content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
        <meta property="og:image" content="main/assets/images/hero/2.jpg">
    
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="ewusidanconsult.com">
        <meta property="twitter:title" content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
        <meta property="twitter:description"
            content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
        <meta property="twitter:image" content="main/assets/images/hero/2.jpg">
    
    <link rel="stylesheet" href="wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    
    <link rel="stylesheet" href="wizard/vendor/date-picker/css/datepicker.min.css">
    
    <link rel="stylesheet" href="wizard/css/style.css">
    
    
    <meta name="robots" content="noindex, follow">
    </head>';
}
function scripts()
{
    echo '<script src="wizard/js/jquery-3.3.1.min.js"></script>

    <script src="wizard/js/jquery.steps.js"></script>
    '.Yolk::uicore('jsa').'
    <script src="processor/processor.js"></script>
    
    ';
}
