<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $m = ($n1 + $n2) / 2;
            if ($m < 5){
                $s = "REPROVADO!";
            }
            elseif ($m >= 5 && $m <7){
                $s = "RECUPERAÇÃO!";
            }
            else {
                $s = "APROVADO!";
            }
            echo "A média entre $n1 e $n2 é igual a $m<br>";
            echo "Situação do aluno: $s";
        ?>
    </body>
</html>