$(document).ready(function () {

    $(".form_sort").on('change', function () {
        let data = {};

        data['type_id'] = +$('[name="type_id"]').val();
        data['subtype_id'] = +$('[name="subtype_id"]').val() ;
        data['sortBy'] = $(this).find('.select_sort.sorting').val();
        data['paginate'] = +$(this).find('.select_sort.pagination').val();
        data['_token'] = $('[name="_token"]').val() ;

        $.ajax({
            url: "/sortProducts",
            type: "POST",
            data,
            success: function (response) {
                $('#catalog-items-render').empty().append(response.html);
            },
            error: function () {
                console.log(response);
            }
        });
    });
});
