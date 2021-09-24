<?php 
    //IMPORTS
    require_once('../../Model/actions/userActions.php');
    require_once('../../Model/models/User.php');
    
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'update':
                updateUser($_POST);
                break;
            case 'delete':
                deleteUser($_GET['key']);
                break;
            case 'get':
                break;
            default:
                echo('Comando no valido');
                break;
        }
    }

    function deleteUser($id){
        $objUser = new UserActions();
        if($objUser->deleteUser($id)){
            session_start();
            $_SESSION['message'] = "Usuario borrado con exito";
            $_SESSION['status'] = "success";
            header('location: ../../View/admin/userDashboard.php');
        }else{
            session_start();
            $_SESSION['message'] = "El usuario no pudo ser borrado";
            $_SESSION['status'] = "danger";
            header('location: ../../View/admin/userDashboard.php');
        }
    }

    function getUsers(){
        $objUser = new UserActions();
        return $objUser->getAllUsers();
    }

    function getUser($id){
        $objUser = new UserActions();
        return $objUser->getUserWithId($id);
    }

    function updateUser($data){
        $objUser = new UserActions();
        $updateUser = new User($data['name'], $data['lastName'], 
            $data['email'], $data['userName'], 
            password_hash($data['password'], PASSWORD_DEFAULT)
        );
        $updateUser->setId($data['id']);
        
        if($objUser->updateUser($updateUser)){
            session_start();
            $_SESSION['message'] = 'El usuario fue actualizado con exito';
            $_SESSION['status'] = 'success';
            header('location: ../../View/admin/userDashboard.php');
        }else {
            session_start();
            $_SESSION['message'] = 'El usuario no fue actualizado';
            $_SESSION['status'] = 'danger';
            header('location: ../../View/admin/userDashboard.php');
        }
    }

    $listUsers = getUsers();

    if(isset($_GET['key']) && $_GET['a'] == 'update'){
        $userFinded = getUser($_GET['key']);
    }

    if(isset($_GET['key']) && $_GET['a'] == 'get'){
        $userFinded = getUser($_GET['key']);
        $showUser = new User($userFinded['name'], $userFinded['last_name'], $userFinded['email'], $userFinded['user_name'], $userFinded['password']);
    }
?>