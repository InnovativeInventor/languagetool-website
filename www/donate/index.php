<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Donate to LanguageTool";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h2>Donate by Credit Card or PayPal</h2>

    <p>LanguageTool is looking for donations to improve its language checking capabilities and to make the service on languagetool.org more stable by adding more servers.</p>

    <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/extend-languagetool?recurring=true&hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px" seamless="seamless" id="dbox-form-embed" name="donorbox" frameborder="0" scrolling="no"></iframe>
    
    <h2>Donate by Wire Transfer</h2>

    <p>If you live in the eurozone you can wire transfer your donation directly via SEPA.
    If you're outside the eurozone, please donate by credit card or PayPal instead (see above)
    to avoid high fees.</p>
    
    <table>
        <tr>
            <td>IBAN</td>
            <td>&nbsp;</td>
            <td>DE89 4306 0967 8028 2887 03</td>
        </tr>
        <tr>
            <td>BIC</td>
            <td></td>
            <td>GENODEM1GLS</td>
        </tr>
        <tr>
            <td>Reference / Verwendungszweck</td>
            <td></td>
            <td>LanguageTool donation</td>
        </tr>
    </table>

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
