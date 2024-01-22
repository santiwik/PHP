<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>
      Círculos en fila.
      for (1). Sin formularios.
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejercicios_for_sin_formulario_php.css" title="Color">
  </head>

  <body>
    <h1>Círculos en fila</h1>

    <p>Actualice la página para mostrar un nuevo dibujo.</p>

  <?php
    $circulos = rand(1,10);
    $numero = $circulos;
    if ($numero == 1) {
        print "  <h2>$numero dado</h2>\n";
    } else {
        print "  <h2>$numero dados</h2>\n";
    }
    print "\n";
    print "  <table class=\"conborde\">\n";
    print "    <tbody>\n";
    print "      <tr>\n";
    for($i=0;$i<$circulos;$i++){
        print "        <td>\n";
        print "          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\">\n";
        print "            <circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"black\" />\n";
        print "          </svg>\n";
        print "        </td>\n";
    }
    print "      </tr>\n";
    print "    </tbody>\n";
    print "  </table>\n";
  ?>
  </body>

  </html>
