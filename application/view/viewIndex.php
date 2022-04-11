<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Home // Coca Cola</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'>
    <link rel="stylesheet" href="application/css/bootstrap.css" />
    <link rel="stylesheet" href="application/css/style.css" />
    <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">

    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>

<body class="d-flex flex-column min-vh-100" id="body">
    <div class="container" id="content">
        <nav class="navbar navbar-expand-lg navbar-light m-4">
            <div class="container-fluid">
                <a class="navbar-brand messapia-regular" href="javascript:swap('index')"">cocacola</a>
                <button class=" navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a tabindex="0" class="nav-link" role="button" data-bs-toggle="popover"
                                    data-bs-trigger="focus" title="About Web 3D Applications"
                                    data-bs-content="3D Apps is a final year and postgraduate module ...">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Drinks
                                </a>
                                <ul id="dmenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="javascript:swap('coke')"">Coca Cola</a></li>
                                <li><a class=" dropdown-item" href="javascript:swap('sprite')"">Sprite</a></li>
                                <li><a class=" dropdown-item" href="javascript:swap('drpepper')"">Dr Pepper</a></li>
                            </ul>
                        </li>
                        <li class=" nav-item">
                                            <a class="nav-link" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Contact</a>
                                    </li>
                                </ul>
                    </div>
            </div>
        </nav>

        <main class="container">
            <div id="index">
                <div class="row">
                    <div class="col-lg">
                        <div class="bg-main-img text-center">
                            <div class="p-5 mb-5">
                                <div class="bg-white text-black p-3 border border-5" id="index-top-bar">
                                    <h1 id="title_home" class="messapia-regular py-3"></h1>
                                    <h6 id="subTitle_home" class="mb-3 size"></h6>
                                    <p id="description_home" class="mb-3"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg text-center">
                        <div class="border border-1 h-100">
                            <div class="m-3">
                                <div>
                                    <img class="img" src="assets/images/site_images/coca_cola.jpg" alt="coca cola" />
                                </div>
                                <div class="mt-4">
                                    <h3 id="title_left" class="text-decoration-underline messapia-regular mb-4"></h3>
                                    <h6 id="subTitle_left"></h6>
                                    <p id="description_left"></p>
                                </div>
                                <div class="pt-3">
                                    <a href="javascript:swap('coke')"">
                                        <button type=" button" class="btn btn-outline-secondary">Find out more</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg text-center">
                        <div class="border border-1 h-100">
                            <div class="m-3">
                                <div>
                                    <img class="img" src="assets/images/site_images/sprite.jpg" alt="sprite" />
                                </div>
                                <div class="mt-4">
                                    <h3 id="title_centre" class="text-decoration-underline messapia-regular mb-4"></h3>
                                    <h6 id="subTitle_centre"></h6>
                                    <p id="description_centre"></p>
                                </div>
                                <div class="pt-3">
                                    <a href="javascript:swap('sprite')"">
                                        <button type=" button" class="btn btn-outline-secondary">Find out more</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg text-center">
                        <div class="border border-1 h-100">
                            <div class="m-3">
                                <div>
                                    <img class="img" src="assets/images/site_images/dr_pepper.jpg" alt="dr pepper" />
                                </div>
                                <div class="mt-4">
                                    <h3 id="title_right" class="text-decoration-underline messapia-regular mb-4"></h3>
                                    <h6 id="subTitle_right"></h6>
                                    <p id="description_right"></p>
                                </div>
                                <div class="pt-3">
                                    <a href="javascript:swap('drpepper')"">
                                        <button type=" button" class="btn btn-outline-secondary">Find out more</button>
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="3D" style="display: none;">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <ul class="nav nav-tabs inter-regular">
                                <li class="nav-item inter-regular"><a class="nav-link inter-regular"
                                        href="javascript:swap('coke')"">Coke</a></li>
                                <li class=" nav-item inter-regular"><a class="nav-link inter-regular"
                                            href="javascript:swap('sprite')"">Sprite</a></li>
                                <li class=" nav-item inter-regular"><a class="nav-link inter-regular"
                                                href="javascript:swap('drpepper')"">Dr. Pepper</a></li>
                            </ul>
                        </div>
                        <div class=" row">
                                                <div class="card-body">
                                                    <div class="coke">
                                                        <div class="model3D embed-responsive border border-1">
                                                            <x3d>
                                                                <scene>
                                                                    <inline nameSpaceName="model" mapDEFtoID="true" url="assets/x3d/can.x3d"></inline>
                                                                </scene>
                                                            </x3d>
                                                        </div>
                                                        <h4 class="pt-5 pb-2" id="x3dModelTitle_coke"></h4>
                                                        <p id="x3dCreationMethod_coke"></p>
                                                    </div>

                                                    <div class="drpepper">
                                                        <div class="model3D embed-responsive border border-1">
                                                            <x3d>
                                                                <scene>
                                                                    <inline nameSpaceName="model" mapDEFtoID="true" url="assets/x3d/cup.x3d"></inline>
                                                                </scene>
                                                            </x3d>
                                                        </div>
                                                        <h4 class="pt-5 pb-2" id="x3dModelTitle_drpepper"></h4>
                                                        <p id="x3dCreationMethod_drpepper"></p>
                                                    </div>

                                                    <div class="sprite">
                                                        <div class="model3D embed-responsive border border-1">
                                                            <x3d>
                                                                <scene>
                                                                    <inline nameSpaceName="model" mapDEFtoID="true" url="assets/x3d/bottle.x3d"></inline>
                                                                </scene>
                                                            </x3d>
                                                        </div>
                                                        <h4 class="pt-5 pb-2" id="x3dModelTitle_sprite"></h4>
                                                        <p id="x3dCreationMethod_sprite"></p>
                                                    </div>
                                                </div>
                        </div>

                        <div class="row">
                            <div class="col-lg pt-4">
                                <h6 id="x3dCameraTitle"></h6>
                                <p id="x3dCameraSubtitle"></p>

                                <div class="flex-row">
                                    <button type="button" class="btn btn-outline-success" onclick="cameraFront()">Default</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="cameraFront()">Front</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="cameraBack()">Back</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="cameraLeft()">Left</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="cameraRight()">Right</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="cameraTop()">Top</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="cameraBottom()">Bottom</button>
                                    <button type="button" class="btn btn-outline-dark disabled">Off</button>
                                </div>
                            </div>

                            <div class="col-lg pt-4">
                                <h6 id="x3dAnimationTitle"></h6>
                                <p id="x3dAnimationSubtitle"></p>

                                <div class=" flex-row">
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="spin();">RotX</button>
                                    <button type="button" class="btn btn-outline-secondary">RotY</button>
                                    <button type="button" class="btn btn-outline-secondary">RotZ</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="stopRotation()">Stop</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg pt-4">
                                <h6 id="x3dRenderTitle"></h6>
                                <p id="x3dRenderSubtitle"></p>

                                <div class=" flex-row">
                                    <button type="button" class="btn btn-outline-success">Poly</button>
                                    <button type="button" class="btn btn-outline-secondary">Wire</button>
                                    <button type="button" class="btn btn-outline-success">Headlight</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="headlight();">Default</button>
                                </div>
                            </div>

                            <div class="col-lg pt-4">
                                <h6 id="x3dLightTitle"></h6>
                                <p id="x3dLightSubtitle"></p>

                                <div class=" flex-row">
                                    <button type="button" class="btn btn-outline-success">Default</button>
                                    <button type="button" class="btn btn-outline-secondary">Omni
                                        On/Off</button>
                                    <button type="button" class="btn btn-outline-secondary">Target
                                        On/Off</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="headlight();">Headlight
                                        On/Off</button>
                                </div>
                            </div>

                            <div class="dashed"></div>
                        </div>

                        <div class="row pt-3">
                            <div class="card-body coke" style="display: none;">
                                <h3 class="card-title messapia-regular pb-3"><u id="title_coke"></u></h3>
                                <h6 class="pb-1" id="subTitle_coke"></h6>
                                <p id="description_coke" class="card-text inter-regular"></p>
                            </div>

                            <div class="card-body drpepper" style="display: none;">
                                <h3 class="card-title messapia-regular pb-3"><u id="title_drpepper"></u></h3>
                                <h6 class="pb-1" id="subTitle_drpepper"></h6>
                                <p id="description_drpepper" class="card-text inter-regular"></p>
                            </div>

                            <div class="card-body sprite" style="display: none;">
                                <h3 class="card-title messapia-regular pb-3"><u id="title_sprite"></u></h3>
                                <h6 class="pb-1" id="subTitle_sprite"></h6>
                                <p id="description_sprite" class="card-text inter-regular"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div style="width: 50%; height: 100%;" class="border-side"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row mb-2">
                            <h3 id="title_gallery" class="inter-regular"></h3>
                        </div>
                        <div class="row">
                            <table id="gallery"></table>
                        </div>
                        <div class="row">
                            <p id="description_gallery" class="inter-bold"></p>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="mt-auto" id="footer">
        <div class="text-center mt-4 mb-4"> Coca Cola | 2022 | <a href="javascript:swap_theme()">Switch Theme</a></div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Email: ep396@sussex.ac.uk</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="application/scripts/js/bootstrap.bundle.min.js"></script>
    <script type='text/javascript' src='application/scripts/js/x3dom.js'></script>
    <script src="application/scripts/js/script.js"></script>
    <script src="application/scripts/js/themes.js"></script>
    <script src="application/scripts/js/gallery_generator.js"></script>
    <script src="application/scripts/js/getJsonData.js"></script>
    <script src="application/scripts/js/jquery.fancybox.min.js"></script>
    <script src="application/scripts/js/modelInteraction.js"></script>
</body>

</html>