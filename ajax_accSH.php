<?php
$id_mem = $_GET['User_n'];




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
                $where = "WHERE data_owner.id_member ='$id_mem'";
                $sql = "SELECT * FROM
                (SELECT data_owner.status_ow,data_owner.id_member,data_owner.accession_number AS acc FROM data_owner $where)AS t1
                LEFT JOIN data_shared ON data_shared.id_member_owner = t1.id_member AND data_shared.accession_number = t1.acc
                GROUP BY data_shared.id_member_owner,data_shared.accession_number,data_shared.date_shared
                ORDER BY data_shared.id_member_shared DESC,data_shared.accession_number DESC,data_shared.date_shared DESC";
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