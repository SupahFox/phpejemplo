<!DOCTYPE html>
<html>

<head>
<title>TABLAS HTML</title>
<link rel = "stylesheet" href = "css/style.css">
<meta charset="UTF-8"> 
</head>

<body>

<?php
    $nombre = "Licenciado";
    $apellido = "Espinoza";
    $edad = 999999;
    $edad = 999998;
    $precio = 1000;
    $cant = 2;
    $iva = 22;
    $suma = 0;
    $cien = 100;
    $multip = 0;
    $cantiva = 0;
    $preciofinal = 0;

    $cant * $precio = $suma;
    $iva * $suma = $cantiva;
    $suma + $iva = $preciofinal;

    echo '<table>'
            . '<img src = "img/logo.png" width = "315px">'
            . '<tr class = "fondonegro">'
            .   '<td class = "centro">'
            .       '<h2>Nombre</h2>'
            .   '</td>'

            .   '<td class = "centro">'
            .       '<h2>Año</h2>'
            .   '</td>'

            .   '<td class = "centro">'
            .       '<h2>Disco</h2>'
            .   '</td>'
            . '</tr>'

            . '<tr class = "fondoverde">'
            .    '<td>'
            .        '<ul>'
            .           '<li>Gorillaz</li>'
            .           '<li>Gorillaz</li>'
            .           '<li>Gorillaz</li>'
            .           '<li>Gorillaz</li>'
            .           '<li>Gorillaz</li>'
            .           '<li>Gorillaz</li>'
            .           '<li>Gorillaz</li>'
            .        '</ul>'
            .    '</td>'

            .    '<td>'
            .        '<ul>'
            .           '<li>2001</li>'
            .           '<li>2005</li>'
            .           '<li>2010</li>'
            .           '<li>2017</li>'
            .           '<li>2018</li>'
            .           '<li>2020</li>'
            .           '<li>2021</li>'
            .        '</ul>'
            .    '</td>'

            .    '<td>'
            .        '<ul>'
            .           '<li>Gorillaz</li>'
            .           '<li>Demon Days</li>'
            .           '<li>Plastic Beach</li>'
            .           '<li>Humanz</li>'
            .           '<li>The Now Now</li>'
            .           '<li>Song Machine</li>'
            .           '<li>Meanwhile (EP)</li>'
            .        '</ul>'
            .    '</td>'
            . '</tr>'
        . '</table>'
        . '<img src = "img/gorillaz.jpg" width = "315px">'
        . '<br>';
        echo 'Hola ' . $nombre . ' espero andes para el ojete.<br>';
        echo '<h3>Tu apellido es ' . $apellido . '</h3>';
        echo 'Este año cumplistes ' . $edad . ' años <br>';
        echo 'El precio es ' . $precio . ' pesos <br>';
        echo 'Cantidad de prodcuto: ' . $cant . '<br>';
        echo 'El iva es: ' . $iva . '% <br>';
        echo 'El iva calculado, mas la cantidad es: ' . $cantiva . '% <br>';
        echo 'El precio final es: ' . $preciofinal . ' pesos <br>';
?>

</body>
<html>