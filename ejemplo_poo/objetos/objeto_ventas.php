<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();

    $ventas->tipoContratacion = $_POST['txtTipoContratacion'];
    $ventas->comisionVenta = $_POST['txtComisionVenta'];
    // Atributos que hereda de la clase Empleado y Persona
    $ventas->codigo = $_POST['txtCodigo'];
    $ventas->nivelAcademico = $_POST['txtNivelAcademico'];
    $ventas->sueldoBase = $_POST['txtSueldoBase'];
    $ventas->asignarNombre($_POST['txtNombre']);
    $ventas->apellido = $_POST['txtApellido'];
    $ventas->telefono = $_POST['txtTelefono'];
    $ventas->direccion = $_POST['txtDireccion'];
    
    echo "Sueldo liquido: " . $ventas->calcularSueldoLiquido();
    echo $ventas->verDatos();
?>