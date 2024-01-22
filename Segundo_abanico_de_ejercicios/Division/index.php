<?php
    $dividendo=$_GET["dividendo"];
    $divisor=$_GET["divisor"];

    $dividendoOK = false;
    $divisorOK = false;
    if ($dividendo == ""){
        echo "<p>Rellene el campo de el dividendo</p>";

    }
    elseif ($dividendo <= 0 || $dividendo > 1000) {
        echo "<p>El dividendo no esta en entre 0 y 1000</p>";

    }
    else {
        $dividendoOK = true;
    }

    if ($divisor == ""){
        echo "<p>Rellene el campo de el divisor</p>";

    }
    elseif ($divisor < 0 || $divisor > 1000) {
        echo "<p>El divisor no esta en entre 0 y 1000</p>";
        
    }
    else {
        $divisorOK = true;
    }
    
    if ($dividendoOK && $divisorOK){
        $cociente = floor($dividendo/$divisor);
        $resto = $dividendo-$cociente * $divisor;
        echo "<p>El divisor es <strong>$divisor</strong></p>";
        echo "<p>El dividendo es <strong>$dividendo</strong></p>";
        echo "<p>El cociente es <strong>$cociente</strong></p>";
        echo "<p>El resto es <strong>$resto</strong></p>";
        if ($resto == 0){
            echo "la division es exacta";
        }
        else {
            echo "la divison es no exacta";
        }
    }


    echo "<p><a href=\"../Division/index.html\">Volver a intentar</a></p>";
?>