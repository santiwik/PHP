<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        $numero = $_GET ["numero"];
        echo "<h1>Tu numero es $numero </h1> </br>";
        echo "<h2>Preformateado (pre)</h2>";
        for ($i=1;$i<=$numero;$i++){
        echo "<pre>$i</pre>";
        }
        echo "<h2>Parrafo (p)</h2>";
        for ($i=1;$i<=$numero;$i++){
        echo "<p>$i</p>";
        }
        echo "<h2>Lista sin ordenar (ul)</h2>";
        echo "<ul>";
        for ($i=1;$i<=$numero;$i++){
        echo "<li>$i</li>";
        }
        echo "</ul>";
        echo "<h2>Lista ordenada(ul)</h2>";
        echo "<ol>";
        for ($i=1;$i<=$numero;$i++){
        echo "<li>$i</li>";
        }
        echo "</ol>";
    ?>
    <p><a href="index.html">Volver al formulario</a></p>
</body>
</html>
