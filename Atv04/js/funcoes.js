$(document).ready(function() {
    console.log("Documento pronto!");

    $("#acesso").validate({
        rules: {
            nome: {
                required: true,
                minlength: 10
            },
            rua: {
                required: true,
                minlength: 1
            },
            numero: {
                required: true,
                minlength: 1
            },
            complemento: {
                required: true,
                minlength: 1
            },
            cep: {
                required: true,
                minlength: 8
            },
            matricula: {
                required: true,
                minlength: 1
            },
            cidade: {
                required: true,
                notEqual: "0"
            },

            estado: {
                required: true,
                notEqual: "0"
            },
            telefone: {
                required: true,
                minlength: 9
            },
            celular: {
                required: true,
                minlength: 9
            },
            email: {
                required: true,
                email: true,
            },
            optsexo: {
                required: true
            },
            cpf: {
                required: true,
                cpf: true
            },
            area: {
                required: true,
            },
            usuario: {
                required: true,
                minlength: 6
            },
            senha: {
                required: true,
            },
            rsenha: {
                required: true,
                equalTo: "#senha"
            },
        },


        messages: {
            nome: {
                required: "Informe o nome corretamente.",
            },
            rsenha: {
                equalTo: "Repita a senha acima"
            },
            area: {
                required: "Seleciona pelo menos uma área",
            }


        },
        // Comandos abaixo necessários para funcionar com o bootstrap.
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },

        submitHandler: function(form) {
            form.submit();
        }

    });

    jQuery.extend(jQuery.validator.messages, {
        required: "Campo obrigatório.",
        remote: "Please fix this field.",
        email: "Digite um e-mail válido.",
        url: "Please enter a valid URL.",
        date: "Please enter a valid date.",
        dateISO: "Please enter a valid date (ISO).",
        number: "Please enter a valid number.",
        digits: "Please enter only digits.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Por favor, repita os valores.",
        accept: "Please enter a value with a valid extension.",
        maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
        minlength: jQuery.validator.format("Digite pelo menos {0} characters."),
        rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
        max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
        min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
    });


    jQuery.validator.addMethod("cpf", function(value, element) {
        value = jQuery.trim(value);

        value = value.replace('.', '');
        value = value.replace('.', '');
        cpf = value.replace('-', '');
        while (cpf.length < 11) cpf = "0" + cpf;
        var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
        var a = [];
        var b = new Number;
        var c = 11;
        for (i = 0; i < 11; i++) {
            a[i] = cpf.charAt(i);
            if (i < 9) b += (a[i] * --c);
        }
        if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11 - x }
        b = 0;
        c = 11;
        for (y = 0; y < 10; y++) b += (a[y] * c--);
        if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11 - x; }

        var retorno = true;
        if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;

        return this.optional(element) || retorno;

    }, "Informe um CPF válido");


    jQuery.validator.addMethod("notEqual", function(value, element, param) {
        return this.optional(element) || value != param;
    }, "Por favor, especifique um valor diferente");

});
