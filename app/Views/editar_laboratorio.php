<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Laboratorio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #042243 !important;
            height: 40px;
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

        .container {
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>BUAP</h1>
        <li class="navbar">
            <a class="nav-link" href="<?= base_url('laboratorio'); ?>"><i class="fas fa-users"></i>Regresar</a>
        </li>
    </div>
    <div class="container">
        <h2>Editar Laboratorio</h2>
        <form action="<?= base_url('actualizar_laboratorio') ?>" method="post">

            <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $datitos['idlaboratorio']; ?>" name="idlab"><br>
            </div>

            <div class="form-group">
                <label>Nombre del laboratorio</label>
                <input type="text" class="form-control" value="<?= $datitos['nombre_laboratorio']; ?>" name="nomlab" required><br>
            </div>

            <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" class="form-control" value="<?= $datitos['ubicacion']; ?>" name="ubi"><br>
            </div>

            <div class="form-group">
                <label>Nombre del responsable</label>
                <input type="text" class="form-control" value="<?= $datitos['nombre_responsable']; ?>" name="nomres"><br>
            </div>

            <div class="form-group">
                <label>Estado</label>
                <select class="form-control" name="est">
                    <option value="1" <?= $datitos['estado'] == 1 ? 'selected' : '' ?>>Activo</option>
                    <option value="0" <?= $datitos['estado'] == 0 ? 'selected' : '' ?>>Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
</body>

</html>
