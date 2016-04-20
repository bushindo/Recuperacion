<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nombre= $_REQUEST['nombre'];
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

if ($_POST) {
    if ($nombre==""){
	echo "No ha introducido ningun nombre."."<br/>";
    }else {
        echo "Nombre: ". $nombre ."<br/>";
    }
}

if ($_POST) {
    if ($apellidos==""){
        echo "No ha introducido ningun apellido."."<br/>";
    } else {
        echo "Apellidos: ". $apellidos ."<br/>";
    }
}

if ($_POST) {
    if ($fechana==""){
	echo "No ha introducido ninguna fecha de nacimiento."."<br/>";
    }else {
        echo "Fecha Nacimiento: ". $fechana ."<br/>";
    }
}

if ($_POST) {
    if ($dni==""){
	echo "No ha introducido ningun DNI."."<br/>";
    }else {            
        echo "DNI: ". $dni ."<br/>";
    }
}

if ($_POST) {
    if ($direccion==""){
	echo "No ha introducido ninguna direccion."."<br/>";
    }else {
        echo "Direccion: ". $direccion ."<br/>";
    }
}

if ($_POST) {
    if ($CP==""){
	echo "No ha introducido ningun codigo postal."."<br/>";
    }else {
        echo "Codigo Postal: ". $CP ."<br/>";
    }
}

if ($_POST) {
    if ($cuidad==""){
        echo "No ha introducido ninguna ciudad."."<br/>";
    }else {
        echo "Ciudad: ". $ciudad ."<br/>";
    }
}

if ($_POST) {
    if ($provincia==""){
	echo "No ha introducido ninguna provincia."."<br/>";
    }else {            
        echo "Provincia: ". $provincia ."<br/>";
    }
}

if ($_POST) {
    if ($telefono==""){
	echo "No ha introducido ningun telefono."."<br/>";
    }else {            
        echo "Telefono: ". $telefono ."<br/>";
    }
}

if ($_POST) {
    if ($ocupacion==""){
	echo "No ha introducido ninguna ocupacion."."<br/>";
    }else {            
        echo "Ocupacion: ". $ocupacion ."<br/>";
    }
}

if ($_POST) {
    if ($comentarios==""){
	echo "No ha introducido ningun comentario."."<br/>";
    }else {            
        echo "Comentarios: ". $comentarios ."<br/>";
    }
}

function letra_nif($dni) {
        return substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
    }
    $numero = $dni;
    echo 'El NIF del DNI "'.$numero.'" es "'.letra_nif($numero).'"<br/>';
 