<?php
$preferencias = false;
$nombre = "";
$clave="";
$sexo="";
//Variables para preferencias Hombre y Mujer
$esHombre = false;
$esMujer = false;

if(isset($_COOKIE["c_preferencias"]) && $_COOKIE["c_preferencias"]!= ""){
    $preferencias = true;
    $nombre = isset($_COOKIE["c_nombre"])?$_COOKIE["c_nombre"] : "";
    $clave = isset($_COOKIE["c_clave"])?$_COOKIE["c_clave"] : "";
    $sexo = isset($_COOKIE["c_sexo"])?$_COOKIE["c_sexo"] : "";
    if($sexo!=""){
        $esHombre = ($sexo =="h")?true:false;
        $esMujer = ($sexo =="m")?true:false;
    }
}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Formulario Login</h1>
        <form method="POST" action="mipanel.php">
            <fieldset>
                Usuario*:<br>
                <input type="text" name="nombre" value="<?php echo $nombre; ?>"/><br>
                Password*:<br>
                <input type="text" name="clave" value="<?php echo $clave; ?>"/><br>
                Sexo*<br>
                <input type="radio" name="hm" value="h" <?php echo ($esHombre)?"checked": "";  ?>> Hombre
                <input type="radio" name="hm" value="m" <?php echo ($esMujer)?"checked": "";  ?>> Mujer
                <br>
                <br>
                <input type="checkbox" name="chkpreferencias"  <?php echo ($preferencias)?"checked": ""  ?>> Recordar mis datos
                <br>
                <br>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </body>
</html>