$(document).ready(function() {


    $("button").click(function() {




        $.get("http://interservelabs.com/webapps/audit/getXML.php").success(function(data) {
            alert(data); // will contain all data (and display it in console)
        });

    });









});
