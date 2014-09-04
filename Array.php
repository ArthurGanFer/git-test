<?php

$tabela [0][0] = '2K01';
$tabela [0][1] = 'Tecnologia Web II';
$tabela [0][2] = 'Segunda';
$tabela [0][3] = 'Charles';
$tabela [1][0] = '02J01';
$tabela [1][1] = 'Linguagem de Programacao I';
$tabela [1][2] = 'Terca';
$tabela [1][3] = 'Joao';
$tabela [2][0] = '02K01';
$tabela [2][1] = 'Linguagem de Programacao I';
$tabela [2][2] = 'Quarta';
$tabela [2][3] = 'Charles';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border ="1">
            <tr>
                <td>TURMA</td>
                <td>DISCIPLINA</td>
                <td>SEMANA</td>
                <td>PROFESSOR</td>
            </tr>
            <?php
            for($i = 0; $i <= 2; $i++){
                echo '<tr>';
                for($j = 0; $j<= 3; $j++){
                    echo '<td>';
                    echo $tabela[$i][$j];
                    echo '</td>';
                }
                echo '</tr>';
            }
            
            
            ?>
            
        </table>
        
    </body>
</html>