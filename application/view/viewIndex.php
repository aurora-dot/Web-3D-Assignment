<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Home // Coca Cola</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- import stylesheets -->
    <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'>
    <link rel="stylesheet" href="application/css/bootstrap.css" />
    <link rel="stylesheet" href="application/css/style.css" />
    <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">

    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>

<body class="d-flex flex-column min-vh-100" id="body">
    <div class="container" id="content">
        <!-- nav bar and logo -->
        <nav class="navbar navbar-expand-lg navbar-light m-4">
            <div class="container-fluid">
                <!-- logo -->
                <a class="navbar-brand" href="javascript:swap('index')""><div><div class="messapia-regular">cocacola.</div><div class="strap_under"><center>Great Britain.</center></div></div></a>
                <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a tabindex="0" class="nav-link" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="About Web 3D Applications" data-bs-content="3D Apps is a final year and postgraduate module ...">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Drinks
                                </a>
                                <ul id="dmenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <!-- model brands -->
                                    <?php
                                    for ($i = 0; $i < count($data); $i++) {
                                        echo '<li><a class="dropdown-item" href="javascript:swap(\'' . $data[$i] . '\')">' . $data[$i] . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class=" nav-item">
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact & Details</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <main class="container">
            <!-- home page view -->
            <div id="index">

                <!-- header image and text -->
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

                <!-- brand info to be added here through ajax json request -->
                <div class="row g-5" id="frontSections"></div>
            </div>

            <!-- x3d model view  -->
            <div id="3D" style="display: none;">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <ul class="nav nav-tabs inter-regular">
                                <?php
                                for ($i = 0; $i < count($data); $i++) {
                                    echo '<li class="nav-item inter-regular"><a class="nav-link inter-regular" href="javascript:swap(\'' . $data[$i] . '\')">' . $data[$i] . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class=" row">

                            <!-- x3d canvas to be added via js here -->
                            <div class="card-body" id="x3dModel">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg pt-4">
                                <!-- camera control info -->
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
                                </div>
                            </div>

                            <div class="col-lg pt-4">
                                <!-- animation control info -->
                                <h6 id="x3dAnimationTitle"></h6>
                                <p id="x3dAnimationSubtitle"></p>

                                <div class=" flex-row">
                                    <button type="button" class="btn btn-outline-secondary" onclick="spinX();">RotX</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="spinY();">RotY</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="spinZ();">RotZ</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="stopRotation();">Stop</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg pt-4">
                                <!-- render control info  -->
                                <h6 id="x3dRenderTitle"></h6>
                                <p id="x3dRenderSubtitle"></p>

                                <div class=" flex-row">
                                    <button type="button" class="btn btn-outline-secondary" onclick="wireFrame();">Wire Toggles</button>

                                    <div class="mt-3">
                                        <label for="textureInput" class="form-label">Change Texture:</label>
                                        <input type="file" class="form-control" id="textureInput">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg pt-4">
                                <!-- lighting control info -->
                                <h6 id="x3dLightTitle"></h6>
                                <p id="x3dLightSubtitle"></p>

                                <div class=" flex-row">
                                    <button type="button" class="btn btn-outline-success" onclick="resetLight();">Default</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="omni();">Omni
                                        On/Off</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="target();">Target
                                        On/Off</button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="headlight();">Headlight
                                        On/Off</button>
                                </div>
                            </div>

                            <div class="dashed"></div>
                        </div>

                        <div class="row pt-3">
                            <!-- brand information -->
                            <div class="card-body">
                                <h3 class="card-title messapia-regular pb-3"><u id="titleCard"></u></h3>
                                <h6 class="pb-1" id="subTitleCard"></h6>
                                <p id="descriptionCard" class="card-text inter-regular"></p>
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
                        <div class="row pt-3">
                            <p id="description_gallery" class="inter-bold"></p>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="mt-auto" id="footer">
        <div class="text-center mt-4 mb-4"> Coca Cola | 2022 | <a href="javascript:swap_theme()">Switch Theme</a> | <a href="https://github.com/aurora-dot/Web-3D-Assignment">GitHub</a></div>
    </footer>

    <!-- modal for contact details and references -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact & Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Email:</h6>
                    <p>ep396@sussex.ac.uk</p>
                    <h6>References:</h6>
                    <p>https://stackoverflow.com/questions/70175144/how-can-you-rotate-a-wireframe-cube-in-x3dom</p>
                    <p>https://github.com/ccampbell/chromephp/blob/master/ChromePhp.php</p>
                    <p>https://benskitchen.com</p>
                    <p>https://stackoverflow.com/a/17711190</p>
                    <h6>GitHub:</h6>
                    <p>https://github.com/aurora-dot/Web-3D-Assignment</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript imports -->
    <script src="application/scripts/js/bootstrap.bundle.min.js"></script>
    <script type='text/javascript' src='application/scripts/js/x3dom.js'></script>
    <script src="application/scripts/js/script.js"></script>
    <script src="application/scripts/js/themes.js"></script>
    <script src="application/scripts/js/gallery_generator.js"></script>
    <script src="application/scripts/js/getJsonData.js"></script>
    <script src="application/scripts/js/jquery.fancybox.min.js"></script>
    <script src="application/scripts/js/modelInteraction.js"></script>
    <script id="x3d"></script>
</body>

</html>