<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>A definir</title>
    </head>
    <body>
        <form method="get" action="02tabuada.php">
            <select name="num">
                <?php
                    for($c = 1; $c <= 10; $c++) {
                        echo "<option value='$c'>$c</option>";
                    }
                ?>
                <input type="submit" value="Tabuada">
            </select>
        </form>
    </body>
</html>