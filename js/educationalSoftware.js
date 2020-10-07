$("#inputSearch").on('keypress', function(e) {
    if (e.keyCode == 13) {
        $("#inputSearch").addClass("buttonSearch");
        $("p").text("Class added = " + $("#inputSearch").attr("class"));
        var x = $("#inputSearch").val();
        window.location.replace("http://localhost:5500/educationalSoftware.html?name=" + x)
    }
});