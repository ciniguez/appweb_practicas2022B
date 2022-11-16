<?php
echo "con GET:";
var_dump($_GET);
echo "con POST <br>";
var_dump($_POST);

echo $_POST["nombre"];
?>

<html>
    <head></head>
    <body>
        <h1>Hola , <?php echo $_POST["nombre"] ?>!</h1>


    </body>
</html>