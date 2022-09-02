<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            function soma($a, $b) {
                $s = $a + $b;
                return $s;
            }

            function soma2($a, $b) {
                return $a + $b;
            }

            $x = 3;
            $y = 4;
            $r = soma($x, $y);
            echo "<p>A soma entre $x e $y é igual a $r</p>";
            
            $x = -4;
            $y = 8;
            $r = soma($x, $y);
            echo "<p>A soma2 entre $x e $y é igual a $r</p>";
        ?>
    </body>
</html>