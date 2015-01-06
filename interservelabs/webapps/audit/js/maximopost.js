$(document).ready(function () {

    var arrObjectStruct = [];
    var arrObjectAtt = [];


    $("#getOS").click(function () {
        $('#getOS i').addClass("uk-icon-spin");
        $.get("./getOS.php").success(function (data) {

            $('#selObjStruct').html("");
            $('#selObjStruct').append('<option>Select One...</option>');
            $(data).find('MAXINTOBJECT').each(function () {
                var objObjectStruct = ['DESCRIPTION', 'MAINOBJECT'];
                objObjectStruct['DESCRIPTION'] = $(this).find('DESCRIPTION').text();
                objObjectStruct['MAINOBJECT'] = $(this).find('OBJECTNAME').text();
                var arrDesc = $(this).find('INTOBJECTNAME').text();
                arrObjectStruct[arrDesc] = objObjectStruct;
                $('#selObjStruct').append('<option>' + $(this).find('INTOBJECTNAME').text() + '</option>');
            });

            $('#getOS i').removeClass("uk-icon-spin");
            // will contain all data (and display it in console)
        });

    });

    $("#getData").click(function () {
        $('#getData i').addClass("uk-icon-spin");


        var filterString = "";

        $('#filterTable tbody').find("tr").each(function () {

            filterString += "%26" + $(this).find(".filterSelect").val() + "%3D" + $(this).find(".filterOper option:selected").val() + $(this).find(".filterVal").val();

        });

        $.get("./getData.php?OS=" + $("#selObjStruct option:selected").text()+ "&filterString=" +filterString).success(function (data) {




            $('#dataResult thead').html("");
            $('#dataResult tbody').html("");

            $(data).find($('#txtMainObj').val()).first().children().each(function () {

                $('#dataResult thead').append('<th>' + $(this).prop("tagName") + '</th>');

            });
            var a = 1;
            $(data).find($('#txtMainObj').val()).each(function () {
                $('#dataResult tbody').append("<tr id='dTr" + a + "'>");
                $(this).children().each(function () {
                    $('#dTr' + a).append('<td>' + $(this).text() + '</td>');
                });
                $('#dataResult tbody').append("</tr>");

                a++;
            });

            $('#getData i').removeClass("uk-icon-spin");
            // will contain all data (and display it in console)

        });

    });


    //UI Functions   
    $("#selObjStruct").change(function () {

        var sMainObj = arrObjectStruct[$("#selObjStruct option:selected").text()];
        if (sMainObj) {
            $('#txtMainObj').val(sMainObj['MAINOBJECT']);
            $('#txtObjDescription').val(sMainObj['DESCRIPTION']);

            $.get("./getMeta.php?object=" + sMainObj['MAINOBJECT']).success(function (data) {

                $('.filterSelect').html("");
                $('.filterSelect').append('<option>Select One...</option>');
                $(data).find('MAXATTRIBUTECFG').each(function () {

                    $('.filterSelect').append('<option>' + $(this).find('ATTRIBUTENAME').text() + '</option>');

                });

                // will contain all data (and display it in console)
            });

        } else {

            $('#txtMainObj').val("");
            $('#txtObjDescription').val("");
        }
    });


    $("#addFilter").click(function () {

        $("#filterTable tbody tr").first().clone().appendTo("#filterTable tbody");

    });


    $(document).on("click", ".removefilter", function () {

        $(this).parent().parent().remove();

    });




});
