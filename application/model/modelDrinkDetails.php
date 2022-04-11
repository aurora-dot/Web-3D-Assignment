<?php
    include '../debug/ChromePhp.php';
    ChromePhp::log('Hello');

    $brandName = $_GET['brand'];
    try {
        $dbhandle = new PDO('sqlite:../../db/data.db', 'user', 'password', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ));

        ChromePhp::log('here');
        ChromePhp::log(filter_var($brandName));

        $sql = 'SELECT * FROM Model_3D WHERE brand = "' . filter_var($brandName) .'";';
        $stmt = $dbhandle->query($sql);
        $result = null;
        $i = 0;

        while ($data = $stmt->fetch()) {
            $result[$i]['brand'] = $data['brand'];
            $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
            $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
            $result[$i]['modelTitle'] = $data['modelTitle'];
            $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
            $result[$i]['modelDescription'] = $data['modelDescription'];

            $i++;
        }
    } catch (PDOException $e) {
        print new Exception($e->getMessage());
    }

    $dbhandle = NULL;
    echo json_encode($result);
?>
