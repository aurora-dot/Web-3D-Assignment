$(document).ready(function () {
	loadFrontpage();
});

// // JavaScript Document
// $(document).ready(function () {

//     //AJAX service request to get the main text data from the json data store
//     $.getJSON('./model/data.json', function (jsonObj) {
//         console.log(jsonObj);
//         //Get the home page main text data
//         $('#title_home').html(jsonObj.pageTextData[0].title);
//         $('#subTitle_home').html(jsonObj.pageTextData[0].subTitle);
//         $('#description_home').html(jsonObj.pageTextData[0].description);

//         //Get the home page left column text data
//         $('#title_left').html(jsonObj.pageTextData[1].title);
//         $('#subTitle_left').html(jsonObj.pageTextData[1].subTitle);
//         $('#description_left').html(jsonObj.pageTextData[1].description);

//         //Get the home page centre column text data
//         $('#title_centre').html(jsonObj.pageTextData[2].title);
//         $('#subTitle_centre').html(jsonObj.pageTextData[2].subTitle);
//         $('#description_centre').html(jsonObj.pageTextData[2].description);

//         //Get the home page right column text data
//         $('#title_right').html(jsonObj.pageTextData[3].title);
//         $('#subTitle_right').html(jsonObj.pageTextData[3].subTitle);
//         $('#description_right').html(jsonObj.pageTextData[3].description);

//         //Get the coke main text data
//         $('#x3dModelTitle_coke').html(jsonObj.pageTextData[4].x3dModelTitle);
//         $('#x3dCreationMethod_coke').html(jsonObj.pageTextData[4].x3dCreationMethod);
//         $('#title_coke').html(jsonObj.pageTextData[4].title);
//         $('#subTitle_coke').html(jsonObj.pageTextData[4].subTitle);
//         $('#description_coke').html(jsonObj.pageTextData[4].description);

//         //Get the sprite main text data
//         $('#x3dModelTitle_sprite').html(jsonObj.pageTextData[5].x3dModelTitle);
//         $('#x3dCreationMethod_sprite').html(jsonObj.pageTextData[5].x3dCreationMethod);
//         $('#title_sprite').html(jsonObj.pageTextData[5].title);
//         $('#subTitle_sprite').html(jsonObj.pageTextData[5].subTitle);
//         $('#description_sprite').html(jsonObj.pageTextData[5].description);

//         //Get the pepper main text data
//         $('#x3dModelTitle_drpepper').html(jsonObj.pageTextData[6].x3dModelTitle);
//         $('#x3dCreationMethod_drpepper').html(jsonObj.pageTextData[6].x3dCreationMethod);
//         $('#title_drpepper').html(jsonObj.pageTextData[6].title);
//         $('#subTitle_drpepper').html(jsonObj.pageTextData[6].subTitle);
//         $('#description_drpepper').html(jsonObj.pageTextData[6].description);

//         //Get the gallery contents data
//         $('#title_gallery').html(jsonObj.pageTextData[7].galleryTitle);
//         $('#description_gallery').html(jsonObj.pageTextData[7].galleryDescription);

//         //Get camera contents data
//         $('#x3dCameraTitle').html(jsonObj.pageTextData[8].CameraTitle);
//         $('#x3dCameraSubtitle').html(jsonObj.pageTextData[8].CameraSubtitle);
        
//         //Get camera contents data
//         $('#x3dAnimationTitle').html(jsonObj.pageTextData[9].AnimationTitle);
//         $('#x3dAnimationSubtitle').html(jsonObj.pageTextData[9].AnimationSubtitle);
        
//         //Get camera contents data
//         $('#x3dRenderTitle').html(jsonObj.pageTextData[10].RenderTitle);
//         $('#x3dRenderSubtitle').html(jsonObj.pageTextData[10].RenderSubtitle);
        
//         //Get camera contents data
//         $('#x3dLightTitle').html(jsonObj.pageTextData[11].LightTitle);
//         $('#x3dLightSubtitle').html(jsonObj.pageTextData[11].LightSubtitle);

//     });
// });



function loadFrontpage() {
    $.getJSON("application/model/modelFrontPage.php", function(data) {
        console.log(data);
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
                                    <h3 class="text-decoration-underline messapia-regular mb-4">${item.title}</h3>
                                    <h6>${item.subTitle}</h6>
                                    <p>${item.descriptionInfo}</p>
                                </div>
                                <div class="pt-3">
                                    <a href="javascript:swap('${item.brand.replace(' ', '')}')"">
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
