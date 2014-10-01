$(document).ready(function () {


    $("#getOS").click(function () {
        $('#ddObjStruct button i').removeClass("uk-icon-caret-down").addClass("uk-icon-spin uk-icon-refresh");
        $.get("http://interservelabs.com/webapps/audit/getOS.php").success(function (data) {

            $('#ulObjStruct').html("");

            $(data).find('INTOBJECTNAME').each(function () {

                $('#ulObjStruct').append('<li><a href="#" onclick="setObjStruct();">' + $(this).text() + '</a></li>');

            });

            $('#ddObjStruct button i').removeClass("uk-icon-spin uk-icon-refresh").addClass("uk-icon-caret-down");
            // will contain all data (and display it in console)
        });

    });


    $("#getData").click(function () {
        $('#getData i').addClass("uk-icon-spin uk-icon-refresh");
        $.get("http://interservelabs.com/webapps/audit/getData.php").success(function (data) {

            $('#dataResult thead').html("");
            $('#dataResult tbody').html("");

            $(data).find('A_CHARTOFACCOUNTS').first().children().each(function () {

                $('#dataResult thead').append('<th>' + $(this).prop("tagName") + '</th>');

            });
            var a = 1;
            $(data).find('A_CHARTOFACCOUNTS').each(function () {
                $('#dataResult tbody').append("<tr id='dTr" + a + "'>");
                $(this).children().each(function () {
                    $('#dTr' + a).append('<td>' + $(this).text() + '</td>');
                });
                $('#dataResult tbody').append("</tr>");

                a++;
            });

            $('#getData i').removeClass("uk-icon-spin uk-icon-refresh");
            // will contain all data (and display it in console)

        });
            $('#dataResult').DataTable({
                searching: true,
                ordering: true
            });
    });

    $("#ulObjStruct").click(function () {
        alert($(this).text());
    });

});
