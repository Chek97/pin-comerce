<div class="container">
    <div>
        <h2>Informacion Del Usuario</h2>
    </div>
    <div>
        <label>Nombre:</label><span> <?php echo($showUser->getName()); ?></span>
        <br>
        <label>Apellido:</label><span> <?php echo($showUser->getLastName()); ?></span>
        <br>
        <label>Correo:</label><span> <?php echo($showUser->getEmail()); ?></span>
        <br>
        <label>Usuario:</label><span> <?php echo($showUser->getUserName()); ?></span>
        <br>
        <label>Contraseña:</label><span> <?php echo($showUser->getPassword()); ?></span>
    </div>
    <div>
        <a href="./userDashboard.php?a=create"><button class="btn btn-primary btn-block">Crear Nuevo Usuario</button></a>
    </div>
</div>