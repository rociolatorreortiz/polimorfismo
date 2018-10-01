<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include "poligono.php";
        include "cuadrado.php";
        include "rectangulo.php";
        include "triangulo.php";

        function area($obj){
            $obj->calcular();
        }

        $cuadrado = new cuadrado();
        $rectangulo = new rectangulo();
        $triangulo = new triangulo();

        area($objCuadrado);
        area($objrectangulo);
        area($objtriangulo);
    ?>
</body>
</html>