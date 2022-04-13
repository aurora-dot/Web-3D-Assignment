//adapted from example code 'benskitchen.com' (kept reference from lab work)

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

var headlightOn = false;
var omniOn = true;
var targetOn = false;

function headlight() {
    headlightOn = !headlightOn;
    document.getElementById('model__headlight').setAttribute('headlight', headlightOn.toString());
}

function omni() {
    omniOn = !omniOn;
    possibleLights = ["LA_Light", "LA_Light_001", "LA_Light_002", "LA_Light_003"]

    for (light=0; light<possibleLights.length; light++) {
        document.getElementById('model__' + possibleLights[light]).setAttribute('intensity', 1 * omniOn);
    }
}

function target() {
    if (omniOn == false) {
        omniOn = true;
        omni();

        targetOn = !targetOn;
        document.getElementById('model__LA_Light').setAttribute('intensity', 1 * targetOn);
    }
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
