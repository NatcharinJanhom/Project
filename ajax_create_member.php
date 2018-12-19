<?php
header('Content-type: application/json');
$username = $_POST['username'];
$password = $_POST['password'];
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
    $sql = "INSERT INTO member VALUES('',:username,:password,:firstname,:lastname,:email,:permission,:status,:login_fail,:login_date,:pictrue)";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            try {
            $check =$stmt->execute(['username'=>$username,'password'=>md5($password),
            'firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'permission'=>$permission,
            'status'=>$status,'login_fail'=>'0','login_date'=>NULL,'pictrue'=>NULL]);
                if($check)
                {
                $last_id=$con->lastInsertId();
                $data = $last_id;
                }
                else
                {
                    $data = false; 
                }
            }
            catch(PDOException $e) {
              
               $data=$e->getMessage();
            }
print json_encode($data);
?>