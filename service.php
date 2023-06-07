
<?php
    
    $testo = $_GET['paragrafo'];

    ?>

    <p>il testo é : <br> <?php echo $testo ?> </p>
    <span>lunghezza testo: <?php echo strlen($testo) ?> </span>

    <hr>

    <p>il testo censurato é : <br> <?php echo str_replace("ciao", "***", $testo)?> </p>
    <span>lunghezza testo: <?php echo strlen($testo) ?> </span>
