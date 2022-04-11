<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test View</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            h1 {
                color: red;
                margin-left: 5px;
            }

            h2 {
                color: blue;
                margin: 5px;
            }

            p {
                color: green;
                margin-left: 5px;
            }

            .imgBox {
                padding: 0.25rem;
                margin-top: 5px;
                margin-bottom: 5px;
                border: 1px solid purple;
                border-radius: 0.25rem;
                width: 300px;
            }

            .box {
                border: 1px solid rgba(0, 0, 0, 1.0);
                padding: 5px;
                float:left;
                margin: 5px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <h1>Initial 3D App Test View</h1>
        <p>If you see stuff below, basic mvc is working</p>
        <div class="box">
            <h2><?php echo $model_1 ?></h2>
            <img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_1 ?>.png'/>
        </div>
        <div class="box">
            <h2><?php echo $model_2 ?></h2>
            <img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_2 ?>.png'/>
        </div>
        <div class="box">
            <h2><?php echo $model_3 ?></h2>
            <img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_3 ?>.png'/>
        </div>

    </body>
</html>