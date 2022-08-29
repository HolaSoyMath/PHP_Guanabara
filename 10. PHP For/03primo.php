<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $num = isset($_GET['num']) ? $_GET['num'] : 1;
            $tot = 0;
            echo "<h1>Analisando o número $num</h1>";
            echo "Valores múltiplos: ";
            for ($c = 1; $c <= $num; $c++) {
                if ($num % $c == 0) {
                    echo "$c ";
                    $tot += 1; 
                }
            }
            echo "<br>Total de múltiplos: $tot";
            if ($tot <= 2) {
                $txt = "É PRIMO!";
            }
            else {
                $txt = "NÃO É PRIMO!";
            }
            echo "<br>Resultado: $num $txt";
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </body>
</html>