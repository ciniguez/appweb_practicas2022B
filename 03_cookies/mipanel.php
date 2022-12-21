<?php
var_dump($_POST);
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$sexo = $_POST["hm"];

$guardarPreferencias = (isset($_POST["chkpreferencias"]))?$_POST["chkpreferencias"]:"";


if($guardarPreferencias != ""){
    //setcookie("c_nombre", $nombre,time()+(60*60*24*30));
    setcookie("c_nombre", $nombre,0);
    setcookie("c_clave", $clave,0);
    setcookie("c_sexo", $sexo,0);
    setcookie("c_preferencias", $guardarPreferencias,0);

}else{

}
?>

<HTML>
    <head></head>
    <body>
        <h1>PANEL PRINCIPAL</h1>
        <h1>Bienvenido: <?php echo $nombre; ?></h1>
        <hr>
        <a href="borrarcookies.php?borrar=1">Borrar Cookies y regresar</a>
        <br>
        <a href="borrarcookies.php?borrar=0">Solo Regresar</a>
    </body>
</HTML>