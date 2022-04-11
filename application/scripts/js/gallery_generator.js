var xmlHttp = new XMLHttpRequest();
var numberOfColumns = 2;
var htmlCode = "";
var response;

$(document).ready(function() {
    var send = "scripts/php/hook.php"
    xmlHttp.open("GET", send, true);
    xmlHttp.send(null);
    xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState == 4) {
            // alert(xmlHttp.responseText);
            response = xmlHttp.responseText.split("~");
            htmlCode += '<tr>';
            for (var i = 0; i < response.length; i++) {
                htmlCode += '<td class="gallery_cell">';
                htmlCode += '<a href="lab6/images/' + response[i] + '" data-fancybox data-caption="My X3D model render">';
                htmlCode += '<img src="lab6/images/' + response[i] + '" class="image_thumbnail img-fluid"/>';
                htmlCode += '</a>';
                htmlCode += '</td>';
                if ( ((i + 1) % numberOfColumns) == 0 ) {
                    htmlCode += '</tr><tr></tr>';
                }
            }

            htmlCode+= '</tr>';
            document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});
