<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"];
        echo "<h3>tu numero es $numero</h3>";
        echo "<table style=\"border: black 1px solid;\">";
        echo "<tbody>";
        for ($i=1;$i<=$numero;$i++){
            echo "<tr style=\"border: black 1px solid;\">";
                for($l=1;$l<=$numero;$l++){
                    $p=$i*$l;
                    echo "<td style=\"border: black 1px solid;\">$p</td>";
                }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>