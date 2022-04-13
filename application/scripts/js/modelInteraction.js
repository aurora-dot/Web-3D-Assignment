//adapted from example code 'benskitchen.com'

var spinning = false;

function spinY() {
    stopRotation();
    spinning = true;
    document.getElementById('model__YRotationTimer').setAttribute('enabled', spinning.toString());
}

function spinX() {
    stopRotation();
    spinning = true;
    document.getElementById('model__XRotationTimer').setAttribute('enabled', spinning.toString());
}

function spinZ() {
    stopRotation();
    spinning = true;
    document.getElementById('model__ZRotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
    if (spinning) {
        spinning = false;
        document.getElementById('model__XRotationTimer').setAttribute('enabled', spinning.toString());
        document.getElementById('model__YRotationTimer').setAttribute('enabled', spinning.toString());
        document.getElementById('model__ZRotationTimer').setAttribute('enabled', spinning.toString());
    }
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

function wireFrame() {
	var e = document.getElementById('theModel');
	e.runtime.togglePoints(true);
}
