<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            include "funcoes.php"; # Incluir outros arquivos e puxar suas funções
            echo "<h1>Testando novas funcoes</h1>";
            ola();
            mostraValor(4);
            echo "<h2>Finalizando programa...</h2>";

            echo "<hr>";

            require "funcoes2.php";
            echo "<h1>Testando novas funcoes</h1>";
            ola();
            mostraValor(4);
            echo "<h2>Finalizando programa...</h2>";

            /* 
                A diferença entre o Include e o Require é:
                Include --> Ele tenta incluir o arquivo, caso nao exista
                            ou então esteja corrompido, ele SEGUE com o programa.
                Require --> Ele tenta incluir o arquivo, caso nao exista
                            ou então esteja corrompido, ele INTERROMPE com o programa
            */

            /*
                Tambem temos o comando "include_once" e o "require_once"
                onde a diferença deles para os outros é de que caso seja
                utilizado os anteriores, toda vez que utilizarmos o comando
                ele carrega o arquivo para o programa, se usar 2 vezes, importa 
                o arquivo 2 vezes.
                Caso tenha sua derivada "once" ele verifica se ja carregou o arquivo
                uma vez, caso ja tenha carregado, nao carrega de novo e segue o baile.
            */
        ?>
    </body>
</html>