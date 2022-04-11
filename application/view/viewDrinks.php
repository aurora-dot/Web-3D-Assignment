<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <title> Drinks Image View </title>
        <script src="https://code.jquery.com/jquery-latest.js"></script>
    </head>

    <body>
        <h1>Drink brand details</h1>
        <b>Select a drink brand name:</b>
        <form>
            <select id="select">
                <?php
                    for ($i = 0; $i < count($data); $i++) {
                        echo '<option value="' . $data[$i] . '">' . $data[$i] . '</option>';
                    }
                ?>
            </select>
            </form>
            <div id="placeholder"></div>
        <script>
            $(document).ready(function() {
                $('#select').change(function() {
                    var model = $(this).val();
                    console.log('Drinks model:', model, 'has been selected');
                    var str = "";

                    $("select option:selected").each(function() {
                        str += "<div><b>brand: </b>" + $(this).text() + "</div></br>";
                        var selection = $(this).text();
                        var brandURL = "./application/model/modelDrinkDetails.php?brand=" + selection;
                        $.getJSON(brandURL)
                            .done(function(json) {
                                console.log(json);
                                str += ""

                                for (var i=0; i < json.length; i++) {
                                    str += "<div>" + json[i].brand + "</div>";
                                    str += "<div>" + json[i].x3dModelTitle + "</div>";
                                    str += "<div>" + json[i].x3dCreationMethod + "</div>";
                                    str += "<div>" + json[i].modelTitle + "</div>";
                                    str += "<div>" + json[i].modelSubtitle + "</div>";
                                    str += "<div>" + json[i].modelDescription + "</div>";
                                    str += `<div><img src='./assets/images/gallery_images/${json[i].brand.replace(' ', '')}.png'/></div>`
                                }
                                document.getElementById("placeholder").innerHTML = str;
                            })
                            .fail(function(json) {
                                console.log('Something webt wrong server side');
                            });
                    });
                });
            });
        </script>
    </body>
</html>
