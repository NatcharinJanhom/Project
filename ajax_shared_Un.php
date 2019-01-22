<?php
$cha = $_GET['LExx'];
$user_n = $_GET['User_id'];
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
                $sql = "SELECT data_shared.id_member_owner,data_shared.id_member_shared,data_shared.accession_number,data_shared.id_fact_tomato,data_shared.date_shared,member.id_member,member.firstname FROM
                (	SELECT max(data_shared.id_data_shared)AS max_id FROM data_shared 
                    WHERE data_shared.id_member_owner = '$user_n' AND data_shared.accession_number = '$cha'
                     GROUP BY data_shared.accession_number,data_shared.id_member_shared
                 ) r
                 INNER JOIN 
                 data_shared ON data_shared.id_data_shared = r.max_id AND data_shared.status_sh!='Unshared'
                  RIGHT JOIN member ON member.id_member = data_shared.id_member_shared 
                  WHERE  member.id_member != '$user_n'";
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
