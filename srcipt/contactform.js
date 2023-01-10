jQuery(document).ready(function ($) {

    $("#phone").mask("(+380) 999-99-99");



    $("#payForm").validate({
        rules: {
            firstName: {
                required: true
            },
            secondName: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            },
            agree: {
                required: true
            },
            reglament: {
                required: true
            }
        },
        errorClass: "novalid",
        errorElement: "span",
        success: function (label) {
            label.addClass("valid")
        },
        errorPlacement: function(error, element) {
            error.appendTo( $('#invalid'));
        }
    });

   



    $("#btnSubmit2").on('click', function () {
        $("#payForm").valid();
        console.log("val");
        if ($("#firstName").hasClass("valid") && $("#secondName").hasClass("valid") && $("#phone").hasClass("valid") && $("#email").hasClass("valid")) {
            $("#payForm1").addClass("hidden");
            $("#payForm2").addClass("visible");
        }
    });






    $("#btnSubmit3").on('click', function () {
        $("#payForm1").addClass("hidden");
        $("#payForm2").removeClass("visible");
        $("#payForm3").addClass("visible");
        return false;
    });
    $("#closeForm").on('click', function () {
        $("#payForm3").removeClass("visible");
        return true;
    });


















    $("#payForm").submit(function () {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "contact.php",
            data: str,
            success: function (msg) {
                if (msg == 'OK') {
                    result = '<div class="notification_ok">Ваше повідомлення відправлено</div>';
                    $('#okSubmit').html(result);
                    popupSubmit();
                } else {
                    result = msg;
                }
            }
        });
        return false;
    });
});