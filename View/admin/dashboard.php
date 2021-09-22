<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrador</title>
    <?php include_once('../shared/header.php'); ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
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
        <div class="col-xs-12 col-md-7 col-lg-8" style="background-color: green; padding: 0;">
            <div style="background-color: blue;">
                <h2>Acciones Recientes</h2>
            </div>
            <div>
                <h2>Ultimos usuarios registrados</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quidem iusto dolorum deleniti veniam. Consectetur, ipsa quis in nemo aperiam totam 
                    officiis odit incidunt itaque! Ad doloribus corporis maxime temporibus sunt.
                </p>
            </div>
            <div>
                <h2>Ultimos productos agregados</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quidem iusto dolorum deleniti veniam. Consectetur, ipsa quis in nemo aperiam totam 
                    officiis odit incidunt itaque! Ad doloribus corporis maxime temporibus sunt.
                </p>
            </div>
            <div>
                <h2>Categorias existentes</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quidem iusto dolorum deleniti veniam. Consectetur, ipsa quis in nemo aperiam totam 
                    officiis odit incidunt itaque! Ad doloribus corporis maxime temporibus sunt.
                </p>
            </div>
            <div>
                <h2>Ultimos descuentos del mes</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quidem iusto dolorum deleniti veniam. Consectetur, ipsa quis in nemo aperiam totam 
                    officiis odit incidunt itaque! Ad doloribus corporis maxime temporibus sunt.
                </p>
            </div>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>