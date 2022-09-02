<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            function soma() {
                $p = func_get_args(); # Cria um vetor com todos os parametros passados.
                $tot = func_num_args(); # Verificar o total de valores presentes no parametro passado.
                $s = 0;
                for ($i=0; $i<$tot; $i++) {
                    $s += $p[$i];
                }
                return $s;
            }

            $res = soma(3, 4, 8, 1, 2);
            echo "<p>Soma dos valores é de $res</p>";

            ######################################
            ### Exercicio de soma com multiplos parametros

            function somando(){
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i = 0; $i < $t; $i++) {
                    $s += $p[$i];
                }
                return $s;
            }

            $resposta = somando(3, 5, 2);
            echo "A soma dos valores é $resposta";

        ?>
    </body>
</html>