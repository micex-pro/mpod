<?php
  $public_ip = $_SERVER['REMOTE_ADDR'];
  $current_date = date("Y/m/d");
  date_default_timezone_set('Asia/Jerusalem');
  $current_time = date("H:i:s");
  
  $host = 'databse host';
  $dbname = 'databsae name';
  $username = 'databsae access username';
  $password = 'databsae access password';

  $MySQLdb = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	$MySQLdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $cursor = $MySQLdb->prepare("INSERT INTO status_code (status_code, remote_address, date, time) value (:sc, :ra, :d, :t)");
  $cursor->execute(array(":sc"=>"500", ":ra"=>$public_ip, ":d"=>$current_date, ":t"=>$current_time));
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Start Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./assets/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="./assets/favicon/site.webmanifest" />
    <!-- End Favicon -->
    <!-- Start SEO -->
    <title>MiceX.Pro | 500</title>
    <meta name="Author" content="MiceX.Pro" />
    <meta name="description" content="MiceX.Pro 500" />
    <meta name="keywords" content="MiceX, MiceX.Pro, 500" />

    <!-- Start Social Media -->
    <meta property="og:title" content="MiceX.Pro | 500" />
    <meta property="og:description" content="MiceX.Pro 500" />
    <meta
      property="og:image"
      content="https://mpod.micex.pro/assets/images/MiceX-logo.png"
    />
    <meta property="og:url" content="https://mpod.micex.pro/index.html" />
    <!-- End Social Media -->
    <!-- Start Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="MiceX.Pro | 500" />
    <meta name="twitter:description" content="MiceX.Pro 500" />
    <meta
      name="twitter:image"
      content="https://mpod.micex.pro/assets/images/MiceX-logo.png"
    />
    <meta name="twitter:url" content="https://mpod.micex.pro/index.html" />
    <!-- End Twitter -->
    <!-- End SEO -->

    <!-- Start Local CSS -->
    <link rel="stylesheet" href="./assets/css/normilize.css" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/error-page.css" />
    <!-- End Local CSS -->

    <!-- Start External CSS -->
    <!-- End External CSS -->

    <!-- Start Font Awesome - Icons -->
    <link
      rel="stylesheet"
      href="./assets/icons/fontawesome-free-6.2.1-web/css/all.min.css"
    />
    <!-- End Font Awesome - Icons -->

    <!-- Start Google AdSense-->
    <script
      async
      src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7304733661848551"
      crossorigin="anonymous"
    ></script>
    <!-- End Google AdSense-->

    <!-- Start Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-V1D1ZNHVRJ"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-V1D1ZNHVRJ");
    </script>
    <!-- End Google Analytics -->
  </head>
  <body>
    <!-- Start Of 500 -->
    <section class="section">
      <div class="section-content">
        <img src="./assets/images/errors/500.png" alt="MiceX.Pro" />
        <a class="btn btn-hollow" href="https://mpod.micex.pro">go back</a>
      </div>
    </section>
    <!-- End Of 500 -->
    <!-- Start Local JS Files -->
    <script src="./assets/js/smoothScrolling.js"></script>
    <script src="./assets/js/cookie.js"></script>
    <script src="./assets/js/sideBar.js"></script>
    <script src="./assets/js/passwordStandardsValidation.js"></script>
    <script src="./assets/js/passwordVisibility.js"></script>
    <script src="./assets/js/pressedKeyboardKeys.js"></script>
    <script src="./assets/js/confirmedPassword.js"></script>
    <!-- End Local JS Files -->
    <!-- Start External JS Files -->
    <!-- End External JS Files -->
  </body>
</html>
