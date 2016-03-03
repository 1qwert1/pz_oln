$(document).change(function () {
    if ($("#vax_1").prop("checked")) {
        $('#pdv').css('display', 'block');
    }

    else {
        $('#pdv').css('display', 'none');
    }
    if ($("#vax_2").prop("checked")) {
        $('#pdv2').css('display', 'block');
    }

    else {
        $('#pdv2').css('display', 'none');
    }
});



$(window).load(function () {

    $(".loader_inner").fadeOut();
    //$(".loader").delay(400).fadeOut("toggle");
    //
    //$(".top_text h1").animated("fadeInDown", "fadeOutUp");
    //$(".top_text p").animated("fadeInUp", "fadeOutDown");

});
