<?php
header('Content-type: application/json');
$id = $_POST['id'];
$status = $_POST['status'];
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
    $sql = "UPDATE member SET status=? WHERE id_member=?";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            try {
            $stmt->execute([$status,$id]);
            $data = true;
            }
            catch(PDOException $e) {
              
               $data=$e->getMessage();
            }
print json_encode($data);
?>