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
                                    <img class="img" src="application/assets/images/site_images/${escape(item.brand).replace(' ', '')}.jpg" alt="${item.title}" />
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-decoration-underline messapia-regular mb-4">${escape(item.title.toLowerCase())}</h3>
                                    <h6>${escape(item.subTitle)}</h6>
                                    <p>${escape(item.descriptionInfo)}</p>
                                </div>
                                <div class="pt-3">
                                    <a href="javascript:swap('${escape(item.brand)}')"">
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
        $('#title_gallery').html(escape(data[0].title));
        $('#description_gallery').html(escape(data[0].subTitle));

        $('#x3dCameraTitle').html(escape(data[1].title));
        $('#x3dCameraSubtitle').html(escape(data[1].subTitle));
        
        $('#x3dAnimationTitle').html(escape(data[2].title));
        $('#x3dAnimationSubtitle').html(escape(data[2].subTitle));
        
        $('#x3dRenderTitle').html(escape(data[3].title));
        $('#x3dRenderSubtitle').html(escape(data[3].subTitle));
        
        $('#x3dLightTitle').html(escape(data[4].title));
        $('#x3dLightSubtitle').html(escape(data[4].subTitle));
    });
}
