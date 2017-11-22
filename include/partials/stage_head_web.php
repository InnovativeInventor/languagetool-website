<?php include("banner.php"); 
// Modified by InnovativeInventor to create a web app
?>
<div id="stage" class="start">
  <div class="inner">
    <div id="text">
        <p>Welcome to the LanguageTool web app made by Innovative Inventor!
            <br>
            <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Chrome/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
            <?php } else if (strpos($_SERVER['HTTP_USER_AGENT'], "Firefox/") !== false && strpos($_SERVER['HTTP_USER_AGENT'], "Android") === false) { ?>
            <?php } ?>
        </p>
    </div>
    <div id="editor">
      <div class="inner">
        <?php
          if (isset($isProofreadingTest) && $isProofreadingTest) {
            $checkSubmitButtonValue = "Basic Check";
          } else {
            $checkSubmitButtonValue = "Check Text";
          }
          $checkSubmitButtonTitle = "Check text - you can also use Ctrl+Return";
          include("../include/checkform_web.php");
        ?>
        <div id='maintainedInfo' class='languageHomepage'></div>
        <div id='languageInfo' class='languageHomepage'></div>
      </div>
      <div id="text2">
      </div>
      <?php include("sub-checkform.php"); ?>
    </div>
  </div>
