<?php
if(isset($_GET)){
    
    if($_GET["borrar"]==1){
        //Elimino las cookies
        setcookie("c_nombre","");
        setcookie("c_clave","");
        setcookie("c_sexo","");
        setcookie("c_preferencias","");
    }
}
header("Location: index.php");
?>