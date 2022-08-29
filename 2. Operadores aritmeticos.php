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
          $n1 = 3;
          $n2 = 2;
          $m = ($n1 + $n2) / 2;
          
          # Soma
          $s = $n1 + $n2;
          echo "A soma entre $n1 e $n2 vale $s";
          echo "<br>A soma vale ". ($n1+$n2);
          
          # Subtração
          $s = $n1 - $n2;
          echo "<br><br>A subtração entre $n1 e $n2 vale $s";
          echo "<br>A subtração vale ". ($n1-$n2);
          
          # Multiplicação
          $s = $n1 * $n2;
          echo "<br><br>A multiplicação entre $n1 e $n2 vale $s";
          echo "<br>A multiplicação vale ". ($n1*$n2);
          
          # Divisão
          $s = $n1 / $n2;
          echo "<br><br>A divisão entre $n1 e $n2 vale $s";
          echo "<br>A divisão vale ". ($n1/$n2);
          
          # Módulo
          $s = $n1 % $n2;
          echo "<br><br>A módulo entre $n1 e $n2 vale $s";
          echo "<br>A módulo vale ". ($n1%$n2);
          
          # Média
          echo "<br><br>A média vale $m";
          
          # É possível pegar valores direto da URL por exemplo:
          # localhost/aula05/operadores.php?a=3&b=2
          # Ao passar os parametros pela URL para conseguir pegar eles e atribuir a uma veriável podemos utilizar a seguinte sintaxe:
          # $n1 = $_GET["a"];
          # $n1 = $_GET["b"];
          
          ########## FUNÇÕES MATEMÁTICAS
          
          $v1 = 4;
          $v2 = -3;
          
          # Valor absoluto = Transforma o valor em positivo
          echo "<br>O valor absoluto de $v2 é ". abs($v2);
          
          # Potenciação
          $v1 = 4;
          $v2 = 3;
          echo "<br><br>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2); #Tag "sup" faz o numero virar de 2 para ²
          # Raíz Quadrada
          echo "<br><br>A raíz de $v1 é ". sqrt($v1);
          
          # Arredondamento
          $v2 = 3.4;
          echo "<br><br>O valor arredondado de $v2 é ". round($v2); # Ao utilizar o Round, até 0.4 ele arredonda pra cima, de 0.5 pra cima ele arredonda pra cima.
          echo "<br>O valor arredondado de $v2 é ". ceil($v2); # Caso utilize a função "ceil", ele sempre arrendondará para cima.
         echo "<br>O valor arredondado de $v2 é ". floor($v2); # Caso utilize a função "floor", ele sempre arrendondará para baixo.
          
          # Parte inteira de um numero real
          echo "<br><br>A parte inteira de $v2 é ". intval($v2);
          
          # Formatação de numeros
          echo "<br><br>O valor de $v1 em moeda é R$". number_format($v1, 2); # Inserir o valor e quantas casas decimais quer ter.
          $v1 = 4000;
          echo "<br>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", "."); # Caso queira difinir os separadores, pode inserir mais 2 parametros, o primeiro sendo o separador de casas decimais e o segundo como separador de milhar
          
        ?>
    </body>
</html>

