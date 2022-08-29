<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Calculo Raiz</title>
    </head>
    <body>
    	<?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "A raíz de $valor é igual a ". number_format($rq, 2);
        ?>
        <a href="01exercicio.html"> Voltar</a>
    </body>
</html>