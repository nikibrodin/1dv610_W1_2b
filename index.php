<?php

    require_once("SoftwareMetrics.php");
    require_once("MetricsView.php");

    $phpCode = $_POST["phpCode"];

    $metrics = new SoftwareMetrics($phpCode);

    $view = new MetricsView($metrics);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8'>
        <title>Software Metrics</title>
    </head>
    <body>
        <form action="" method="post">
            <textarea name="phpCode" rows="10" cols="30">Some PHP-code.</textarea>
            <input type="submit">
        </form>
        <?php
		    //show metrics
		    $view->show();
		?>
    </body>
</html>
