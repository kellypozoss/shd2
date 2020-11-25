<?php
    class Conexion{
        private $Host = "";
        private $User = "";
        private $Password = "";
        private $DataBase = "";
        private $Connection;
        
        public function __construct() {
            $this-> Host = "localhost";
            $this-> User = "root";
            $this-> Password = "";
            $this-> DataBase = "usuario";
        }

        public function OpenConnection(){
            try
            {
                $this-> Connection = new PDO("mysql:host={$this->Host}; dbname={$this->DataBase}", $this->User, $this->Password);
                $this-> Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }
            catch (PDOException $e)
            {
                $this-> Connection = false;
            }
        }

        public function CloseConnection(){
            mysql_close($this-> Connection);
        }

        public function GetConnection(){
            return $this-> Connection; 
        }
    }

    /*$Obj = new Conexion();
    $Obj-> OpenConnection();
    if($Obj-> GetConnection())
        echo "Ok";
    else 
        echo "Error";*/
?>