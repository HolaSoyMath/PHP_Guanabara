<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
    	<?php
            $ini = isset($_GET['ini']) ? $_GET['ini'] : 0;
            $fin = isset($_GET['fin']) ? $_GET['fin'] : 0;
            $inc = isset($_GET['inc']) ? $_GET['inc'] : 0;

            if ($ini < $fin) {
                $v = $ini;
                while ($v <= $fin) {
                    echo "$v ";
                    $v += $inc;
                }
            }
            else {
                $v = $ini;
                while ($v >= $fin) {
                    echo "$v ";
                    $v -= $inc;
                }
            }
        ?>
    </body>
</html>