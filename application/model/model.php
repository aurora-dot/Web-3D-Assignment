<?php
class Model {
    public $dbhandle;

    public function __construct() {
        $dsn = 'sqlite:./db/data.db';

        try {
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
        } catch (PDOException $e) {
            echo "Oof, can't connect to db";
            print new Exception($e->getMessage());
        }
    }

    function dbCreateTable(){
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (brand TEXT PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            return "Successful";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbInsertData() {
        try {
            $this->dbhandle->exec(
            "INSERT INTO Model_3D (brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES ('Coke', 'string_1', 'string_2', 'string_3', 'string_4', 'string_5'); " .
            "INSERT INTO Model_3D (brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES ('Sprite', 'string_1', 'string_2', 'string_3', 'string_4', 'string_5'); " .
            "INSERT INTO Model_3D (brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES ('Dr Pepper', 'string_1', 'string_2', 'string_3', 'string_4', 'string_5'); ");
            return "Data inserted";
        } catch(PDOException $e) {
            echo $e->getMessage()."\n";
        }

        $this->dbhandle = NULL;
    }

    function dbGetData() {
        try {
            $sql = 'SELECT * FROM Model_3D';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = -0;

            while ($data = $stmt->fetch()) {
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

        $this->dbhandle = NULL;
        return $result;
    }

    public function model3D_info() {
        return array(
            'model_1' => "Coke Can 3D Image 1",
            'image3D_1' => "can_render",
            'model_2' => "Sprite Bottle 3D Image 1",
            'image3D_2' => "bottle_render",
            'model_3' => "Dr Pepper Cup 3D Image 1",
            'image3D_3' => "cup_render",
        );
    }

    public function dbGetBrand() {
        return array("-", "Coke", "Coke Light", "Coke Zero", "Sprite", "Dr Pepper", "Fanta");
    }
}
?>
