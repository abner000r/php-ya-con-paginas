<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Info</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card mt-4">
            <div class="card-header">
                <h2>Empelado</h2>
            </div>
            <div class="card-body">
                <form method="post" action="../objetos/objeto_empleado.php">
                    <div class="form-group">
                        <label for="txtNivelAcademico">Nivel Academico</label>
                        <input type="text" class="form-control" id="txtNivelAcademico" name="txtNivelAcademico" value="">
                    </div>
                    <div class="form-group">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="">
                    </div>
                    <div class="form-group">
                        <label for="txtApellido">Apellido</label>
                        <input type="text" class="form-control" id="txtApellido" name="txtApellido" value="">
                    </div>
                    <div class="form-group">
                        <label for="txtTelefono">Teléfono</label>
                        <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" value="">
                    </div>
                    <div class="form-group">
                        <label for="txtDireccion">Dirección</label>
                        <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" value="">
                    </div>
                    <div class="form-group">
                        <label for="txtCodigo">Codigo</label>
                        <input type="text" class="form-control" id="txtCodigo" name="txtCodigo" value="">
                    </div>
                    <div class="form-group">
                        <label for="txtSueldoBase">Sueldo Base</label>
                        <input type="text" class="form-control" id="txtSueldoBase" name="txtSueldoBase" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
