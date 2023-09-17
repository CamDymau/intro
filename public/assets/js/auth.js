$(document).ready(function () {
    const btnReg = $('.btn-reg');
    const btnAuth = $('.btn-auth');
    const btnRegSubmit = $('.btn-reg-submit');
    const btnAuthSubmit = $('.btn-auth-submit');
    const register = $('.register-form');
    const auth = $('.auth-form');
    const errorBlock = $('.error-block');
    const errorText = $('.text-error');

    btnAuth.on('click', function () {
        changeForm(btnAuth, auth, register)
        changeClassBtn(btnAuth, btnReg);
    });

    btnReg.on('click', function () {
        changeForm(btnReg, register, auth);
        changeClassBtn(btnReg, btnAuth);
    });

    btnAuthSubmit.on('click', function () {
        sendSignRequest('authorization', $('.auth-form'))
    });

    btnRegSubmit.on('click', function () {
        sendSignRequest('registration', $('.register-form'))
    });

    function changeClassBtn(btnMain, btnChange) {
        if (btnMain.hasClass('btn-not-activate')) {
            btnMain.removeClass('btn-not-activate')
            btnMain.addClass('btn-activate')

            btnChange.removeClass('btn-activate')
            btnChange.addClass('btn-not-activate')
        }
    }

    function changeForm(btn, formMain, formChange) {
        if (btn.hasClass('btn-not-activate')) {
            formChange.addClass('display-none')
            formMain.removeClass('display-none')
        }
    }

    function sendSignRequest(route, formData) {
        $.post(route, formData.serialize(), function (data) {
            if (!data.result) {
                errorBlock.show();
                errorText.html(data.message);
            } else {
                window.location = data.redirect;
                errorBlock.hide();
            }
        });
    }
});
