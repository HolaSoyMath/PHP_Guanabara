<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    <h3>Imprimindo os dados na tela com o "print_r"</h3>
        <?php
            $n = array("A", "J", "M", "X", "K");
            ##### Printar apaenas para o programador para ver como esta o vetor
            ### dificilmente será mostrado dessa forma para o usuário
            print_r($n);
        ?>
        <h3>Outra forma de mostrar seria usando a Tag "pre"</h3>
        <pre>
            <?php
                $n = array("A", "J", "M", "X", "K");
                print_r($n);
            ?>
        </pre>
        <h3>Podemos usar o var_dump tambem para exibir os dados na tela</h3>
        <pre>
            <?php
                $n = array("A", "J", "M", "X", "K");
                var_dump($n);
            ?>
        </pre>
        <h3>Para saber a quantidade de elementos no vetor temos a função "count"</h3>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                $tot = count($v);
                echo "O vetor tem $tot elementos.<br>";
                print_r($v);
            ?>
        </pre>
        <hr>
        <h3>Adicionar elemento no final</h3>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                ##### Temos a opção de colocar apenas inserindo Colchetes
                $v[] = "O";
                print_r($v);
                ##### Temos a opção de usar a função array_push
                array_push($v, 7);
                print_r($v);
            ?>
        </pre>
        <h3>Retirar o ultimo elemento de um vetor com "array_pop"</h3>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                array_pop($v);
                print_r($v);
            ?>
        </pre>
        <hr>
        <h3>Adicionar elemento no inicio com "array_unshift"</h3>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                array_unshift($v, 7);
                print_r($v);
            ?>
        </pre>
        <h3>Retirar  elemento no inicio com "array_shift"</h3>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                array_shift($v);
                print_r($v);
            ?>
        </pre>
        <hr>
        <h3>Ordenar vetor com "sort"</h3>
        <pre>
            <?php
                $n = array(3, 5, 8, 2);
                print_r($n);
                sort($n);
                print_r($n);

                echo "<br>";

                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                sort($v);
                print_r($v);
            ?>
        </pre>
        <h3>Ordenar vetor invertido com "rsort"</h3>
        <pre>
            <?php
                $n = array(3, 5, 8, 2);
                print_r($n);
                rsort($n);
                print_r($n);

                echo "<br>";

                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                rsort($v);
                print_r($v);
            ?>
        </pre>
        <h3>Ordenação associativa "asort"</h3>
        <pre>
            <?php
                echo "Com esse método, os valores mantém o seu índice, ao contrario do 'sort' que muda os indices dos valores.<br>";
                $n = array(3, 5, 8, 2);
                print_r($n);
                asort($n);
                print_r($n);

                echo "<br>";

                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                asort($v);
                print_r($v);
            ?>
        </pre>
        <h3>Ordenação associativa reversa "arsort"</h3>
        <pre>
            <?php
                $n = array(3, 5, 8, 2);
                print_r($n);
                arsort($n);
                print_r($n);

                echo "<br>";

                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                arsort($v);
                print_r($v);
            ?>
        </pre>
        <h3>Ordenação por chaves "ksort"</h3>
        <pre>
            <p>Ordena os valores através de seu índice, ignorando a ordem de seus valores.</p>
            <?php
                $n = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                print_r($n);
                ksort($n);
                print_r($n);
            ?>
        </pre>
        <h3>Ordenação por chaves invertida "krsort"</h3>
        <pre>
            <?php
                $n = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                print_r($n);
                krsort($n);
                print_r($n);
            ?>
        </pre>
    </body>
</html>