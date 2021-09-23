<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../shared/header.php'); ?>
    <title>Administracion Usuarios</title>
</head>

<body>
    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-4" style="background-color: red;">
            <header class="admin-header">
                <h1>Panel de administracion</h1>
            </header>
            <div>
                <div class="list-group">
                    <a href="./userDashboard.php" class="list-group-item list-group-item-action">Usuarios</a>
                    <a href="#" class="list-group-item list-group-item-action">Categorias</a>
                    <a href="#" class="list-group-item list-group-item-action">Productos</a>
                    <a href="#" class="list-group-item list-group-item-action">Descuentos</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-7 col-lg-8" style="padding: 0;">
            <div style="background-color: blue;">
                <h2>Usuarios Registrados</h2>
            </div>
            <div class="container">
                <?php
                    session_start();
                    if(isset($_SESSION['message'])){
                ?>
                    <div class="alert alert-<?php echo($_SESSION['status']); ?>" role="alert">
                        <strong><?php echo($_SESSION['message']); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php 
                        session_destroy();
                    } 
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //llamar a la instancia de la base de datos
                                require_once('../../Controller/user/UserController.php');
                                foreach ($listUsers as $user) {
                            ?>
                                <tr>
                                    <td><?php echo ($user['id']); ?></td>
                                    <td><?php echo ($user['user_name']); ?></td>
                                    <td><?php echo ($user['email']); ?></td>
                                    <td colspan="3">
                                        <a href="./userDashboard.php?a=update&key=<?php echo($user['id']); ?>"><button class="btn btn-warning">Actualizar</button></a>
                                        <a href="#"><button class="btn btn-success">Ver</button></a>
                                        <a href="../../Controller/user/UserController.php?act=delete&key=<?php echo($user['id']); ?>"><button class="btn btn-danger">Borrar</button></a>
                                    </td>
                                </tr>
                            <?php
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php 
                    if(isset($_GET['a'])){
                        include('../shared/userForm.php');
                ?>
                <?php } else { ?>
                    <div>
                        <a href="./userDashboard.php?a=create"><button class="btn btn-primary btn-block">Crear usuario</button></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>

</html>