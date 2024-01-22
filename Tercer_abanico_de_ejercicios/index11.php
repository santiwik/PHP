<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>
      Contar puntos.
      for (1). Sin formularios.
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejercicios_for_sin_formulario_php.css" title="Color">
  </head>

  <body>
    <h1>Contar puntos</h1>

    <p>Actualice la página para mostrar una nueva tirada.</p>

  <?php
  $numero = rand(1,10);
  $total = 0;

  if ($numero == 1) {
      print "  <h2>$numero dado</h2>\n";
  } else {
      print "  <h2>$numero dados</h2>\n";
  }

  print "\n";
  print "  <p>\n";

  for ($i = 0; $i < $numero; $i++) {
      $dado = rand(1, 6);
      print "    <img src=\"img/$dado.svg\" alt=\"$dado\" width=\"140\" height=\"140\">\n";
      $total += $dado;
  }
  print "  </p>\n";
  print "\n";
  print "  <p>El total de puntos obtenidos es <strong>$total</strong>.</p>\n";
  ?>

  </body>

</html>
