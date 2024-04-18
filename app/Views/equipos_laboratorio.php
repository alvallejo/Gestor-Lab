<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Equipos de laboratorios</title>
</head>
<body>
<div class="w3-container">
    <h2>Equipos de laboratorios</h2>
    <br>
    <h4>Lista de equipos</h4>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Nombre del equipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripcion</th>
                <th>Id Laboratorio</th>
                <th>Estado</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            <?php foreach ($datitos as $dato): ?>
                <tr>
                    <td><?= $dato['idequipo']; ?></td>
                    <td><?= $dato['nombre_equipo']; ?></td>
                    <td><?= $dato['marca']; ?></td>
                    <td><?= $dato['modelo']; ?></td>
                    <td><?= $dato['descripcion']; ?></td>
                    <td><?= $dato['idlaboratorio']; ?></td>
                    <td><?= $dato['estado']; ?></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</body>
</html>
