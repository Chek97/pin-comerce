<?php 
    //IMPORTS
    require_once('../../Model/conection.php');

    //CLASS
    class UserActions{
        private $db;

        public function __construct(){
            $this->db = Conection::conect();
        }

        //METHODS
        public function createUser($user){
            //ENCRIPTAR LA CONTRASEÑA
            $statement = $this->db->prepare("INSERT INTO user VALUES(NULL, :nom, :ape, :cor, :con, :usu, 2)");
            $statement->execute(array(':nom' => $user->getName(), ':ape' => $user->getLastName(), ':cor' => $user->getEmail(),
                                        ':con' => $user->getPassword(), ':usu' => $user->getUserName())
            );

            if($statement->rowCount() > 0){
                return true;
            }else{
                return false;
            }
            
        }
    }


?>