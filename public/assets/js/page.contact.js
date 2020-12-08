$(document).ready(function () {
    $('form.form_question').on('submit', function (e) {
        e.preventDefault();
        let data_ajax = {};
        let $form = $(this);
        data_ajax['url'] = $form.attr('action');
        data_ajax['token'] = $form.find('[name="_token"]').val();
        data_ajax['first_name'] = $form.find('[name="first_name"]').val();
        data_ajax['last_name'] = $form.find('[name="last_name"]').val();
        data_ajax['contact_phone'] = $form.find('[name="contact_phone"]').val();
        data_ajax['contact_email'] = $form.find('[name="contact_email"]').val();
        data_ajax['contact_message'] = $form.find('[name="contact_message"]').val();
        $.ajax({
            url: data_ajax['url'],
            type: "POST",
            data: {
                first_name: data_ajax['first_name'],
                last_name: data_ajax['last_name'],
                contact_phone: data_ajax['contact_phone'],
                contact_email: data_ajax['contact_email'],
                contact_message: data_ajax['contact_message'],
                _token: data_ajax['token'],
            },
            success: function (response) {
                $.fancybox.open({
                    src  : '#questionModal',
                    type : 'inline',
                    opts : {
                        afterShow : function( instance, current ) {
                            console.info( 'done!' );
                        }
                    }
                });
                $form[0].reset();
                setTimeout(function () {
                    $.fancybox.close();
                }, 500000);
            },
            error:
                function () {
                    console.log(response);
                }
        });

    });
});


