$(document).ready(function () {
    const btnReg = $('.btn-reg');
    const btnAuth = $('.btn-auth');
    const btnRegSubmit = $('.btn-reg-submit');
    const btnAuthSubmit = $('.btn-auth-submit');
    const register = $('.register-form');
    const auth = $('.auth-form');

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
        console.log(formData);

        $.post(route, formData.serialize(), function (data) {
            console.log(data)
        });
    }

});
