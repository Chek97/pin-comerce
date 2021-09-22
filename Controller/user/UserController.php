<?php 
    //IMPORTS
    require_once('../../Model/actions/userActions.php');

    $objUser = new UserActions();
    $listUsers = $objUser->getAllUsers();
    
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'update':
                # code...
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
    


?>