<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();

    $ventas->tipoContratacion=$_POST['txtTipoContratacion'];
    $ventas->comisionVenta=$_POST['txtComisionesVenta'];
    //atributos que hereda de la clase empleado y persona
    //empleado    
    $ventas->codigo=$_POST['txtCodigo'];;
    $ventas->nivelAcademico=$_POST['txtNivelAcademico'];
    $ventas->sueldoBase=$_POST['txtSueldoBase'];
    //persona
    $ventas->asignarNombre($_POST['txtNombre']);
    $ventas->apellido=$_POST['txtApellido'];
    $ventas->telefono=$_POST['txtTelefono'];
    $ventas->direccion=$_POST['txtDireccion'];

    echo "<br>Nombre: ". $ventas->verNombre();
    echo "<br>".$ventas->nombreCompleto();
    echo $ventas->verDatos();
    echo "<br>Sueldo liquido: " . $ventas->calcularSueldoLiquido();

?>
