<?php

$valor = true;
$valor2 = false;

$resultado = $valor && $valor2;
echo $resultado, "<br>";

$valor3 = true;
$valor4 = false;

$resultado2 = $valor3 || $valor4;
echo $resultado2, "<br>";

$valor5 = true;
$valor6 = false;

$resultado3 = !$valor5;
echo $resultado3;