<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $c = 1;
            echo "Contagem Progressiva: <br>";
            while ($c <= 10) {
                echo $c . "<br>";
                $c ++;
            }
            echo "<br> Contagem Regressiva: <br>";
            $c = 10;
            while ($c >= 0) {
                echo $c. "<br>";
                $c --;
            }
            echo "<br> Contagem Regressiva pulando de 2 em 2 <br>";
            $c = 10;
            while ($c >= 0) {
                echo $c . "<br>";
                $c -= 2;
            }
        ?>
    </body>
</html>