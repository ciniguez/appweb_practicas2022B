<?php
session_start();

if(!isset($_SESSION["s_nombre"]) && !isset($_SESSION["s_clave"])){
    header("Location: index.php");
}
?>

<HTML>
    <head></head>
    <body>
        <h1>Otra pagina</h1>
        <h1>Bienvenido: <?php echo $_SESSION["s_nombre"]; ?></h1>
        <hr>
        <a href="mipanel.php">Regrese al panel</a>
        <br>
        <a href="cerrarsesion.php">Cerrar Sesion</a>
    </body>
</HTML>