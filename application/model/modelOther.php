<?php 
    include '../debug/ChromePhp.php';
    
    try {
        $dbhandle = new PDO('sqlite:../../db/data.db', 'user', 'password', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ));

        $sql = 'SELECT * FROM OtherInformation;';
        $stmt = $dbhandle->query($sql);
        $result = null;
        $i = 0;

        while ($data = $stmt->fetch()) {
            $result[$i]['controlType'] = $data['controlType'];
            $result[$i]['title'] = $data['title'];
            $result[$i]['subTitle'] = $data['subTitle'];

            $i++;
        }
    } catch (PDOException $e) {
        print new Exception($e->getMessage());
    }

    $dbhandle = NULL;
    echo json_encode($result);
?>