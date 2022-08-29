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
        	## Operador Unário
            ## Permitir que o usuario some ou multiplique dois numeros escolhendo um parametro
            # Comparando com o símbolo de "Igual"
            $n1 = $_GET["a"];
            $n2 = 3;
            $tipo = "m";
            echo "Os valores passados foram $n1 e $n2 <br>";
            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; ## OPERADOR UNÁRIO (COMO SE FOSSE UM IF EM UMA LINHA SÓ)
            echo "O resultado será $r";
            
            # Comparando com o símbolo de "Identico"
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "SIM" : "NÃO"; ## OPERADOR UNÁRIO (COMO SE FOSSE UM IF EM UMA LINHA SÓ)
            echo "<br>As variáveis A e B são iguais?  $r";
            $r = ($a === $b) ? "SIM" : "NÃO"; ## OPERADOR UNÁRIO (COMO SE FOSSE UM IF EM UMA LINHA SÓ)
            echo "<br>As variáveis A e B são identicas?  $r<br>";
            /*
            A diferença entre os comparadores Iguais e Identicos seguindo o exemplo dado acima são as seguintes:
            Igual: Caso eu tenha o valor INT(3) e STR("3") ele ve se os valores são iguais, independente do tipo. Nesse caso, a resposta é True
            Identico: Caso eu tenha o valor INT(3) e STR("3") ele ve se os valores e os tipos são iguais. Nesse caso, a resposta é False
            */
            
            ## Mostrar a situação de um aluno, de acordo com a média obtida
            $nota1 = 5;
            $nota2 = 2;
            $m = ($nota1+$nota2)/2;
            echo "<br>A media entre $nota1 e $nota2 é $m";
            $sit = ($m<6)?"REPROVADO":"APROVADO";
            echo "<br>A situação do aluno é $sit";
            # OBS: para economizar linha de cógigo, podemos concatenar diretamente o operador utário no final
            echo "<br>A situação do aluno é ".(($m<6)?"REPROVADO":"APROVADO"); #Não esquecer de colocar tudo entre parenteses
            
            ## Mostrar se um eleitor é obrigado a votar ou não
            $ano = 1900;
            $idade = 2014 - $ano;
            echo "<br><br>Quem nasceu em $ano tem $idade anos.";
            $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
            echo "<br>Dessa forma seu voto é $tipo";
            
            
        ?>
    </body>
</html>