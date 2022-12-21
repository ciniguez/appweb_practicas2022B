<?php
## créditos: https://www.php.net/manual/es/function.fwrite.php

$nombre_archivo = 'prueba.txt';
$contenido = "Añade esto al archivo 2\n";

// Primero vamos a asegurarnos de que el archivo existe y es escribible.
if (is_writable($nombre_archivo)) {

    // En nuestro ejemplo estamos abriendo $nombre_archivo en modo de adición.
    // El puntero al archivo está al final del archivo
    // donde irá $contenido cuando usemos fwrite() sobre él.
    if (!$gestor = fopen($nombre_archivo, 'a')) {
         echo "No se puede abrir el archivo ($nombre_archivo)";
         exit;
    }

    // Escribir $contenido a nuestro archivo abierto.
    if (fwrite($gestor, $contenido) === FALSE) {
        echo "No se puede escribir en el archivo ($nombre_archivo)";
        exit;
    }

    echo "Éxito, se escribió ($contenido) en el archivo ($nombre_archivo)";

    fclose($gestor);

} else {
    echo "El archivo $nombre_archivo no es escribible";
}
?>