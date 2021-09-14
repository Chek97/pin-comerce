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
            $statement = $this->db->prepare("INSERT INTO user VALUES(NULL, :nom, :ape, :cor, :con, :usu, 2)");
            $statement->execute(array(':nom' => $user->getName(), ':ape' => $user->getLastName(), 
                ':cor' => $user->getEmail(), ':con' => $user->getPassword(), 
                ':usu' => $user->getUserName()
            ));

            if($statement->rowCount() > 0){
                return true;
            }else{
                return false;
            }
            
        }

        public function getUser($userName){
            $statement = $this->db->prepare("SELECT * FROM user WHERE user_name= :use");
            $statement->execute(array(':use' => $userName));

            if($statement->rowCount() > 0){
                return $statement->fetch(PDO::FETCH_ASSOC);
            }else {
                return false;
            }
        }
    }


?>