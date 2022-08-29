<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = pow($n, 3);
                    break;
                case 3:
                    $r = sqrt($n);
                    break;
            }
            echo "O resultado da operacao com o numero $n solicitada foi $r";
        ?>
        <br>
        <a href='01exercicio.html'>Voltar</a>
    </body>
</html>