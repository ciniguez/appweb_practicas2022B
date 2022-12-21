<?php
session_start();


if(isset($_POST["nombre"]) && isset($_POST["clave"])){
    $_SESSION["s_nombre"] = $_POST["nombre"];
    $_SESSION["s_clave"] = $_POST["clave"];
}
if(!isset($_SESSION["s_nombre"]) && !isset($_SESSION["s_clave"])){
    header("Location: index.php");
}
?>
<HTML>
    <head></head>
    <body>
        <h1>PANEL PRINCIPAL</h1>
        <h1>Bienvenido: <?php echo $_SESSION["s_nombre"]; ?></h1>
        <hr>
        <a href="otrapagina.php">Ir a otra pagina de la zona VIP</a>
        <br>
        <a href="cerrarsesion.php">Cerrar Sesion</a>
    </body>
</HTML>