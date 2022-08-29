<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tera $i anos. <br>";
            if ($i < 16){
                $tipoVoto = "não vota";
            }
            elseif (($i >= 16 && $i < 18) || ($i > 65)){
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "voto obrigatorio";
            }
            echo "Para essa idade, $tipoVoto!";
        ?>
    </body>
</html>