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

        public function getAllUsers(){
            $statement = $this->db->prepare("SELECT * FROM user");
            $statement->execute(array());

            $list = array();

            if($statement->rowCount() > 0){
                while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                    $list[] = $row;
                }

                return $list;
            }else{
                return 0;
            }
        }

        public function deleteUser($id){
            $statement = $this->db->prepare('DELETE FROM user WHERE id= :id');
            $statement->execute(array(':id' => $id));

            if($statement->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function getUserWithId($id){
            $statement = $this->db->prepare("SELECT * FROM user WHERE id= :id");
            $statement->execute(array(':id' => $id));

            if($statement->rowCount() > 0){
                return $statement->fetch(PDO::FETCH_ASSOC);
            }else {
                return false;
            }
        }

        public function updateUser($user){
            $statement = $this->db->prepare("UPDATE user SET name= :nam, last_name= :las, email= :cor, password= :pass, user_name= :use WHERE id= :id");
            $statement->execute(array(':id' => $user->getId(), ':nam' => $user->getName(), ':las' => $user->getLastName(), ':cor' => $user->getEmail(),
                ':pass' => $user->getPassword(), ':use' => $user->getUserName()));

            if($statement->rowCount() > 0){
                return true;
            }else {
                return false;
            }
        }
    }


?>