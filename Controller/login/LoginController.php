<?php 
    //IMPORTS
    require('../../Model/models/User.php');
    require_once('../../Model/actions/userActions.php');

    //ACTIONS
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'create':
                createUser($_POST);
                break;
            case 'auth':
                loginUser($_POST);
                break;
            default:
                echo('Comando no aceptado');
                break;
        }
    }
        
    //METHODS
    function createUser($data){
        $objUser = new UserActions();    
        $newUser = new User($data['name'], $data['lastName'], 
            $data['email'], $data['userName'], 
            password_hash($data['password'], PASSWORD_DEFAULT)
        );

        if($objUser->createUser($newUser) == true){
            session_start();
            $_SESSION['message'] = 'El usuario fue creado con exito';
            $_SESSION['status'] = 'success';
            if(isset($_GET['key'])){
                header('location: ../../View/admin/userDashboard.php');
            }else{
                header('location: ../../View/login/register.php');
            }
        }else {
            session_start();
            $_SESSION['message'] = 'El usuario no pudo ser creado, intentalo de nuevo';
            $_SESSION['status'] = 'danger';
            if(isset($_GET['key'])){
                header('../../View/admin/userDashboard.php?a=create');
            }else{
                header('location: ../../View/login/register.php');
            }
        }
    }

    function loginUser($data){
        $objUser = new UserActions();
        $userFinded = $objUser->getUser($data['userName']);
        if($userFinded != false){
            if(password_verify($data['password'], $userFinded['password'])){
                session_start();
                $_SESSION['user'] = array('id' => $userFinded['id'], 'name' => $userFinded['name'], 
                    'last_name' => $userFinded['last_name'], 'email' => $userFinded['email'],
                    'rol_id' => $userFinded['rol_id']
                );
                autenticatedRole($userFinded['rol_id']);                
            }else{
                session_start();
                $_SESSION['message'] = 'El usuario y/o contraseña no son correctos';
                header('location: ../../View/login/login.php');
            }
        }else{
            session_start();
            $_SESSION['message'] = 'El usuario y/o contraseña no son correctos';
            header('location: ../../View/login/login.php');
        }
        
    }

    function autenticatedRole($role){
        if($role == 1){
            header('location: ../../View/admin/dashboard.php');
        }else{
            header('location: ../../View/main/home.php');
        }
    }

?>