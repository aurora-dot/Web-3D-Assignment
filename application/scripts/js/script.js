var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})

var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
    trigger: 'focus'
})

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
                                <inline render="true" nameSpaceName="model" mapDEFtoID="true" url="./application/assets/x3d/${selected.replace(' /g', '')}.x3d"></inline>
                            </scene>
                        </x3d> 
                    </div>
                    <h4 class="pt-5 pb-2" id="x3dModelTitle">${data[0].x3dModelTitle.htmlEscape()}</h4>
                    <p id="x3dCreationMethod">${data[0].x3dCreationMethod.htmlEscape()}</p>
                    </div>
                    `
                )

                $('#titleCard').html(data[0].modelTitle.htmlEscape().toLowerCase());
                $('#subTitleCard').html(data[0].modelSubtitle.htmlEscape());
                $('#descriptionCard').html(data[0].modelDescription.htmlEscape());

                x3dom.reload()
            }
        );
    }
}
