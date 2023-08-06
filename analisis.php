<?php

$palabras = array("sol","luna","cielo","estrellas","luz");

for ($i = 0; $i <  count($palabras); $i++) { 
    $posicion = "palabra" . $i;

    if ($_REQUEST[$posicion] == $palabras[$i]) {
        echo "La palabra es correcta!". "<br>" ;
    } else {
        echo "Es incorrecta, la palabra es " . $palabras[$i] . "<br>";
    }

    echo "<br>"; 
}
?>