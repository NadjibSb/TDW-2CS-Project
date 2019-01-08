<?php

    class Db{
        
        private static $conn;
        private static $isConnected = false;


        public static function connect(){
            require_once __DIR__.'/Dbconfig.php' ;
            if(!Db::$isConnected){
                try {
                    self::$conn = new PDO($dsn, $userName, $passWord); 
                    self::$isConnected = true;
                } 
                    
                catch (PDOException $e){
                    printf("la connexion a echoué: %s \n",$e->getMessage());
                    exit();
                }
            }
        }



        public static function prepare_and_execute_query($requete, $donnees){
            if(!Db::$isConnected)
            {
                Db::connect();
            }
            echo $requete;
            $statement = self::$conn->prepare($requete);
            $statement->execute($donnees);
            return self::fetchAll($statement);
        }
    

        public static function execute_query($requete){
            return self::prepare_and_execute_query($requete,array());
        }
    

        private static function fetchAll($resultatRequete){
            if($resultatRequete){
                return $resultatRequete->fetchAll();
            }else{
                return false;
            }
        }

        public function close(){
            $isConnected = false;
            $this->conn->close();
        }
    }

?>