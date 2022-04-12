$(document).ready(function () {
	loadFrontpage();
    loadOther();
});

function loadFrontpage() {
    $.getJSON("application/model/modelFrontPage.php").done(function(data) {
        let frontCode = []

        $.each(data, function(i, item) {
            if (i == 0) {
                $('#title_home').html(item.title);
                $('#subTitle_home').html(item.subTitle);
                $('#description_home').html(item.descriptionInfo);

            } else {
                frontCode.push(
                    `
                    <div class="col-lg text-center">
                        <div class="border border-1 h-100">
                            <div class="m-3">
                                <div>
                                    <img class="img" src="application/assets/images/site_images/${item.brand.replace(' ', '')}.jpg" alt="${item.title}" />
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-decoration-underline messapia-regular mb-4">${item.title.toLowerCase()}</h3>
                                    <h6>${item.subTitle}</h6>
                                    <p>${item.descriptionInfo}</p>
                                </div>
                                <div class="pt-3">
                                    <a href="javascript:swap('${item.brand}')"">
                                        <button type=" button" class="btn btn-outline-secondary">Find out more</button>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    `
                );
            }
		});
        
        $('#frontSections').html(frontCode.join('\n'));
    });
}

function loadOther() {
    $.getJSON("application/model/modelOther.php").done(function(data) {
        $('#title_gallery').html(data[0].title.htmlEscape());
        $('#description_gallery').html(data[0].subTitle.htmlEscape());

        $('#x3dCameraTitle').html(data[1].title.htmlEscape());
        $('#x3dCameraSubtitle').html(data[1].subTitle.htmlEscape());
        
        $('#x3dAnimationTitle').html(data[2].title.htmlEscape());
        $('#x3dAnimationSubtitle').html(data[2].subTitle.htmlEscape());
        
        $('#x3dRenderTitle').html(data[3].title.htmlEscape());
        $('#x3dRenderSubtitle').html(data[3].subTitle.htmlEscape());
        
        $('#x3dLightTitle').html(data[4].title.htmlEscape());
        $('#x3dLightSubtitle').html(data[4].subTitle.htmlEscape());
    });
}
