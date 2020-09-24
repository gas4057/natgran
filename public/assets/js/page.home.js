$(document).ready(function () {
    $('form.call_me').on('submit', function (e) {
        e.preventDefault();
        let data_ajax = {};
        let $form = $(this);
        data_ajax['url'] = $form.attr('action');
        data_ajax['token'] = $form.find('[name="_token"]').val();
        data_ajax['contact_phone'] = $form.find('[name="contact_phone"]').val();
        $.ajax({
            url: data_ajax['url'],
            type: 'post',
            data: {
                first_name: data_ajax['first_name'],
                last_name: data_ajax['last_name'],
                contact_phone: data_ajax['contact_phone'],
                contact_email: data_ajax['contact_email'],
                contact_message: data_ajax['contact_message'],
                _token: data_ajax['token'],
            },
            success: function (response) {
                $('#questionModal').modal("show");
                $form[0].reset();
                setTimeout(function () {
                    $('#questionModal').modal("hide");
                }, 5000);
            },
            error:
                function () {
                    console.log(response);
                }
        });

    });
});
