<?php
// Modified by InnovativeInventor to create a web app
  error_reporting(E_ALL);

  $page = "App";
  $title = "LanguageTool Online";
  $rootUrl = "";

  $enable_tablesorter = 0;
  $enable_fancybox = 1;
  $enable_textcheck = 1;
  $enable_download_dialogs = 1;

  include("../include/browser_language.php");
  $checkDefaultLang = getDefaultLanguage();
  $checkDefaultLangWithCountry = getDefaultLanguageAndCountry();
  //$checkDefaultLang = "en";  // comment in for testing

  $currentLang = 'en';
  
  $isProofreadingTest = false;
  /*if (isset($_COOKIE["proofreading_test"])) {
    $isProofreadingTest = $_COOKIE["proofreading_test"] == '1';
  } else if ($checkDefaultLang == 'en') {
    $cookieValue = time() % 2 == 1 ? "1" : "0";
    setcookie("proofreading_test", $cookieValue, time() + 60*60*24*365, "/");
    $isProofreadingTest = $cookieValue == '1';
  }*/
?>
<!doctype html>
<html lang=en>
  <head>
    <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-pro.png">
    
    <?php include("../include/header_web.php"); ?>
    <meta name="apple-mobile-web-app-title" content="LanguageTool">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <script>
    window.addEventListener("load", function(event) {
    console.log("Loading iOS view . . .");
    turnOnFullScreenView();
    });
    </script>
  </head>
  <body>
    <?php include("../include/partials/stage_head_web.php"); ?>
  </body>
</html>
