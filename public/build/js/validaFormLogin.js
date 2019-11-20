// Validações do Form_Login.
$("#form_cadastro").validate({
    rules: {
        login_cadastro: {
            required: true,
            minlength: 10
        },
        senha_cadastro: {
            required: true,
            minlength: 10
        },
        senha_cadastro1: {
            required: true,
            equalTo: "#senha_cadastro"
        },
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        senha_cadastro: {
            required: "O campo senha é obrigatório.",
        },
        senha_cadastro1: {
            required: "O campo confirmar senha é obrigatório.",
            equalTo: "O campo confirmar senha deve ser identico ao campo senha."
        },
        login_cadastro: {
            required: "O campo login é obrigatório.",
        },
        email: {
            required: "O campo email é obrigatório.",
        }
    },
    submitHandler: function (form) {
        form.submit();
    }
});

$("#form_login").validate({
    rules: {
        login: {
            required: true,
        },
        senha: {
            required: true,
        }
    },
    messages: {
        login: {
            required: "Informe o login!",
        },
        senha: {
            required: "Informe a senha!",
        }
    },
    submitHandler: function (form) {
        form.submit();
    }
});
//Fim das Validações do Form_Login
