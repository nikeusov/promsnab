$.ajaxSetup({cache: false});

$.fn.padding = function (direction) {
    return parseFloat(this.css("padding-" + direction));
};

export function windowHeight() {
    return parseFloat(window.innerHeight) || parseFloat($(window).height());
}

export function windowWidth() {
    return parseFloat(window.innerWidth) || parseFloat($(window).width());
}