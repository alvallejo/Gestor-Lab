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
                    <a class="nav-link" href="principal_alumno">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center mb-5">Formulario de registro de prestamos</h2>
        <form action="<?=base_url('guardar_prestamo2')?>" method="post">
            <div class="form-group">
                <label for="fecha_prestamo" class="form-label">Fecha del prestamo:</label>
                <input type="date" class="form-control" id="fecha_prestamo" placeholder="Fecha" name="fp" required>
            </div>
            <div class="form-group">
                <label for="hora_in" class="form-label">Hora de inicio:</label>
                <input type="time" class="form-control" id="hora_in" placeholder="Hora" name="hi" required>
            </div>
            <div class="form-group">
                <label for="hora_fin" class="form-label">Hora del fin:</label>
                <input type="time" class="form-control" id="hora_fin" placeholder="Hora" name="hf" required>
            </div>
            <div class="form-group">
                <label for="observaciones" class="form-label">Observaciones:</label>
                <input type="text" class="form-control" id="observaciones" placeholder="Observaciones" name="ob" required>
            </div>
            <div class="form-group">
                <label class="form-label">Número de Usuario</label>
                <select name="idu" class="form-control">
                    <?php foreach ($datitos as $dato): ?>
                    <option value= <?= $dato['idusuario']; ?>><?= $dato['matricula']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Número de Laboratorio</label>
                    <select name="idlab" class="form-control">
                    <?php foreach ($laboratorios as $laboratorio): ?>
                     <option value="<?= $laboratorio['idlaboratorio']; ?>"><?= $laboratorio['nombre_laboratorio']; ?></option>
            <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-group">
                <label for="idequipo" class="form-label">Número de Equipo:</label>
                    <select name="eq" class="form-control">
                      <?php foreach ($equipos as $equipo): ?>
                      <option value="<?= $equipo['idequipo']; ?>"><?= $equipo['nombre_equipo']; ?></option>
                      <?php endforeach; ?>
                     </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</body>
</html> 