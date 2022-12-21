<?php
#crear sesión o reiniciar una preexistente
session_start();

$idioma = "es";

//Si no existen sesiones entonces las creo
if (!isset($_SESSION["nombre"], $_SESSION["clave"])) {
    echo "9";
    if (isset($_POST["nombre"], $_POST["clave"])) {
        //Creo las sesiones y las cookies
        $_SESSION['nombre'] = $_POST["nombre"];
        $_SESSION['clave'] = $_POST["clave"];


        if (isset($_POST["chkRecordarme"])) {
            //crear la cookie con informacion de ingreso de usuario e idioma
            setcookie("nombre", $_POST["nombre"], time() + (60 * 60 * 24), "/", "localhost");
            setcookie("clave", $_POST["clave"], time() + (60 * 60 * 24), "/", "localhost"); 
            if(isset($_COOKIE["lang"])){
                setcookie("lang", $_COOKIE["lang"], time() + (60 * 60 * 24), "/", "localhost");
            }  else{
                setcookie("lang", $idioma, time() + (60 * 60 * 24), "/", "localhost");
            }       
            
            setcookie("recordar", true, time() + (60 * 60 * 24), "/", "localhost");
        } else {
            echo "entro";
            //Elimino las cookies
            if (isset($_COOKIE["nombre"], $_COOKIE["clave"], $_COOKIE["lang"])) {
                setcookie("nombre", "", time() - (60 * 60 * 24), "/", "localhost");
                setcookie("clave", "", time() - (60 * 60 * 24), "/", "localhost");
                setcookie("lang", "", time() - (60 * 60 * 24), "/", "localhost");
                setcookie("recordar", "", time() + (60 * 60 * 24), "/", "localhost");
            }
        }
    }
}

if (isset($_GET['lang'])) {
    if (isset($_COOKIE["recordar"])) {
        setcookie("lang", $_GET['lang'], time() + (60 * 60 * 24), "/", "localhost");
    } else {
        $idioma = $_GET['lang'];
    }
}else{
    if (isset($_COOKIE["lang"])) {
        $idioma = $_COOKIE["lang"];
    }
}

//die("hola");



?>

<html>

<head>
</head>

<body>
    <h1>Mi Tienda de Ropa</h1>
    <hr>
    <h3>Bienvenido Usuario: <?php echo $_SESSION["nombre"];  ?></h3>
    <p><a href="mipanel.php?lang=es">ES (Español)</a>|<a href="mipanel.php?lang=en"> EN (English)</a></p>
    <p><a href="cerrarsesion.php">Cerrar Sesion</a></p>
    <hr>



    <?php
    $nombre_fichero = null;
    if ($idioma == "es") {
        $nombre_fichero = "categorias_es.txt";
        echo "<h2>Lista de Productos</h2>";
    } else {
        $nombre_fichero = "categorias_en.txt";
        echo "<h2>Product List</h2>";
    }

    $fichero = fopen($nombre_fichero, "r");
    while (!feof($fichero)) {
        $linea = fgets($fichero);
        echo $linea . "<br>";
    }
    fclose($fichero);
    ?>
</body>

</html>