<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Editar Usuario</title>
    <style>
        body {
            background-color: #fff;
        }

        .navbar {
            background-color: #042243 !important;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .navbar h1 {
            color: #ffffff;
            font-size: 24px;
            margin: 0;
        }

        .navbar .btn {
            font-size: 18px;
            padding: 8px 16px;
            background-color: #042243;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .navbar .btn:hover {
            background-color: #001429;
        }

        .container {
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            color: #042243;
            font-style: italic;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            font-size: 18px;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button[type="submit"] {
            font-size: 18px;
            padding: 8px 16px;
            background-color: #042243;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #001429;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>BUAP</h1>
        <a class="nav-link" href="usuarios">Regresar</a>
    </div>
    <div class="container">
        <h2>Editar Usuario</h2>
        <form action="<?= base_url('actualizar') ?>" method="post">

            <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $datitos['idusuario']; ?>" name="id"><br>
            </div>

            <div class="form-group">
                <label>Matrícula</label>
                <input type="text" class="form-control" value="<?= $datitos['matricula']; ?>" name="mat" required><br>
            </div>

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" value="<?= $datitos['nombre']; ?>" name="nom"><br>
            </div>

            <div class="form-group">
                <label>Apellido Paterno</label>
                <input type="text" class="form-control" value="<?= $datitos['apellido_pa']; ?>" name="apellidopa"><br>
            </div>

            <div class="form-group">
                <label>Apellido Materno</label>
                <input type="text" class="form-control" value="<?= $datitos['apellido_ma']; ?>" name="apellidoma"><br>
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" value="<?= $datitos['password']; ?>" name="pass"><br>
            </div>

            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control" value="<?= $datitos['correo']; ?>" name="corr"><br>
            </div>

            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" value="<?= $datitos['telefono']; ?>" name="tel"><br>
            </div>

            <div class="form-group">
                <label>NSS</label>
                <input type="text" class="form-control" value="<?= $datitos['nssl']; ?>" name="nssl"><br>
            </div>

            <div class="form-group">
                <label>Rol</label>
                <input type="text" class="form-control" value="<?= $datitos['rol']; ?>" name="rol"><br>
            </div>

            <div class="form-group">
                <label>Carrera</label>
                <input type="text" class="form-control" value="<?= $datitos['carrera_idcarrera']; ?>" name="car"><br>
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
