<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $v = isset($_GET['val'])?$_GET['val']:1;
            echo "<h1>Calculando o Fatorial de $v</h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c -= 1;
            }while($c >= 1);
            echo "<h2>$v ! = $fat</h2>";
        ?>
        <p><a href="02exercicio.html">Voltar</a></p>
    </body>
</html>