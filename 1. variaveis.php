<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Primeiro exemplo PHP</title>
        <style>
        	h2{
            	color: #80a2ff;
                text-shadow: 1px 1px 1px black;
                }
        </style>
    </head>
    <body>
        <h1>Testando PHP</h1>
        <?php
        	$nome = "Maria"; # As variáveis devem começar com o símbolo de "$"
            $idade = 18; # As variáveis devem começar com o símbolo de "$"
      		echo "<h2>Olá, <br>Mundo!</h2>"; # o "print" na tela deve ser utilizando o comando "Echo"
            echo "$nome tem $idade anos!<br>"; # Para concatenar uma string com variável, deve ser utilizada Áspas Duplas, e ecrever normalmente a frase desejada colocando as variáveis onde preferir
            echo '$nome tem $idade anos!<br>'; # Caso utilize aspas simples, a frase aparecerá exatamente como voce tenha escrito
            echo "$nome tem $Idade anos!"; # PHP é CaseSensitive, caso utiliza uma letra miúscula na variável, e a msm contem apenas minúsculas, terá um problema na hora de printar. DICA: Utilize smepre minusculas.
        ?>
    </body>
</html>