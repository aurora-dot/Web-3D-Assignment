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

    multi = ['coke', 'sprite', 'drpepper']
    multi.forEach(element => {
        elems = Array.from(document.getElementsByClassName(element));
        elems.forEach(nested_element => {
            nested_element.style.display = 'none';
        });
    });
    
    if (selected == 'index') {
        document.getElementById(selected).style.display = 'block';
    } else {
        document.getElementById('3D').style.display = 'block';

        elems = Array.from(document.getElementsByClassName(selected));
        elems.forEach(nested_element => {
            nested_element.style.display = 'block';
        });
    }
}
