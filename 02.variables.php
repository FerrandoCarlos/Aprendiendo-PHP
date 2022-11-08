<?php 

#Variable Numérica
$numero = 5;
echo "Esto es una variable numero: $numero <br>";
var_dump($numero);
echo "<br><br>";

#Variable Texto
$palabra = "palabra";
echo " Esto es una variable texto: $palabra <br>";
var_dump($palabra);
echo "<br><br>";

#Variable Booleana
$booleana = true;
echo " Esto es una variable Booleana: $booleana <br>";
var_dump($booleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("rojo","amarillo");
echo "Esto es una variable arreglo: $colores[1] <br>";
var_dump($colores);
echo "<br><br>";

#Variable Arreglo con Propiedades
$verduras = array("verdura1"=>"lechuga","verdura2"=>"tomate");
echo " Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br><br>";

#Variable Objeto
$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: ", $frutas -> fruta1,"<br>";
var_dump($frutas);
/* para mostra cartel con una variable objeto concatenar la variable con una coma fuera de las comillas */

 ?>