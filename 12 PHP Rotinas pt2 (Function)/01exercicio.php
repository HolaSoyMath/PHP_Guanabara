<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            ###### Passagem de valor por VALOR
            # Quando passamos apenas o valor, significa que criamos uma cópia da variável
            # que passamos como parâmetro, e realizamos contas com uns valores "cópia"
            # O que "não altera em nada" no programa principal.
            function teste($x) {
                $x += 2;
                echo "<p>O valor de X é $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a</p>";

            echo "<hr>";

            ###### Passagem de valor por REFERENCIA
            # Quando passamos algo por referencia, significa que estamos passando
            # a própria variável para a Function.
            # Sendo assim, o valor da própria VARIAVEL muda no programa principal.
            function teste2(&$x) {
                $x += 2;
                echo "<p>O valor de X é $x</p>"; 
            }

            $b = 3;
            teste2($b);
            echo "<p>O valor de B é $b</p>";

        ?>
    </body>
</html>