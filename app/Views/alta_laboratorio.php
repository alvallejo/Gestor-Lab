<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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

        .container {
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        @media (max-width: 576px) {
            .form-group {
                margin-bottom: 0.5rem;
            }
            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
            }
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
        <h2>Nuevo Laboratorio</h2>
        <form action="<?= base_url('guardar_laboratorio') ?>" method="post">
            <div class="form-group">
                <label>Nombre Laboratorio</label>
                <input type="text" class="form-control" id="nombre_laboratorio" placeholder="Nombre Laboratorio" name="nomlab" required>
            </div>
            <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" class="form-control" id="ubicacion" placeholder="Ubicacion" name="ubi" required>
            </div>
            <div class="form-group">
                <label>Nombre Responsable</label>
                <input type="text" class="form-control" id="nombre_responsable" placeholder="Nombre del Responsable" name="nomres" required>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <select name="est" class="form-control">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>

</html>
