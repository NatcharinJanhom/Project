<?php
$cha = $_GET['aj_l'];
$user_n = $_GET['aj_o'];
            header('Content-type: application/json');     
            class conDb {
                private static $instance = NULL;
                private static $dsn = "mysql:dbname=tomatoes;host=localhost";
                private static $user = "root";
                private static $pass = "";
                    private function __construct() {}
                    private function __clone() {}
                    public static function getInstance() {
                    if (!isset(self::$instance)) {
                        self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
                        self::$instance->exec("set names utf8");
                    }
                    return self::$instance;
                    }
                }
                $sql = "UPDATE `data_owner` SET `status_ow`= 'public' WHERE data_owner.id_member = '$user_n' AND data_owner.accession_number = '$cha'";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $data = true;
            print json_encode($data);
            
?>
