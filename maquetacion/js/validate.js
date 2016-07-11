(function($) {
    function validateSingle() {
        $('<div class="message"></div>').hide().appendTo('.mapa-container');
        $('.formulario').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                },
                messages: {
                    name: {
                        required: $('#name').data('validate')
                    },
                    email: {
                        required: $('#email').data('validate'),
                        email : $('#email').data('validate'),
                    },
                    fono: {
                        required: $('#fono').data('validate')
                    },
                    country: {
                        required: $('#country').data('validate')
                    },
                    subject: {
                        required: $('#subject').data('validate')
                    },
                    message: {
                        required: $('#message').data('validate')
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.mapa-container .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.formulario').attr('action'), $('.formulario').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.mapa-container .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.mapa-container .message').html('<div class="message__content"><div class="message__text">' + $('#form_wrapper').data('msg-ok') + '</div><div class="btn btn--fill message--close">Ok</div></div>').fadeIn();
                            $('.formulario').find('.form__valid').removeClass('form__valid');
                            $('.formulario')[0].reset();
                        } else {
                            $('.formulario .message').html('<div class="message__content message--error"><div class="message__text">' + $('#form_wrapper').data('msg-error') + '</div><div class="btn btn--fill message--close">Ok</div></div>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    validateSingle();
})(jQuery);