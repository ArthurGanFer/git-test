<?php
    $p1 = 3;
    $m1 = 7.5;
    $m2 = 7.5;
    $proj1 = 7.5;
    $proj2 = 7.5;
    $proj3 = 7.5;
    $proj4 = 7.5;
    $trabF = 7.5;
    $proc = 7.5;
    $pf = 7;
    $mi = (30*$p1 + 10*$m1 + 10*$m2 + 5*$proj1 + 5*$proj2 + 5*$proj3 + 5*$proj4 + 10*$trabF + 20*$proc)/100;
    $mf = ($mi + $pf)/2;
    $resultado = "nao aprovado";
    if($mi >= 7.5){
        $resultado = "aprovado sem prova final";
    }
    else if($mf >= 5){
        $resultado = "aprovado com Prova Final";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        echo $resultado;
        ?>
    </body>
</html>
