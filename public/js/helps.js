jQuery(document).ready(function($){
    // CREATE
    $("#close-mail-button-send").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault()
        var formData = {
            name: jQuery('#helpName').val(),
            phone: jQuery('#helpPhone').val(),
            message: jQuery('#helpAbout').val(),
        };
        var type = "POST"
        var ajaxurl = '/help/store'
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data)
                $('#helpResult').html(data.responseText)
                jQuery('#helpName').val('')
                jQuery('#helpPhone').val('')
                jQuery('#helpAbout').val('')
            },
            error: function (data) {
                console.log(data.errors)
                $('#helpResult').html('<h5>Ваше сообщение успешно отправлено! Можно закрыть окно</h5>')
                jQuery('#helpName').val('')
                jQuery('#helpPhone').val('')
                jQuery('#helpAbout').val('')
            }
        });
    });
});
