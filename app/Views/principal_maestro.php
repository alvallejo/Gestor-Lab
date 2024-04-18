<!DOCTYPE html>
<html>
<head>
    <title>Portal para Maestros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<style>
    body {
        background-color: #fff;
    }
.navbar {
    background-color: #042243 !important;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.navbar h1 {
    color: #ffffff;
    font-size: 24px;
    margin: 0;
}

.container-fluid {
    margin-top: 30px;
}

.project-info {
    margin-bottom: 30px;
}

.project-info h2 {
    font-size: 24px;
    font-weight: bold;
    color: #042243;
    font-style: italic;
}

.project-info p {
    font-size: 18px;
    line-height: 1.5;
    color: #333333;
}

.project-info img {
    width: 100%;
    margin-top: 20px;
    border-radius: 8px;
}

.project-details {
    margin-top: 30px;
}

.project-details h3 {
    font-size: 20px;
    font-weight: bold;
    color: #042243;
    font-style: italic;
    margin-bottom: 10px;
}

.project-details p {
    font-size: 18px;
    line-height: 1.5;
    color: #333333;
}

.sidebar {
    background-color: #042243;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 170px;
    padding: 6px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    color: #ffffff;
    text-decoration: none;
    display: flex;
    align-items: center;
}

.sidebar ul li a i {
    margin-right: 5px;
}

.content {
    margin-left: 200px;
    padding: 20px;
}

.user-info {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.user-info img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}

.user-info p {
    color: #ffffff;
    font-size: 16px;
    margin: 0;
}
</style>
<body>
    <div class="navbar">
        <h1>Área para Maestros</h1>
    </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="" height="50"></a>
</nav>
<div class="sidebar">
    <div class="user-info">
        <img src="https://th.bing.com/th/id/R.7f70ccdaea42a3ea7f34f470040c1b29?rik=XpAJhC2Net1BXg&pid=ImgRaw&r=0" alt="Foto de perfil del maestro" height="30">
        <a class="nav-link" href="#"><?= session('nombre'); ?></a>
    </div>
    <ul>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('capacitacion2'); ?>"><i class="fas fa-users"></i> Capacitacion</a>
        </li>
        
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('laboratorio2'); ?>"><i class="fas fa-flask"></i> Laboratorios</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('equipos2'); ?>"><i class="fas fa-handshake"></i> Equipos</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="<?= base_url('prestamo2'); ?>"><i class="fas fa-handshake"></i> Préstamo</a>
        </li>
        
    </ul>
    <a class="nav-link" href="<?= base_url('login'); ?>"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row project-info">
            <div class="col-md-12">
                <h2>Bienvenido</h2>
                <p>En esta área podrás solicitar laboratorios y equipos para tus proyectos e investigaciones en la Benemérita Universidad Autónoma de Puebla (BUAP).</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="https://th.bing.com/th/id/OIP.Lzq3fm92We6XkTAzmm4ULgHaE8?pid=ImgDet&w=720&h=480&rs=1" width="100%">
            </div>
            <div class="col-md-8 project-details">
                <h3>Sobre el Proyecto</h3>
                <p>El área para Maestros es una plataforma diseñada para facilitarte la solicitud de laboratorios y equipos necesarios para tus proyectos e investigaciones en la Benemérita Universidad Autónoma de Puebla (BUAP).</p>
                <p>Nuestro objetivo principal es proporcionarte un sistema eficiente y práctico que te permita acceder a los recursos necesarios para llevar a cabo tus actividades académicas y de investigación de manera efectiva.</p>
                <h3>Beneficios de la área para Maestros</h3>
                <p>- Facilita el proceso de solicitud de laboratorios y equipos.</p>
                <p>- Permite una mejor organización y asignación de recursos.</p>
                <p>- Agiliza la comunicación entre los usuarios y el personal encargado de administrar los recursos.</p>
                <h3>Cómo utilizar el área para Maestros</h3>
                <p>1. Inicia sesión en tu cuenta de maestro.</p>
                <p>2. Explora la lista de laboratorios y equipos disponibles.</p>
                <p>3. Selecciona los recursos que necesitas y realiza la solicitud correspondiente.</p>
                <p>4. Espera la confirmación y asignación de los recursos solicitados.</p>
                <p>5. Una vez asignados, podrás acceder al laboratorio o equipo en la fecha y hora acordadas.</p>
                <p>¡Disfruta de una experiencia académica e investigativa más eficiente y productiva con el Portal para Maestros!</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>