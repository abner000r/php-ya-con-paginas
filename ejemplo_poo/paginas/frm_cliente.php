<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Info</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="card mt-4">
            <div class="card-header">
                <h2>Cliente</h2>
            </div>
            <div class="card-body">
                <form method="post" action="../objetos/objeto_cliente.php">
                    <div class="form-group">
                        <label for="txtNit">NIT</label>
                        <input type="text" class="form-control" id="txtNit" name="txtNit" value="">
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
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
