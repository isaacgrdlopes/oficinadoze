//Valida o Formulario das Views "carroAlterar" e "carroNovo"
$("#form_carro").validate({
    rules: {
        modelo: {
            required: true,
        },
        marca: {
            required: true,
        },
        ano: {
            required: true,
            minlength: 4,
            maxlength: 4
        },
        placa: {
            required: true,
            minlength: 8,
            maxlength: 8

        },
        idpro: {
            required: true,
        }
    },
    messages: {
        modelo: {
            required: "O campo Modelo é obrigatório!",
        },
        marca: {
            required: "O campo Marca é obrigatório!",
        },
        ano: {
            required: "O campo Ano é obrigatório!",
        },
        placa: {
            required: "O campo Placa é obrigatório!",
            minlength: "O campo Celular deve ser informado no formato AAA-0000.",
            maxlength: "O campo Celular deve ser informado no formato AAA-0000."
        }
    },
    submitHandler: function () {
        form.submit();
    }
});
//Fim da Validação!

//Valida o Formulario das Views "proprietarioAlterar" e "proprietarioNovo"
$("#form_cliente").validate({
    rules: {
        nome: {
            required: true,
            minlength: 5
        },
        cpf: {
            required: true,
            minlength: 14,
            maxlength: 14
        },
        telefone: {
            required: true,
            minlength: 14,
            maxlength: 14
        },
        celular: {
            required: true,
            minlength: 15,
            maxlength: 15

        },
        datanasc: {
            minlength: 10,
            maxlength: 10
        }
    },
    messages: {
        nome: {
            required: "O campo Nome é obrigatório!"
        },
        cpf: {
            required: "O campo CPF é obrigatório!",
            minlength: "O campo CPF deve ser informado no formato 000.000.000-00",
            maxlength: "O campo CPF deve ser informado no formato 000.000.000-00."
        },
        telefone: {
            required: "O campo Telefone é obrigatório!",
            minlength: "O campo Telefone deve ser informado no formato (00) 0000-0000.",
            maxlength: "O campo Telefone deve ser informado no formato (00) 0000-0000."
        },
        celular: {
            required: "O campo Celular é obrigatório!",
            minlength: "O campo Celular deve ser informado no formato (00) 00000-0000.",
            maxlength: "O campo Celular deve ser informado no formato (00) 00000-0000."
        },
        datanasc: {
            minlength: "O campo Data de Nascimento deve ser informado no formato XX/XX/XXXX.",
            maxlength: "O campo Data de Nascimento deve ser informado no formato XX/XX/XXXX."
        }
    },
    submitHandler: function (form) {
        form.submit();
    }
});
//Fim da Validação!

//Valida o Formulario das Views "servicoAlterar" e "servicoNovo"
$("#form_servico").validate({
    rules: {
        descricao: {
            required: true,
            maxlength: 60,
            minlength: 10
        },
        preco: {
            required: true,
        },
        dataentrega: {
            required: true,
            minlength: 10,
            maxlength: 10
        },
        idcar: {
            required: true,

        },
        idpro: {
            required: true,
        }
    },
    messages: {
        descricao: {
            required: "O campo Descrição é obrigatório!"
        },
        preco: {
            required: "O campo Valor é obrigatório!"
        },
        dataentrega: {
            required: "O campo Data de Entrega é obrigatório!",
            minlength: "O campo Data de Entrega deve ser informado no formato XX/XX/XXXX",
            maxlength: "O campo Data de Entrega deve ser informado no formato XX/XX/XXXX"
        },
        idcar: {
            required: "O campo Carro é obrigatório!"
        },
        idpro: {
            required: "O campo Cliente é obrigatório!"
        }
    },
    submitHandler: function (form) {
        form.submit();
    }
});
//Fim da Validação!