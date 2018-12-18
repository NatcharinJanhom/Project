<?php
$id_owner = $_GET['id_m_oJ'];
$id_mem = $_GET['id_mJ'];
$id_asse = $_GET['id_aJ'];



           // header('Content-type: application/json');  
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
                $sql = "UPDATE `data_shared` SET `status_sh`='Unshared' WHERE data_shared.id_member_owner = '".$id_owner."' AND data_shared.id_member_shared = '".$id_mem."' AND data_shared.accession_number = '".$id_asse."'";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $stmt->close();
            $conn->close();

?>