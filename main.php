<?php
$palabras = array("sol","luna","cielo","estrellas","luz");

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($palabras); $i++) { 
 $form .= "la palabra: " . str_shuffle($palabras[$i]) . " " .
 "<input type ='text' name='palabra" . $i."'>" .
  "<br>";
}

$button ="<button type ='submit'> enviar </buttton>";
$formcierre ="</form>";

echo $form.$button.$formcierre;

?>