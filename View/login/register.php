<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nuevo Usuario</title>
    <?php include_once('../shared/header.php'); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <header>
                    <h1>Crea un nuevo usuario</h1>
                </header>
                <form action="../../Controller/login/LoginController.php?act=create" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ej: Gustavo">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Apellido</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Ej: Cuellar">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ej: 555@hotmail.com">
                    </div>
                    <div class="form-group">
                        <label for="userName">Nombre Usuario</label>
                        <!-- VERIFICAR QUE EL NOMBRE DE USAURIO NO EXISTA EN LA BD ANTES DE CREARLO -->
                        <input type="text" name="userName" id="userName" class="form-control" placeholder="Ej: GustavoE12">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <!-- VALIDAR LA CONTRASEÑA (10 CARACTERES CON UNA LETRA Y UN CARACTER) -->
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>