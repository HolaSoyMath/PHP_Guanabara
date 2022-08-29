<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            for($c = 1; $c <= 10; $c++) {
                echo "$c ";
            }
            echo "<br>";
            for ($i = 10; $i >= 1; $i--) {
                echo "$i ";
            }
            echo "<br>";
            for ($c = 0; $c <= 50; $c += 5) {
                echo "$c ";
            }
            echo "<br>";
            for ($c = 20; $c >= 0; $c -= 2) {
                echo "$c ";
            }
        ?>
    </body>
</html>