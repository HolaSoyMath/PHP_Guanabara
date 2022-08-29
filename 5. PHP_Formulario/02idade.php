<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:"[Não informado]";
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";
            $idade = (date("Y") - $ano) - 8;
            echo "$nome e $sexo e tem $idade anos.";
        ?>
        <a href="02exercicio.html">Voltar</a>
    </body>
</html>