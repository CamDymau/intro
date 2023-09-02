$(document).ready(function () {
    const btnReg = $('.btn-reg');
    const btnAuth = $('.btn-auth');
    const register = $('.register-form');
    const auth = $('.auth-form');

    btnReg.on('click', function () {
        changeForm(btnReg, register, auth);
        changeClassBtn(btnReg, btnAuth);
    });

    btnAuth.on('click', function () {
        changeForm(btnAuth, auth, register)
        changeClassBtn(btnAuth, btnReg);
    });

    function changeClassBtn(btnMain, btnChange) {
        if (btnMain.hasClass('btn-not-activate')) {
            btnMain.removeClass('btn-not-activate')
            btnMain.addClass('btn-activate')

            btnChange.removeClass('btn-activate')
            btnChange.addClass('btn-not-activate')
        }
    }

    function changeForm(btn, formMain, formChange){
        if (btn.hasClass('btn-not-activate')) {
            formChange.addClass('display-none')
            formMain.removeClass('display-none')
        }
    }

});
