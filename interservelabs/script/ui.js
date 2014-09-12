$(document).ready(function() {

    if ($("#loginTitle")) {

        var lTmargin = (window.innerWidth - 400 - 790) / 2;


        $("#loginTitle").animate({"margin-left": lTmargin}, 'fast');

    }


    $(window).resize(function() {

        if ($("#loginTitle")) {

            var lTmargin = (window.innerWidth - 400 - 790) / 2;

            
            $("#loginTitle").animate({"margin-left": lTmargin}, 'fast');

        }



    });

    $("#newReg,#loginSubmit").hover(
            function() {
                $(this).animate({opacity: "0.7", filter: "alpha(opacity=70)"}, 'fast');
            }, function() {
        $(this).animate({opacity: "1", filter: "alpha(opacity=100)"}, 'fast');
    }
    );

    $('li').click(function() {
        $('#sidebar1').toggle('slide', 500);
    });

    $("li").hover(
            function() {
                $(this).addClass('liHover');
            }, function() {
        $(this).removeClass('liHover');
    }
    );



});
