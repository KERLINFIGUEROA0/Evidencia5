<?php
$nombres = readline("ingrese nombre: ");
$contraseña = readline("ingrese contraseña: ");
$empleados = [];

if($nombres == "Kerlin" && $contraseña == 1101) {
$numero = readline("ingrese el numero de empleados a registrar: ");
for($i=0; $i <=$numero; $i++) {
echo"persona $i: ";
$dni = readline("dni: ");
$nombre = readline("nombre: ");
$estatura = readline("estatura: ");
$edad = readline("edad: ");
$genero = readline("genero: ");
$peso = readline("peso: ");
$fuma = readline("fuma: ");

