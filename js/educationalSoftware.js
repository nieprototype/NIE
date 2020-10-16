$(document).ready(function() {
    var count = 0;
    for (var i = 0; i < 8; i++) {
        if (count == 4) {
            $('#download-container-row').append('<div"></div>');
            count = 0;
        }
        $('#download-container-row').append('<div class="col-3"><div class="col-sm"><img src="img/SoftwarePackages/pack.png" alt="Software1"><br/><div class="overlay"><div class="text">Education Software Package For Grade 6 Students<br/><a href="">more</a><br/><a href="">Download</a></div></div></div></div>');
        count++;
    }

    $("#inputSearch").on('keypress', function(e) {
        if (e.keyCode == 13) {
            $("#inputSearch").addClass("buttonSearch");
            $("p").text("Class added = " + $("#inputSearch").attr("class"));
            var x = $("#inputSearch").val();
            window.location.replace("http://localhost/NIE/educationalSoftware.php?name=" + x)

            //Search elements

            //Append Elements
        }
    })
});