<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $c = 1;
            do {
                echo $c." ";
                $c += 1;
            } while ($c <= 10);
            echo "<br>";
            $c = 10;
            do {
                echo $c." ";
                $c -= 1;
            } while ($c >= 1);
        ?>
    </body>
</html>