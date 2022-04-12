var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})

var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
    trigger: 'focus'
})

function escape(htmlStr) {
    return htmlStr.replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#39;");        
}

function swap(selected) {
    document.getElementById('index').style.display = 'none';
    document.getElementById('3D').style.display = 'none';
    
    if (selected == 'index') {
        document.getElementById(selected).style.display = 'block';
    } else {
        document.getElementById('3D').style.display = 'block';
        var brandURL = "./application/model/modelDrinkDetails.php?brand=" + selected;

        $.getJSON(brandURL)
            .done(function(data) {
                $('#x3dModel').html(
                    `
                    <div>
                    <div class="model3D embed-responsive border border-1">
                        <x3d>
                            <scene>
                                <inline render="true" nameSpaceName="model" mapDEFtoID="true" url="./application/assets/x3d/${selected.replace(' ', '')}.x3d"></inline>
                            </scene>
                        </x3d> 
                    </div>
                    <h4 class="pt-5 pb-2" id="x3dModelTitle">${escape(data[0].x3dModelTitle)}</h4>
                    <p id="x3dCreationMethod">${escape(data[0].x3dCreationMethod)}</p>
                    </div>
                    `
                )

                $('#titleCard').html(escape(data[0].modelTitle.toLowerCase()));
                $('#subTitleCard').html(escape(data[0].modelSubtitle));
                $('#descriptionCard').html(escape(data[0].modelDescription));

                x3dom.reload()
            }
        );
    }
}
