<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
        <pre> 
            <?php
                echo "<h3><strong>Criando array com a função 'Array'</strong></h3>";
                $n = array(3, 5, 8, 2); # Criando o Array
                $n[] = 7; # Adicionando um novo item no Array
                print_r ($n); # Printando o array

                echo "<hr>";
                echo "<h3><strong>Criando array com a função 'Range'</strong></h3>";

                $c = range(5,20,5); #Criar um array com inicio, fim e passo
                print_r ($c);

                echo "<h3><strong>Mostrando os valores do array de forma organizada.</strong></h3>";

                foreach ($c as $valor){
                    echo "$valor ";
                }
            ?>
            <!--########## Mostrar em formato de tabela ########### -->
            <table border="1"><tr>
                <?php
                    $c = range(5, 20, 2);
                    foreach ($c as $v){
                        echo "<td>$v ";
                    }
                ?>
            </tr>

            <hr>
            <?php
                echo "<h3><strong>Criando chaves personalizadas.</strong></h3>";
                $v = array (1=>"A", 3=>"B", 6=>"C", 8=>"D");
                $v[] = "E";
                print_r ($v);
                echo "<h3><strong>Excluindo um índice.</strong></h3>";
                unset($v[3]);
                print_r ($v);
            ?>
            <hr>
            <?php
                echo "<h3><strong>Chaves associativas.</strong></h3>";
                $cad = array("nome" =>"Ana",
                            "Idade" =>3,
                            "peso" =>78.5);
                print_r ($cad);
                echo "<h3><strong>Acresentando nova chave.</strong></h3>";
                $cad["fuma"] = true;
                $cad["estuda"] = "sim";
                print_r ($cad);
                echo "<h3><strong>Foreach an estrutura.</strong></h3>";
                foreach ($cad as $campo => $valor) {
                    echo "<p>O valor de $campo é $valor</p>";
                }
                echo "<hr>";
                echo "<h3><strong>Matriz em PHP.</strong></h3>";
                $n2 = array(array(2, 3),
                            array(3, 4),
                            array(9, 5));
                print_r ($n2);
                echo "<p>A posição 2,0 na matriz é o valor: " . $n2[2][0] . "</p>";
            ?>
            <hr>
        </pre>
    </body>
</html>