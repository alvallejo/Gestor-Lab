<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Baja de usuarios</title>
</head>
<body>
    <h1>Baja de usuarios</h1>
    <?php if (isset($mensaje)): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>
    <form method="post" action="<?= base_url('eliminar_usuario') ?>">
        <label for="mat">Matrícula:</label>
        <input type="text" name="mat" id="mat">
        <br>
        <button type="submit">Borrar usuario</button>
    </form>
</body>
</html>
