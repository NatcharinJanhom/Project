<?php
$table = $_GET['table'];
    header('Content-type: application/json');
        $conn = new PDO("mysql:host=localhost;dbname=tomatoes", "root", "");
        $sql = "SELECT * FROM $table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = array();
            foreach($result as $key=>$value)
            {
                $data[] = $value;
            }
            print json_encode($data);
?>