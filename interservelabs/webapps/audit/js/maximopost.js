$(document).ready(function() {

    
    $("#getData").click(function() {
        $('#ddObjStruct button i').removeClass("uk-icon-caret-down").addClass("uk-icon-spin uk-icon-refresh");
        $.get("http://interservelabs.com/webapps/audit/getXML.php").success(function(data) {



            $(data).find('INTOBJECTNAME').each(function() {

                $('#ulObjStruct').append('<li><a href="#" onclick="setObjStruct();">' + $(this).text() + '</a></li>');

            });

            $('#ddObjStruct button i').removeClass("uk-icon-spin uk-icon-refresh").addClass("uk-icon-caret-down");
            // will contain all data (and display it in console)
        });

    });

});
