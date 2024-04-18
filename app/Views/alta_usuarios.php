<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Document Title</title>
    <style>
        .navbar-custom {
            background-color: #042243;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        a.create-user-link {
            margin-bottom: 10px;
            display: inline-block;
            color: #333;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            white-space: nowrap;
        }

        td a {
            color: #333;
            text-decoration: none;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-custom navbar-dark">
        <!-- Logo -->
        <a class="navbar-brand" href="#"><img src="https://autoserviciobuap.mx/wp-content/uploads/LOGO-BUAP.jpg"
                width="130" height="60" alt="Logo BUAP"></a>
        <!-- Botón de hamburguesa para dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Enlaces de navegación -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="principal">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center mb-5">Formulario de registro</h2>
        <form action="<?=base_url('guardar_Usuario')?>" method="post">
            <div class="form-group">
                <label for="imatricula" class="form-label">Matricula:</label>
                <input type="text" class="form-control" id="imatricula" placeholder="Matricula" name="mat" required>
            </div>
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nom" required>
            </div>
            <div class="form-group">
                <label for="apellido_pa" class="form-label">Apellido paterno:</label>
                <input type="text" class="form-control" id="apellido_pa" placeholder="Apellido paterno" name="apellidopa" required>
            </div>
            <div class="form-group">
                <label for="apellido_ma" class="form-label">Apellido materno:</label>
                <input type="text" class="form-control" id="apellido_ma" placeholder="Apellido materno" name="apellidoma" required>
            </div>
            <div class="form-group">
                <label for="pass" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required>
            </div>
            <div class="form-group">
                <label for="correo" class="form-label">Email:</label>
                <input type="email" class="form-control" id="correo" placeholder="mail" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefono" class="form-label">Telefono:</label>
                <input type="number" class="form-control" id="telefono" placeholder="Telefono" name="tel" required>
            </div>
            <div class="form-group">
                <label for="nssl" class="form-label">NSS:</label>
                <input type="number" class="form-control" id="nssl" placeholder="NSS" name="nssl" required>
            </div>
            <div class="form-group">
                <label for="rol" class="form-label">Rol:</label>
                    <select name="rol" id="rol" class="form-control" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Maestro">Docente</option>
                    <option value="Administrador">Administrador</option>
            </select><br>
</div>
<div class="form group">
                <label for="carrera" class="form-label">Carrera:</label>
                <select name="car" id="carrera" class="form-control" required>
                    <option value="1">Ing. en Sistemas y Tecnología de la Información Industrial</option>
                    <option value="2">Ing. en Automatización y Autotrónica</option>
                    <option value="3">Ing. en Procesos y Gestión Industrial </option>
                    </select><br>
</div>
<div class="form-group">
                <label>Estado</label>
                <select name="est" class="form-control">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>

</body>
</html> 