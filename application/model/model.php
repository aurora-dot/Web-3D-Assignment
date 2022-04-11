<?php

class Model
{
    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/data.db';

        try {
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
        }
        catch (PDOException $e) {
            echo "Oof, can't connect to db";
            print new Exception($e->getMessage());
        }
    }

    function dbCreateTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE Model3D (id INTEGER PRIMARY KEY AUTOINCREMENT, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT);");
            $this->dbhandle->exec("CREATE TABLE FrontpageInformation (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT, subTitle TEXT, descriptionInfo TEXT);");
            $this->dbhandle->exec("CREATE TABLE OtherInformation (id INTEGER PRIMARY KEY, controlType TEXT, title TEXT, subTitle TEXT);");
            return "Successful";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbInsertData()
    {
        ChromePhp::log("INSERT INTO Model3D (brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) VALUES ('Coke', 'Coca Cola X3D Model', 'Made within blender and exported to x3d, manually edited material to add texture image', 'History of Coca Cola', 'Atlanta Beginnings', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs\' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs\' Pharmacy put it on sale for five cents (about 3p) a glass.\');");

        try {
            $this->dbhandle->exec(
                'INSERT INTO FrontpageInformation (title, subTitle, descriptionInfo)
                VALUES ("coca cola great britain", "Founded in 1886 Dr John S Pemberton", "The Coca Cola Company is the world\'s leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands."); ' .
                'INSERT INTO FrontpageInformation (title, subTitle, descriptionInfo)
                VALUES ("Coca Cola", "New York Harbour, 1886", "It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs\' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs\' Pharmacy put it on sale for five cents (about 3p) a glass."); ' .
                'INSERT INTO FrontpageInformation (title, subTitle, descriptionInfo)
                VALUES ("Sprite", "West Germany, 1959", "First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world\'s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories."); ' .
                'INSERT INTO FrontpageInformation (title, subTitle, descriptionInfo)
                VALUES ("Dr Pepper", "Texas, 1885", "Dr Pepper\'s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it\'s still the same, with that distinctive flavour you just can\'t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since."); ' .

                'INSERT INTO Model3D (brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
                VALUES ("Coke", "Coca Cola X3D Model", "Made within blender and exported to x3d, manually edited material to add texture image", "History of Coca Cola", "Atlanta Beginnings", "It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs\' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs\' Pharmacy put it on sale for five cents (about 3p) a glass.");' .
                'INSERT INTO Model3D (brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES ("Sprite", "Sprite X3D Model", "Made within blender and exported to x3d, manually created material in the x3d file and added texture image", "Sprite - Fanta Klare Zitrone", "First introduced in 1961", "Crisp, refreshing, clean-tasting Sprite is now the world\'s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories."); ' .
                'INSERT INTO Model3D (brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription)
                VALUES ("Dr Pepper", "Dr Pepper X3D Model", "Made within blender and exported to x3d, manually edited material to add texture image", "Dr Pepper - Liquid Sunshine", "23 fruit flavours", "Dr Pepper\'s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it\'s still the same, with that distinctive flavour you just can\'t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since."); ' .

                'INSERT INTO OtherInformation (controlType, title, subTitle)
                VALUES ("Gallery", "3D Images", "These 3D images of the Coke can, Sprite bottle and Dr Pepper cup were rendered within blender using the Cycles renderer"); ' .
                'INSERT INTO OtherInformation (controlType, title, subTitle)
                VALUES ("Camera", "Camera Views", "These buttons select a range of X3D model viewpoints"); ' .
                'INSERT INTO OtherInformation (controlType, title, subTitle)
                VALUES ("Animation", "Animation Options", "These buttons select a range of X3D model animations to play"); ' .
                'INSERT INTO OtherInformation (controlType, title, subTitle)
                VALUES ("Render", "Render Options", "These buttons select a range of X3D model render options"); ' .
                'INSERT INTO OtherInformation (controlType, title, subTitle)
                VALUES ("Light", "Light Options", "These buttons select a range of X3D model light options"); '
            );
            return "Data inserted";
        } catch(PDOException $e) {
            echo $e->getMessage()."\n";
        }

        $this->dbhandle = NULL;
    }

    function dbGetData()
    {
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
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }

        $this->dbhandle = NULL;
        return $result;
    }

    public function model3D_info()
    {
        return array(
            'model_1' => "Coke Can 3D Image 1",
            'image3D_1' => "can_render",
            'model_2' => "Sprite Bottle 3D Image 1",
            'image3D_2' => "bottle_render",
            'model_3' => "Dr Pepper Cup 3D Image 1",
            'image3D_3' => "cup_render",
        );
    }

    public function dbGetBrand()
    {
        return array("-", "Coke", "Coke Light", "Coke Zero", "Sprite", "Dr Pepper", "Fanta");
    }
}
?>