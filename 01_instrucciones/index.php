<?php

#este es un comentario
//Este tambien es un comentario
/*Este es otro comentario*/

#Impresion en pantalla
print "esta es una prueba con print";
echo "<br/>";
echo "Esta es una impresion con echo";
echo "<br/>";
# Variables
$frutas = "pera";
echo $frutas . "<br/>";
$frutas =123;
echo $frutas . "<br/>";

/*die("script muerto");*/
#boleanos
$bandera1 = true;
$bandera2 = false;
echo "<br/>";
echo "bandera 1: ". $bandera1 . " y bandera2: ". $bandera2;

#arrays
#arrays simples
echo "<br/>";
$estadocivil = array("soltero", "casado", "descomplicado","arrejuntado");
print_r($estadocivil);
echo "<br/>";
var_dump($estadocivil);

#arrays clave-> valor
$estadocivilConAsteroides = array("uno"=>"soltero", "dos"=>"casado");
var_dump($estadocivilConAsteroides);
echo "<br/>";
echo $estadocivilConAsteroides["dos"];
?>