<?php
    function pular() {
        echo "<br>";
    }

    function titulo($v){
        echo "<hr>";
        echo "<h3><strong>$v</strong></h3>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            ########### PRINTF
            titulo("printf");
            $p = "Leite";
            $pr = 4.5;
            printf("O %s custa R$%.2f", $p, $pr);
            /* O printf serve para colocar o valor das variaveis na frase
            como se fosse o .format do python
            Deve ser colocada com o "%s" para string e o "%.2f"é para 
            colocar um numero float com 2 casas decimais.
            %d --> Valor decimal (inteiro)
            %u --> Mostra apenas o valor inteiro positivo (Módulo)
            %f --> Mostra o valor com virgula
            %s --> Mostra String
            */

            ########### PRINT_R
            titulo ("print_r");
            $x[0] = 4;
            $x[1] = 8;
            $x[2] = 3;
            print_r($x);
            pular();
            var_dump($x);
            pular();
            var_export($x);
            pular();
            $x2 = array(3,7,6,2,1,9);
            print_r($x2);
            /* Serve para printar um vetor ou matriz.
            Bom para realizar testes, já que ele nao é uma forma
            muito bonita de ser apresentada.
            Existe tambem o:
            print_r --> Array ( [0] => 4 [1] => 8 [2] => 3 )
            var_dump --> array(3) { [0]=> int(4) [1]=> int(8) [2]=> int(3) }
            var_export --> array ( 0 => 4, 1 => 8, 2 => 3, )
            */

            ########### WORDWRAP
            titulo("wordwrap");
            $txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
            $res = wordwrap($txt, 20, "<br>\n", false);
            echo($res);

            /* Faz a quebra do texto com o numero de caracteres desejados
            porém a quebra acontece apenas no código fonte da página.
            Para que apareça a quebra para o cliente, ou seja, na tela em si
            é preciso colocar o parâmetro de quebra de linha do html
            que seria o parametro do "<br>".
            Deixando apenas o "<br>" temos apenas na parte visual essa quebra,
            se quisermos deixar a quebra tambem na parte do codigo fonte
            precisamos tambem colocar o "\n" junto.
            O True ou False serve para indicar se queremos que a quebra 
            das palavras aconteça contando os caracteres apenas (FALSE) ou
            se pode acontecer de usar o tamanho das palavras em si, deixando
            por exemplo "Funcionamento" inteiro na frase, mesmo tendo mais de 
            5 letras (TRUE).
            */

            ########### STRLEN
            titulo("strlen");
            $txt = "Curso em Video";
            $tamanho = strlen($txt);

            echo "O tamanho do texto '$txt' é de $tamanho letras";
            /* Serve para saber o tamanho da String selecionada.
            OBS: Ao colocar uma string com acento, pode ser que o programa
            leia esse caractere como 2, ficar atento a esse problema.
            */

            ########### TRIM
            titulo("trim");
            $nome = "   Jose da Silva   ";
            echo "A string nome ($nome) contem " . (strlen($nome)) . " caracteres";
            pular();
            $novo = trim($nome);
            echo "Após passar pelo tratamento de Trim a string novo ($novo) contem " . strlen($novo) . " caracteres.";

            /* Serve para retirar os espaçoes no começo e no final da frase
            Existem tambem as variações:
            ltrim --> Retira o espaço no início.
            rtrim --> Retira o espaço no final.
            */

            ########### STR_WORD_COUNT
            titulo("str_word_count");
            $frase = "Eu vou estudar PHP";
            $cont = str_word_count($frase, 0);
            echo "Parâmetro 0: $cont";
            pular();
            $cont = str_word_count($frase, 1);
            print_r($cont);
            pular();
            $cont = str_word_count($frase, 2);
            print_r($cont);

            /* Serve para poder contar a quantidade de palavras em uma String
            Essa função contem um parametro onde podemos colocar 0,1,2:
            0 --> conta as palavras e retorna o valor
            1 --> Transforma em um Array, sendo assim devemos usar o print_r (Indica a palavra e o seu índice dentro do array).
            2 --> Transforma em um Array, sendo assim devemos usar o print_r (Indica a palavra e o numero da posição de inicio de cada palavra)            
            */

            ########### EXPLODE
            titulo("explode");
            $site = "Curso em Video";
            $vetor = explode(" ", $site);
            print_r($vetor);
            /* Serve para explodir uma string, onde podemos definir o que dividirá essa string
            e jogará cada parte em um Array
            */

            ########### STR_SPLIT
            titulo("str_split");
            $nome = "Maria";
            $vetor = str_split($nome);
            print_r ($vetor);
            /* Pega cada letra de uma string e coloca em um índice do Array 
            */

            ########### IMPLODE
            $vetor = null;
            titulo("implode");
            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Video";
            $texto = implode("#", $vetor);
            print($texto);
            /* Para pegar um vetor e juntar em unico texto utilizamos a função Implode.
            Podemos utilizar tamém a função "Join".
            */

            ########### CHR
            titulo("chr");
            $letra = chr(67);
            echo "A letra de codigo 67 é $letra";
            /* Transforma o código ASCII de um caractere em Letra para o usuário
            */

            ########### ORD
            titulo("ord");
            $letra = "C";
            $cod = ord($letra);
            echo "A letra $letra tem o código $cod";
            /* Transforma um caractere em seu código ASCII
            */

            ########### STRTOLOWER
            titulo("strtolower");
            $nome = "Gustavo Guanabara";
            echo "Seu nome é ". strtolower($nome);
            /* Converte a string toda em letras minúsculas
            */

            ########### STRTOUPPER
            titulo("strtoupper");
            $nome = "Gustavo Guanabara";
            echo "Seu nome é ". strtoupper($nome);
            /* Converte a string toda em letras maiúsculas
            */

            ########### UCFIRST
            titulo("ucfirst");
            $nome = "Gustavo Guanabara";
            echo "Seu nome é ". ucfirst($nome);
            pular();
            $nome = "Gustavo GuanaBAra";
            echo "Seu nome é ". ucfirst($nome);
            pular();
            echo "OBS: Caso queira deixar apenas a primeira letra da frase maiúscula, poderá juntar a ucfirts com a strtolower.<br>";
            echo "Seu nome é ". ucfirst(strtolower($nome));
            /* Converte a primeira letra da frase em maiúscula
            OBS: Caso tenha outras letras em maiusculo no meio da frase
            IRÁ MANTER EM MAIÚSCULA.
            */

            ########### UCWORDS
            titulo("ucwords");
            $nome = "gustavo guanaBAra";
            echo "Seu nome é ". ucwords($nome);
            pular();
            echo "OBS: Caso queira deixar a primeira letra de cada palavra maiúscula, como um nome por exemplo, poderá juntar a ucwords com a strtolower.<br>";
            echo "Seu nome é ". ucwords(strtolower($nome));
            /* COnverte a primeira letra de cada palavra maiúscula.
            OBS: as outras mantéma  formatação original, se estiver minuscula, 
            mantém minuscula, se estiver maiuscula mantem maiuscula
            */

            ########### STRREV
            titulo("strrev");
            $nome = "Gustavo Guanabara";
            echo "Seu nome ao contrário é ". strrev($nome);
            /* Inverte uma string
            */

            ########### STRPOS
            titulo("strpos");
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "$frase<br>A string foi encontrada na posição $pos";
            /* Mostra qual a posição do inicio da frase
            OBS: a função É case sensitive
            */

            ########### STRIPOS
            titulo("stripos");
            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase, "php");
            echo "$frase<br>A string foi encontrada na posição $pos";
            /* Mostra qual a posição do inicio da frase
            OBS: a função NÃO É case sensitive
            */

            ########### SUBSTR_COUNT
            titulo("substr_count");
            $frase = "Estou aprendendo PHP no Curso em Video de PHP";
            $cont = substr_count($frase, "PHP");
            echo "A string PHP foi encontrada $cont vezes";
            /* COntar quantas vezes a String X foi encontrada na frase
            */

            ########### SUBSTR
            titulo("substr");
            $site = "Curso em Video";
            $sub = substr($site, 0, 5);
            echo "$sub";
            pular();
            $sub = substr($site, 5);
            echo "$sub";
            pular();
            $sub = substr($site, -5);
            echo "$sub";
            pular();
            $sub = substr($site, -5, 2);
            echo "$sub";
            /* Pega uma parte dos caracteres da string
            Pega a string $site e a partir da string 0 anda 5 casas.
            Caso coloque apenas a variável e um numero, ele pega daquela letra em diante
            Colocando um valor negativo ele pega as ultimas X letras
            Colocando um valor negativo e um valor depois, ele pega as ultimas X letras e anda Y casas da string tambem
            */

            ########### STR_PAD
            titulo("str_pad");
            $nome = "Guanabara";
            $novo = str_pad($nome, 30, "x", STR_PAD_BOTH);
            echo "Meu professor $novo é lindo";
            /* Aqui conseguimos dizer que a string vai ocupar XX espaço:
            param1 = Valor que sera colocado
            param2 = quantidade de caracteres que serão ocupados
            param3 = o que sera colocado para preencher ?
            param4 = sera incluido a direita (Right), na esquerda (Left) ou a palavra ficara no meio (Both))
            */

            ########### STR_REPEAT
            titulo("str_repeat");
            $txt = str_repeat("Php", 5);
            print ("O texto gerado foi $txt");
            pular();
            print(str_repeat("-", 20));
            /* Repete a frase X umero de vezes
            */

            ########### STR_REPLACE
            titulo("str_replace");
            $frase = "Gosto de estudar Matemática!!!";
            $novafrase = str_replace("Matemática", "PHP", $frase);
            echo "Frase original: '$frase'";
            pular();
            echo "Frase modificada: '$novafrase'";
            /*Substitui uma palavra na frase original
            */

            ########### STR_REPLACE
            titulo("str_ireplace");
            $frase = "Gosto de estudar Matemática!!!";
            $novafrase = str_replace("matemática", "PHP", $frase);
            echo "Frase original: '$frase'";
            pular();
            echo "Frase modificada: '$novafrase'";
            pular();
            echo "<strong>A frase nao foi modificada pois nao encontrou 'matematica' como colocamos, para isso usamos a função 'str_ireplace'</strong>";
            pular();
            $novafrase = str_ireplace("matemática", "PHP", $frase);
            echo "Frase modificada: '$novafrase'";
            /*Substitui uma palavra na frase original
            */

        ?>
    </body>
</html>