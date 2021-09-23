<div class="container">
    <?php 
        //verificar que tipo de form estamos haciendo
        if($_GET['a'] == 'create'){
    ?>
    <div>
        <h2>Crear Usuario</h2>
    </div>
    <form action="../../Controller/login/LoginController.php?act=create&key=admin" method="POST">
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
            <button type="submit" class="btn btn-primary btn-block">Crear</button>
        </div>
    </form>
    <?php 
        } else {
    ?>
    <div>
        <h2>Actualizar Datos</h2>
    </div>
    <form action="../../Controller/user/UserController.php?act=update" method="POST">
        <input type="hidden" name="id" value="<?php echo($userFinded['id']); ?>">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Ej: Gustavo" value="<?php echo($userFinded['name']); ?>">
        </div>
        <div class="form-group">
            <label for="lastName">Apellido</label>
            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Ej: Cuellar" value="<?php echo($userFinded['last_name']); ?>">
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Ej: 555@hotmail.com" value="<?php echo($userFinded['email']); ?>">
        </div>
        <div class="form-group">
            <label for="userName">Nombre Usuario</label>
            <!-- VERIFICAR QUE EL NOMBRE DE USAURIO NO EXISTA EN LA BD ANTES DE CREARLO -->
            <input type="text" name="userName" id="userName" class="form-control" placeholder="Ej: GustavoE12" value="<?php echo($userFinded['user_name']); ?>">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <!-- VALIDAR LA CONTRASEÑA (10 CARACTERES CON UNA LETRA Y UN CARACTER) -->
            <input type="password" name="password" id="password" class="form-control" value="<?php echo($userFinded['password']); ?>">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
        </div>
    </form>
    <?php } ?>
</div>