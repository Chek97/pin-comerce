<?php 

    require_once('../../Config/config.php');
    class Conection {

        public static function conect(){
            try {
                
                $conn = new PDO('mysql:dbname=' . DATABASE . ';host=' . HOST , USER, PASSWORD);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->exec('SET CHARACTER SET utf8');

                return $conn;
                
            }catch (Exception $e) {
                die('Error en la conexion ' . $e->getMessage());
                exit;
            }
        }
    }


?>