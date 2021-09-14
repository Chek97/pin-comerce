<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include_once('../shared/header.php'); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <form action="../../Controller/login/LoginController.php?act=auth" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="">Usuario</label>
                        <input type="text" class="form-control" name="userName" placeholder="Ejemplo: X0123@hotmail.com">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        <a href="./register.php">No tienes cuenta todavia? crea una ahora</a>
                    </div>
                </form>
                <hr>
                <p>O ingresa con</p>
                <button>Google</button>
            </div>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>