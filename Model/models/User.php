<?php
    //IMPORTS


    //CLASS
    class User {
        private $id;
        private $name;
        private $lastName;
        private $email;
        private $userName;
        private $password;
        private $role;

        public function __construct($name, $lastName, $email, $userName, $password){
            $this->setName($name);
            $this->setLastName($lastName);
            $this->setEmail($email);
            $this->setUserName($userName);
            $this->setPassword($password);
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setUserName($userName){
            $this->userName = $userName;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function setRole($role){
            $this->role = $role;
        }

        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getUserName(){
            return $this->userName;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getRole(){
            return $this->role;
        }
    }

?>