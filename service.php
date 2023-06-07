
<?php
    
    $testo = lcfirst($_GET['paragrafo']);
    $censura = lcfirst($_GET['censura']);

    ?>

    <p>il testo é : <br> <?php echo $testo ?> </p>
    <span>lunghezza testo: <?php echo strlen($testo) ?> </span>

    <hr>

    <p>il testo censurato é : <br> <?php echo str_replace($censura, "***", $testo)?> </p>
    <span>lunghezza testo: <?php echo strlen($testo) ?> </span>
