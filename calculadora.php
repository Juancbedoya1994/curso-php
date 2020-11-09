<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <form class='caja' action="calculadora.php" method="get">
    <h1>Calculadora php</h1>
    <br>
    <H2>Ingrese el primer numero</H2>
        <input type="text" name="numero1" value="" placeholder="ingrese un numero">
        <br>
        <H2>Ingrese el segundo numero</H2>
        <input type="text" name="numero2" value="" placeholder="ingrese un numero">
        <br><br>
        <input type="submit" name="" value="Sumar">
        <output type = "number" name="">
    </form>
</body>
</html>

<?php
    if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']));
    {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        echo $numero1 + $numero2;
    }
?>