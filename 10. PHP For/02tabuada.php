<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 1;
            for ($c=1; $c <= 10; $c++) {
                $r = $c * $n;
                echo "$n X $c = $r<br>";
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </body>
</html>