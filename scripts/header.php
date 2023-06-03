<?php
    function CreateHTMLHead($page, $title, $page_css){
        return '
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="apple-touch-icon" sizes="180x180" href="https://mpod.micex.pro/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://mpod.micex.pro/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://mpod.micex.pro/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="https://mpod.micex.pro/assets/favicon/site.webmanifest">

<title>MiceX.Pro | ' . $title . '</title>

<meta name="Author" content="MiceX.Pro" />
<meta
    name="description"
    content="Best Premade CSS & HTML designs for modern websites. Made with love from the MiceX.Pro team."
/>
<meta
    name="keywords"
    content="MiceX, MiceX.Pro, mpod, MPod, css designs, html designs, css default Starter, premade designs, css, html"
/>

<link rel="canonical" href="https://mpod.micex.pro/' . $page . '" />

<meta property="og:title" content="MiceX.Pro | ' . $title . '" />
<meta
    property="og:description"
    content="Best Premade CSS & HTML designs for modern websites. Made with love from the MiceX.Pro team."
/>
<meta
    property="og:image"
    content="https://mpod.micex.pro/assets/images/MiceX-logo.png"
/>
<meta property="og:url" content="https://mpod.micex.pro/' . $page . '" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="MiceX.Pro | ' . $title . '" />
<meta
    name="twitter:description"
    content="Best Premade CSS & HTML designs for modern websites. Made with love from the MiceX.Pro team."
/>
<meta
    name="twitter:image"
    content="https://mpod.micex.pro/assets/images/MiceX-logo.png"
/>
<meta name="twitter:url" content="https://mpod.micex.pro/' . $page . '" />

<link rel="stylesheet" href="https://mpod.micex.pro/assets/css/global.css" />
<link rel="stylesheet" href="https://mpod.micex.pro/assets/css/' . $page_css . '" />
<link rel="stylesheet" href="https://mpod.micex.pro/assets/css/cookie.css" />

<link rel="stylesheet" href="https://mpod.micex.pro/assets/icons/fontawesome-free-6.2.1-web/css/all.min.css">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7304733661848551"
    crossorigin="anonymous"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-V1D1ZNHVRJ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag(\'js\', new Date());

    gtag(\'config\', \'G-V1D1ZNHVRJ\');
</script>
        ';
    }
?>