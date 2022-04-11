var theme = 'light';

function light_theme() {
    document.getElementById('body').style.backgroundColor = 'white';
    document.getElementById('footer').style.color = 'black';
    document.getElementById('dmenu').style.backgroundColor = 'white';
    document.getElementById('index-top-bar').style.backgroundColor = 'white';
    
    $('#index-top-bar').addClass("bg-white");
    $('.border').removeClass("border-white");
    $('.dashed').removeClass("dashed-white");

    var all = document.querySelectorAll('#content *');
    for (var i=0, max=all.length; i < max; i++) {
        try {all[i].style.color = "";}
        catch(TypeError) {}
    }
}

function dark_theme() {
    document.getElementById('body').style.backgroundColor = '#282a36';
    document.getElementById('footer').style.color = 'white';
    document.getElementById('dmenu').style.backgroundColor = '#282a36';
    document.getElementById('index-top-bar').style.backgroundColor = '#282a36';
    
    $('#index-top-bar').removeClass("bg-white");
    $('.border').addClass("border-white");
    $('.dashed').addClass("dashed-white");

    var all = document.querySelectorAll('#content *');
    for (var i=0, max=all.length; i < max; i++) {
        try {all[i].style.color = "white";}
        catch(TypeError) {}
    }
}

function swap_theme() {
    if (theme == 'light') {
        dark_theme();
        theme = 'dark';
    } else if (theme == 'dark') {
        light_theme();
        theme = 'light';
    }
}
