import {windowHeight} from "./global";

export let arcticmodal_settings = {
    overlay: {css: {opacity: .9}}
};

arcticmodal_settings["beforeOpen"] = function (data, el) {
    arcticModalMaxHG(el);
};

$(window).resize(function () {
    arcticModalMaxHG(".intopModal:visible");
});

function arcticModalMaxHG(modal) {
    let modalParent = $(modal).parent();
    let maxHg = windowHeight() - modalParent.padding("top") - modalParent.padding("bottom");
    $(modal).css("max-height", maxHg);
}