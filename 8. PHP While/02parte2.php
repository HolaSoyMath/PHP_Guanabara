<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                $i++;
            }

            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                echo "Valor $i : " . $$v . "<br>";
                $i++;
            }
        ?>
    </body>
</html>