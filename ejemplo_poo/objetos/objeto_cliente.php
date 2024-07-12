<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase

    $cliente = new Cliente();


$cliente->apellido=$_POST['txtApellido'];
    echo "<br>Apellido: ". $cliente->apellido;
    $cliente->telefono=$_POST['txtTelefono'];
    $cliente->direccion=$_POST['txtDireccion' ];
    $cliente->asignarNombre($_POST['txtNombre']);
    $cliente->nit=$_POST['txtNit'];
    
    echo "<br>Nombre: ". $cliente->verNombre();
    echo "<br>".$cliente->nombreCompleto();
    echo "<br>".$cliente->verDatos();
?>