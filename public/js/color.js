/**
 * Created by Cat on 15.03.2017.
 */
$(document).ready(function () {
    addClassToBody(storage['BodyClass'], storage['BtnClass']);
    $('.change_color').click(function () {
        if(!checkColor()) {
            storage.setItem('BodyClass', 'normal');
            storage.setItem('BtnClass', 'pink');
            addClassToBody(storage['BodyClass'], storage['BtnClass']);
        } else {
            storage.setItem('BodyClass', 'pink');
            storage.setItem('BtnClass', 'change_color');
            addClassToBody(storage['BodyClass'], storage['BtnClass']);
        }

        // $('body').toggleClass('normal');
        // $('.change_color').toggleClass('pink');
    });
});

function addClassToBody(BodyClass, BtnClass) {
    $('body').removeClass();
    $('.change_color').removeClass('pink');
    $('body').toggleClass(BodyClass);
    $('.change_color').addClass(BtnClass);
}
function checkColor() {
    return $('body').hasClass('normal');
}
var storage = window.localStorage;
