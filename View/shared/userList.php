<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php include_once('./header.php'); ?>
</head>

<body>
    <div class="row">
        <div class="col-xs-12 col-md-4 col-lg-4" style="background-color: red;">
            <header class="admin-header">
                <h1>Panel de administracion</h1>
            </header>
            <div>
                <div class="list-group">
                    <a href="../shared/admin/userList.php" class="list-group-item list-group-item-action">Usuarios</a>
                    <a href="#" class="list-group-item list-group-item-action">Categorias</a>
                    <a href="#" class="list-group-item list-group-item-action">Productos</a>
                    <a href="#" class="list-group-item list-group-item-action">Descuentos</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 col-lg-8" style="padding: 0;">
            <div>
                <h2>Usuarios Registrados</h2>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                //llamar a la instancia de la base de datos
                                require_once('../../Controller/user/UserController.php');
                                foreach($listUsers as $user){
                        ?>
                        <tr>
                            <td><?php echo($user['id']); ?></td>
                            <td><?php echo($user['user_name']); ?></td>
                            <td><?php echo($user['name']); ?></td>
                            <td><?php echo($user['last_name']); ?></td>
                            <td><?php echo($user['email']); ?></td>
                            <td><?php echo($user['password']); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php include_once('./footer.php'); ?>
</body>

</html>