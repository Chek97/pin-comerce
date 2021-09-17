<?php 
    //IMPORTS
    require_once('../../Model/actions/userActions.php');

    $objUser = new UserActions();
    $listUsers = $objUser->getAllUsers();
    


?>