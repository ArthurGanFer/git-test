<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1">
            <tr>
                <td><b>ID</b></td>
                <td><b>NOME</b></td>
                <td><b>DESC</b></td>
            </tr>
            <?php
            for($linha=1; $linha<=7; $linha++){
                echo '<tr>';
                for($coluna = 1; $coluna<= 3; $coluna++){
                    if($linha % 2 == 0){
                        echo '<td bgcolor = "grey">';
                    }
                    else{
                        echo '<td>';
                    }
                    if($coluna == 1){
                        echo 'id';
                    }
                    else if($coluna == 2){
                        echo 'nome';
                    }
                    else if($coluna == 3){
                        echo 'desc';
                    }
                    echo '</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
