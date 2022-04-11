//adapted from example code 'benskitchen.com'

var spinning = false;

function spin() {
    spinning = !spinning;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
    spinning = false;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel() {
    if (document.getElementById('model__RotationTimer').getAttribute('enabled') != 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

var lightOn = true;

function headlight() {
    lightOn = !lightOn;
    document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront() {
    document.getElementById('model__CA_front').setAttribute('bind', 'true');
}

function cameraBack() {
    document.getElementById('model__CA_back').setAttribute('bind', 'true');
}

function cameraLeft() {
    document.getElementById('model__CA_left').setAttribute('bind', 'true');
}

function cameraRight() {
    document.getElementById('model__CA_right').setAttribute('bind', 'true');
}

function cameraTop() {
    document.getElementById('model__CA_top').setAttribute('bind', 'true');
}

function cameraBottom() {
    document.getElementById('model__CA_bottom').setAttribute('bind', 'true');
}