<?php
$id_f = $_GET['id_fa'];
$id_ow = $_GET['id_m_o'];
$id_sh = $_GET['id_m_s'];
$ass_n = $_GET['LE'];
$date_sh = $_GET['dat_sh'];
$sta  = "shared";
$id_f = "1";


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
                $sql = "INSERT INTO `data_shared`(`id_fact_tomato`, `id_member_owner`, `id_member_shared`, `accession_number`, `date_shared`, `status_sh`) VALUES ('".$id_f."','".$id_ow."','".$id_sh."','".$ass_n."','".$date_sh."','".$sta."')";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $stmt->close();
            $conn->close();

?>