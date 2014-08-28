
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1">
            <?php
            for($linha=1; $linha<=5; $linha++){
                echo '<tr>';
                for($coluna = 1; $coluna<= 2; $coluna++){
                    echo '<td>';
                    echo 'linha'.$linha;
                    echo 'coluna'.$coluna;
                    echo '</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
