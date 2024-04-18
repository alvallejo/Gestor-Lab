<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Registro de Usuario</title>
    <!-- Agregar los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agregar los enlaces a los archivos JS de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .navbar-custom {
            background-color: #042243;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-custom navbar-dark">
  <!-- Logo -->
  <a class="navbar-brand" href="#"><img src="https://autoserviciobuap.mx/wp-content/uploads/LOGO-BUAP.jpg" width="130" height="60" alt="Logo BUAP"></a>
   <!-- Botón de hamburguesa para dispositivos móviles -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="container">
    <h2 class="text-center">Registro de Usuario</h2>
    <?php if (isset($success_message)) : ?>
        <script>
            // Ventana emergente con mensaje de éxito
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                text: "<?= $success_message ?>",
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = "<?= base_url('login') ?>";
            });
        </script>
    <?php endif; ?>
    <form action="<?= base_url('registro/registrar') ?>" method="post">
        <div class="form-group">
            <label class="form-label">Matrícula</label>
            <input type="text" name="matricula" class="form-control" required><br>
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required><br>
            <label class="form-label">Apellido Paterno</label>
            <input type="text" name="apellido_pa" class="form-control" required><br>
            <label class="form-label">Apellido Materno</label>
            <input type="text" name="apellido_ma" class="form-control" required><br>
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" required><br>
            <label class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" required><br>
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" required><br>
            <label class="form-label">NSS</label>
            <input type="text" name="nssl" class="form-control" required><br>
            <label class="form-label">Rol</label>
            <select name="rol" class="form-select" required>
                <option value="Estudiante">Estudiante</option>
                <option value="Maestro">Maestro</option>
                <option value="Administrador">Administrador</option>
            </select><br>
            <label class="form-label">Carrera</label>
            <input type="text" name="carrera_idcarrera" class="form-control" required><br>
            <label class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                <option value="0">Inactivo</option>
                <option value="1">Activo</option>
            </select><br>
        </div>
        <div class="form-group">
            <input type="submit" value="Registrar" class="form-control">
        </div>
    </form>
</div>

</body>
</html>
