<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados DSC</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>
            Dos Dados
    </h1>
    <p>Actualice la pagina para mostrar una nueva tirada</p>
    
    <?php
    $d1=rand(1,6);
    $d2=rand(1,6);
    echo "<img src=\"img/$d1.svg\">";
    echo "<img src=\"img/$d2.svg\">";
    if ($d1==$d2){
        echo "<p id=\"igual\">Ha sacado una pareja de $d1</p>";
    }
    else{
        $max=max($d1,$d2);
        echo "<p id=\"distintos\">No ha sacado pareja. El numero mas alto es $max </p>";
    }
    ?>

    <h1>
        Juego de dado m&aacute;s alto
    </h1>
    <table border="1px" style="text-align: center;" > 
        <tr>
            <th><p>Jugador 1</p></th>
            <th><p>Jugador 2</p></th>
            <th><p>Resultado</p></th>
        </tr>
        
        <tr>
            <?php
             $d1=rand(1,6);
             $d2=rand(1,6);
             echo "<td style=\"background-color: red;\"><img src=\"img/$d1.svg\"></td>";
             echo "<td style=\"background-color: blue;\"><img src=\"img/$d2.svg\"></td>";
             if($d1===$d2){
                echo "<td><p>Han empatado</p></td>";
             }
             elseif ($d1>$d2) {
                echo "<td><p>Ha ganado el Jugador 1</p></td>";
             }
             else {
                echo "<td><p>Ha ganado el Jugador 2</p></td>";
             }
            ?>
        </tr>
    </table>
    <h1>
        Juego de dados m&aacute;s altos
    </h1>
    <table border="1px" style="text-align: center;" > 
        <tr>
            <th><p>Jugador 1</p></th>
            <th><p>Jugador 2</p></th>
            <th><p>Resultado</p></th>
        </tr>
        
        <tr>
            <?php
             $d11=rand(1,6);
             $d21=rand(1,6);
             $d12=rand(1,6);
             $d22=rand(1,6);
             echo "<td style=\"background-color: red;\"><img src=\"img/$d11.svg\"><img src=\"img/$d21.svg\"></td>";
             echo "<td style=\"background-color: blue;\"><img src=\"img/$d12.svg\"><img src=\"img/$d22.svg\"></td>";
             if(($d11+$d21)==($d12+$d22)){
                echo "<td><p>Han empatado</p></td>";
             }
             elseif (($d11+$d21)>($d12+$d22)) {
                echo "<td><p>Ha ganado el Jugador 1</p></td>";
             }
             else {
                echo "<td><p>Ha ganado el Jugador 2</p></td>";
             }
            ?>
        </tr>
    </table>
    <h1>
        Trio de dados
    </h1>
    <?php
     $d1=rand(1,6);
     $d2=rand(1,6);
     $d3=rand(1,6);
     echo "<img src=\"img/$d1.svg\">";
     echo "<img src=\"img/$d2.svg\">";
     echo "<img src=\"img/$d3.svg\">";
    if ($d1==$d2){
        echo "<p id=\"igual\">Ha sacado una pareja de $d1</p>";
    }
    elseif ($d1==$d3){
        echo "<p id=\"igual\">Ha sacado una pareja de $d1</p>";
    }
    elseif ($d2==$d3){
        echo "<p id=\"igual\">Ha sacado una pareja de $d2</p>";
    }
    else{
        $max=max($d1,$d2);
        echo "<p id=\"distintos\">No ha sacado pareja. El numero mas alto es $max </p>";
    }
    ?>
    <h1>
        Juego de tres dados m&aacute;s altos
    </h1>
    <table border="1px" style="text-align: center;" > 
        <tr>
            <th><p>Jugador 1</p></th>
            <th><p>Jugador 2</p></th>
            <th><p>Resultado</p></th>
        </tr>
        
        <tr>
            <?php
             $d11=rand(1,6);
             $d12=rand(1,6);
             $d13=rand(1,6);
             $d21=rand(1,6);
             $d22=rand(1,6);
             $d23=rand(1,6);
             echo "<td style=\"background-color: red;\"><img src=\"img/$d11.svg\"><img src=\"img/$d12.svg\"> <img src=\"img/$d13.svg\"> </td>";
             echo "<td style=\"background-color: blue;\"><img src=\"img/$d21.svg\"><img src=\"img/$d22.svg\"><img src=\"img/$d22.svg\"> </td>";

            ?>
        </tr>
    </table>
</body>
</html>