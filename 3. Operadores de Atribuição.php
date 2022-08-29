<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Primeiro exemplo PHP</title>
        <style>
        	h2{
            	color: #171559;
                font: 12pt Arial;
                }
        </style>
    </head>
    <body>
    	<?php
          # De um aumento de 10% no valor de um produto
          $valor = 1000;
          $valor += ($valor*10/100);
          echo "O valor final é de R$". number_format($valor, 2, ",", ".");
          
          # De um desconto de 10% no valor de um produto
          $valor = 1000;
          $valor -= ($valor*10/100);
          echo "<br>O valor final é de R$". number_format($valor, 2, ",", ".");
          
          ## Operadores de incremento
          ## São operadores que aumentam em 1 o valor da variavel
          
          # Pré Incremento --> Primeiro faz o Incremento na variável, e depois utiliza ela.
          # $a = 1;
          # ++a;
          
          # Pós Incremento --> Primeiro faz o uso da variável, e depois incrementa o valor.
          # $a = 1;
          # a++;
          
          # Pré Decremento --> Primeiro faz o Decremento na variável, e depois utiliza ela.
          # $a = 1;
          # --a;
          
          # Pós Decremento --> Primeiro faz o uso da variável, e depois decrementa o valor.
          # $a = 1;
          # a--;
          
          ## Qual o ano anterior ao ano atual
          $atual = 2014;
          echo "<br><br>O ano atual é $atual e o ano anterior é ". --$atual;
          echo "<br>O ano atual é $atual e o ano anterior é ". $atual--;
          echo "<br>Após o decremento o valor do ano seria de $atual<br>";
          
          ## Variáveis referenciadas
          # Sem referenciar
          $a = 3;
          $b = $a;
          $b += 5;
          echo "<br>Valor de A sem referenciar $a";
          echo "<br>Valor de B sem referenciar $b<br>";
          
          # Referenciando
          $a = 3;
          $b = &$a;
          $b += 5;
          echo "<br>Valor de A sem referenciar $a";
          echo "<br>Valor de B sem referenciar $b<br>";
          
          /* Note que no segundo exemplo, as duas variáveis alteraram seu valor, já no primeiro exemplo tivemos apenasa mudança de B.
          Isso acontece porque no segundo exemplo foi vinculada as 2 variáveis, quando o valor de uma mudar, a outra muda automaticamente, seria como se as 2 variaveis fossem a mesma basicamente.
          */
          
          ## Variável de  variáveis
          $x = "ABC";
          $$x = "DEF";
          echo "<br>O conteudo da variavel X é $x";
          echo "<br>A variável criada recebeu o valor $ABC<br>";          
          /* A variável ed variáveis, nesse caso, cria uma variavel "$x" com o conteúdo ABC.
          Sendo assim, quando usamos $$x quer dizer que vamos pegar o resultado dessa variável (ABC) e vamos dar o nome de uma nova variável de ABC, sendo assim é possível colocar novos valores nessa variável cujo nome atual é ABC.          
          */
          
        ?>
    </body>
</html>

