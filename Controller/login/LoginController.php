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
            echo('Usuario creado con exito');
        }else {
            echo('El usuario no fue creado');
        }
    }

    function loginUser($data){
        $objUser = new UserActions();
        $userFinded = $objUser->getUser($data['userName']);
        if($userFinded != false){
            if(password_verify($data['password'], $userFinded['password'])){
                echo('Usuario Autenticado con exito');
                session_start();
                $_SESSION['user'] = array('id' => $userFinded['id'], 'name' => $userFinded['name'], 
                    'last_name' => $userFinded['last_name'], 'email' => $userFinded['email'],
                    'rol_id' => $userFinded['rol_id']
                );
                header('location: ../../View/main/home.php');
                
            }else{
                echo('La contraseña no esta correcta');
            }
        }else{
            echo('El usuario no existe en la base de datos 1');
        }
        
    }

?>