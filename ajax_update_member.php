<?php
header('Content-type: application/json');
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$permission = $_POST['permission'];
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
    $sql = "UPDATE member SET firstname=?, lastname=?,email=?, permission=?, status=? WHERE id_member=?";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            try {
            $check =$stmt->execute([$firstname,$lastname,$email,$permission,$status,$id]);
                if($check)
                $data = true;
                else
                $data = false;
            }
            catch(PDOException $e) {
              
               $data=$e->getMessage();
            }
print json_encode($data);
?>