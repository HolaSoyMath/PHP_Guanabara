<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $val = isset($_GET['num']) ? $_GET['num'] : 1;
            echo "<h1>Mostrando a Tabuada de $val</h1>";
            $c = 1;
            do {
                $vlr = $val * $c;
                echo "$val X $c = $vlr<br>";
                $c++;
            }while ($c <= 10);
        ?>
        <br>
        <a href="03exercicio-index.php">Voltar</a>
    </body>
</html>