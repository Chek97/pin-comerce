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
            $data['password']
        );

        if($objUser->createUser($newUser) == true){
            echo('Usuario creado con exito');
        }else {
            echo('El usuario no fue creado');
        }
    }

?>