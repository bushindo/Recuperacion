<html>

<FORM method="post" action="formulario.php">
<title>Formulario</title>
<CENTER>
<TABLE border="0">
    <h1>Datos personales<br></h1>
    
<TR>
   <TD>Nombre:</TD>
   <TD> <INPUT TYPE="text"  SIZE=18 MAXLENGTH=18 name="nombre"> 
       F.Nac.:<INPUT TYPE="text"  SIZE=10 MAXLENGTH=10 name="fechana"> 
       DNI:   <INPUT TYPE="text"  SIZE=12 name="dni"></TD>

<TR>
   <TD>Apellidos:</TD>
   <TD> <INPUT TYPE="text"  SIZE=48 MAXLENGTH=48 name="apellidos"></TD>

<TR>
   <TD>Calle y numero:</TD>
   <TD> <INPUT TYPE="text"  SIZE=48 MAXLENGTH=48 name="direccion"></TD>

<TR>
  <TD>Codigo Postal:</TD>
  <TD> <INPUT TYPE="text"  SIZE=5 MAXLENGTH=5 name="CP">
      Ciudad:  <INPUT TYPE="text"  SIZE=36 MAXLENGTH=36 name="ciudad"></TD>

<TR>
   <TD>Provincia: </TD> 
   <TD> <INPUT TYPE="text"  SIZE=20 MAXLENGTH=20 name="provincia">
       Telefono: <INPUT TYPE="text"  SIZE=9 MAXLENGTH=9 name="telefono"></TD>

<TR>
   <TD>Ocupacion:</TD>
   <TD> <SELECT name="ocupacion">
                <OPTION VALUE=""></OPTION>
		<OPTION VALUE="estudiante">Estudiante</OPTION>
		<OPTION VALUE="empleado">Trabajador por cuenta ajena</OPTION>
		<OPTION VALUE="autonomo">Autonomo</OPTION>
		<OPTION VALUE="jubilado">Jubilado</OPTION>
		<OPTION VALUE="desempleado">Desempleado</OPTION>
		<OPTION VALUE="otro">Otro</OPTION>
	</SELECT>Escoja una opcion</TD>

<TR>
   <TD>Comentarios<BR> personales:</TD>
   <TD> <TEXTAREA rows="5" cols="48" name="comentarios" ></TEXTAREA></TD>

<TR>
   <TD><B>Pulse aqui:</B></TD>
   <TD ALIGN=CENTER>
       <INPUT TYPE="submit" VALUE="Enviar datos ">
       <INPUT TYPE="reset" VALUE="Borrar los datos"></TD>

</TABLE>
</CENTER>
</FORM>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* funciones */
function letra_nif($dni) {
        return substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
}

    $nombre= $_REQUEST['nombre'];
    $fechana= $_REQUEST['fechana'];
    $dni= $_REQUEST['dni'];
    $apellidos= $_REQUEST['apellidos'];
    $direccion= $_REQUEST['direccion'];
    $CP= $_REQUEST['CP'];
    $ciudad= $_REQUEST['ciudad'];
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
        if (strlen($dni) != 8){
            echo "El DNI tiene que tener 8 digitos"."<br/>";
        }else {
            echo "DNI: ". $dni ."<br/>";
        }
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
        if (strlen($CP) != 5){
            echo "El codigo postal tiene que tener 5 digitos"."<br/>";
        }else {
            echo "Codigo Postal: ". $CP ."<br/>";
        }
    }
}

if ($_POST) {
    if ($ciudad==""){
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
        if (strlen($telefono) != 9){
            echo "El telefono tiene que tener 9 digitos"."<br/>";
        }else {
            echo "Telefono: ". $telefono ."<br/>";
        }
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
$numero = $dni;
    echo 'El NIF del DNI "'.$numero.'" es "'.letra_nif($numero).'"<br/>';



?>       
    
</html>