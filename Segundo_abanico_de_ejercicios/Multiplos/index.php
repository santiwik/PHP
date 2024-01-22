<?php
    $p = $_GET ["primer"];
    $s = $_GET ["segundo"];
    
    $pOK=false;
    $sOK=false;
    
    $var =($p == "") ? "porfavor rellene el campo de el primer numero" : (($p<0 || $p>1000)? "porfavor seleccione el primer numero entre el rango especificado": $pOK=true );

    $var2= ($s == "") ? "porfavor rellene el campo de el segundo numero" : (($s<0 || $s>1000)? "porfavor seleccione el segundo numero entre el rango especificado": $sOK=true);
    if ($pOK ==true && $sOK==true){
        $f=$s/$p;
        if (is_int($f)){
            echo "$p y $s SON multiplos.";
        }
        else {
            echo "$p y $s NO son multiplos.";
        }
    }
    elseif ($pOK ==true && $sOK !==true) {
        echo $var2;
    }
    elseif ($pOK !==true && $sOK ==true) {
        echo $var;
    }
    else {
        echo "$var </br> $var2";
    }
    echo "<p><a href=\"../Multiplos/index.html\">Volver</a></p>" ;
?>