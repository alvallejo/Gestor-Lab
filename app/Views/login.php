<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <title>Iniciar Sesión</title>
    <style>
        .navbar {
            background-color: #042243;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #042243;
            border-radius: 8px;
            margin-top: 20px;
        }

        .form-container h1 {
            text-align: center;
            color: #042243;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            color: #042243;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #042243;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-container button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #042243;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-container button[type="submit"]:hover {
            background-color: #1e4a78;
        }

        .form-container .error-message {
            display: none;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 8px;
        }

        .modal-header {
            background-color: #042243;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 20px;
        }

        .close {
            color: white;
            cursor: pointer;
        }

        .modal-body {
            padding: 10px 0;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            padding-top: 10px;
        }

        .modal-footer button {
            padding: 8px 16px;
            background-color: #042243;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .modal-footer button:hover {
            background-color: #1e4a78;
        }

        /* Animación de entrada de la ventana flotante */
        .modal-content.animate-in {
            animation: modalFadeIn 0.3s ease;
        }

        /* Animación de salida de la ventana flotante */
        .modal-content.animate-out {
            animation: modalFadeOut 0.3s ease;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes modalFadeOut {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>BUAP</h1>
    </div>

    <div class="form-container">
        <h1>Iniciar Sesión</h1>
        <?php if (isset($error)): ?>
        <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="<?php echo base_url('login/autenticar');?>" method="post">
            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" id="matricula" required><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required><br><br>
            <button type="submit">Ingresar</button>
            <p>¿Aún no tienes una cuenta? <a href="registro">Regístrate</a></p>
        </form>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content animate-in">
            <div class="modal-header">
                <h2>BUAP</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <p id="modal-message"></p>
            </div>
            <div class="modal-footer">
                <button id="modal-close">Cerrar</button>
            </div>
        </div>
    </div>

    <script>
        // Obtener elementos del DOM
        const errorContainer = document.querySelector('.error-message');
        const modal = document.getElementById('modal');
        const modalMessage = document.getElementById('modal-message');
        const modalClose = document.getElementById('modal-close');
        const closeButton = document.querySelector('.close');

        // Mostrar ventana flotante con el mensaje de error
        function showErrorModal(message) {
            modalMessage.textContent = message;
            modal.style.display = 'block';
        }

        // Ocultar ventana flotante
        function hideModal() {
            modal.classList.remove('animate-in');
            modal.classList.add('animate-out');
            setTimeout(() => {
                modal.style.display = 'none';
                modal.classList.remove('animate-out');
            }, 300);
        }

        // Mostrar ventana flotante al cargar la página si hay un error
        document.addEventListener('DOMContentLoaded', () => {
            if (errorContainer.textContent !== '') {
                showErrorModal(errorContainer.textContent);
            }
        });

        // Mostrar ventana flotante al hacer clic en el botón Cerrar
        closeButton.addEventListener('click', hideModal);

        // Mostrar ventana flotante al hacer clic en el botón Cerrar de la ventana flotante
        modalClose.addEventListener('click', hideModal);
    </script>
</body>

</html>
