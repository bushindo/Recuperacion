<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nombre= $_POST['nombre'];
$fechana= $_REQUEST['fechana'];
$dni= $_REQUEST['dni'];
$apellidos= $_REQUEST['apellidos'];
$direccion= $_REQUEST['direccion'];
$CP= $_REQUEST['CP'];
$cuidad= $_REQUEST['cuidad'];
$provincia= $_REQUEST['provincia'];
$telefono= $_REQUEST['telefono'];
$ocupacion= $_REQUEST['ocupacion'];
$comentarios= $_REQUEST['comentarios'];

echo "Nombre: ". $nombre ."<br/>";
echo "Apellidos: ". $apellidos ."<br/>";
echo "FechaNacimiento: " . $fechana ."<br/>";
echo "DNI: ". $dni ."<br/>";
echo "Direccion: ". $direccion ."<br/>";
echo "CodigoPostal: " . $CP ."<br/>";
echo "Ciudad: ". $cuidad ."<br/>";
echo"Provincia: ". $provincia ."<br/>";
echo"Telefono: ". $telefono ."<br/>";
echo "Ocupacion: ".$ocupacion ."<br/>";
echo "Comentarios: ". $comentarios ."<br/>";