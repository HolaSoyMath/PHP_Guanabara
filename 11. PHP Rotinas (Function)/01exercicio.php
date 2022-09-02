<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            function soma ($a, $b) {
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
            }

            function subtracao($a, $b) {
                $s = $a - $b;
                return $s;
            }

            soma(3, 4);
            soma(8, 2);
            $x = 9;
            $y = 15;
            soma($x, $y);

            $resp = subtracao($y, $x);
            echo "<p>A subtração vale $resp</p>";
        ?>
    </body>
</html>