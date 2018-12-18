<?php
$cha = $_GET['LExx'];
$user_n = $_GET['User_n'];
            header('Content-type: application/json');  
                  $where = 'WHERE '; 
                  $where .= "member.username='$user_n'";
                  $where2 =" WHERE t2.accession_number = '$cha' ";
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
                $sql = "SELECT * FROM member WHERE  member.id_member NOT IN 
        (SELECT t2.id_member_shared FROM (SELECT t1.accession_number,t1.status_ow,data_shared.id_member_shared,data_shared.status_sh,data_shared.date_shared FROM
        (SELECT data_owner.id_member,data_owner.accession_number,data_owner.status_ow FROM `member` INNER JOIN data_owner ON member.id_member = data_owner.id_member $where )AS t1
        LEFT JOIN data_shared ON t1.id_member = data_shared.id_member_owner AND t1.accession_number = data_shared.accession_number)AS t2 $where2 AND t2.status_sh != 'Unshared')
        AND member.permission !='admin'";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = array();
            foreach($result as $key=>$value)
            {
                $data[] = $value;
            }
            
            ob_end_clean();
            print json_encode($data);
?>
