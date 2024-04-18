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
        <h2>Editar Equipo</h2>
<form action="<?=base_url('actualizar_equipos')?>" method="post">

<div class="form group">
        <input type="hidden"class="form-control" value="<?= $datitos['idequipo'];?>" name ="ideq" ><br>
</div>
<div class="form group">
        <label>Nombre del equipo</label>
        <input type="text"class="form-control" value="<?= $datitos['nombre_equipo'];?>" name ="mat" require><br>
</div>
<div class="form group">
        <label>Marca</label>
        <input type="text"class="form-control" value="<?= $datitos['marca'];?>" name ="mar" ><br>
</div>
<div class="form group">
        <label>Modelo</label>
        <input type="text"class="form-control" value="<?= $datitos['modelo'];?>" name ="model" ><br>
</div>
<div class="form group">
        <label>Descripcion</label>
        <input type="text"class="form-control" value="<?= $datitos['descripcion'];?>" name ="descri" ><br>
</div>
<div class="form group">
        <label>Id laboratorio</label>
        <input type="idlaboratorio"class="form-control" value="<?= $datitos['idlaboratorio'];?>" name ="idlab" ><br>
</div>
<label>Estado</label>
                <select type="text"class="form-control" value="<?= $datitos['estado'];?>" name ="est" >
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
<button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>