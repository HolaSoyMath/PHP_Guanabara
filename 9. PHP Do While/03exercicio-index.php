<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
        <div>
            <form method="get" action="03exercicio.php">
                Número: 
                <select name="num">
                    <?php
                        $v = 1;
                        while($v <= 10) {
                            echo "<option value='$v'>$v</option>";
                            $v++;
                        }
                    ?>
                </select>
                <input type="submit" value="Tabuada">
            </form>
        </div>
    </body>
</html>