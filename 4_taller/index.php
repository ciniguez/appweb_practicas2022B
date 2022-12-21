<?php
#ciniguez17
$cookie_nombre="";
$cookie_clave="";
$bandera = false;
if(isset($_COOKIE["nombre"],  $_COOKIE["clave"], $_COOKIE["lang"])){
    //echo "Cookie seteada<br>";
    //$datosCookie= explode(";", $_COOKIE["recordar"]);
    $cookie_nombre = $_COOKIE["nombre"];
    $cookie_clave = $_COOKIE["clave"];
    $bandera=true;
}

?>



<html>
    <head>
        <title>Mi sistema</title>
    </head>
    <body>
        <h1>LOGIN</h1>
        <form action="mipanel.php" method="POST">
            <!-- ciniguez17 -->
            Usuario:<br>
            <input type="text" name="nombre" value="<?php if($bandera){echo $cookie_nombre;}else{echo "";} ?>"/><br>
            Clave:<br>
            <input type="password" name="clave" value="<?php if($bandera){echo $cookie_clave;}else{echo "";} ?>"/><br>
            <input type="checkbox" name="chkRecordarme" <?php if($bandera){echo "checked";}?>>Recordarme</input><br>
            <!-- ciniguez17_fin -->
            <input type="submit" name="btnEnviar"/>
        </form>
    </body>
</html>