<?php
include_once('../clases/Empleado.php');
$emple = new Empleado();

// Atributos de la clase Empleado    
$emple->apellido =$_POST['txtApellido'];
echo "<br>Apellido: " . $emple->apellido;

$emple->telefono=$_POST['txtTelefono'];
$emple->direccion=$_POST['txtDireccion'];
$emple->asignarNombre($_POST['txtNombre']);
$emple->nivelAcademico=$_POST['txtNivelAcademico'];
$emple->codigo=$_POST['txtCodigo'];
$emple->sueldoBase=$_POST['txtSueldoBase'];

echo "<br>Nombre: " .$emple->verNombre();
echo "<br>" .$emple->nombreCompleto();
echo "<br>Sueldo liquido: " .$emple->calcularSueldoLiquido();
echo "<br>" .$emple->verDatos();
?>