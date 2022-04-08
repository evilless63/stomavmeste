jQuery(document).ready(function($){
    // CREATE
    $("#mailing").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault()
        var formData = {
            email: jQuery('#emailAddress').val(),
        };
        var type = "POST"
        var ajaxurl = '/emails/store'
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data)
                $('#mailingHeader').html(data.responseText)
                jQuery('#emailAddress').val('')
            },
            error: function (data) {
                console.log(data.errors)
                $('#mailingHeader').html(data.responseText)
                jQuery('#emailAddress').val('')
            }
        });
    });
});
