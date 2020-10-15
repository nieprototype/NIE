$(document).ready(function() {
    var count = 0;
    for (var i = 0; i < 4; i++) {
        if (count == 2) {
            $('#researches').append('<div"></div>');
            count = 0;
        }
        if (count == 1) {
            $('#researches').append(
                '<div class="col-sm" style="width: 40%;display: inline-block; float: right;"><img src="img/SoftwarePackages/pack.png" alt="Software1"><br/><div class="overlay"><div class="text">Education Software Package For Grade 6 Students<br/><a href="">more</a><br/><a href="">Download</a></div></div></div>'
            );
        } else if (count == 0) {
            $('#researches').append(
                '<div class="col-sm" style="width: 40%;display: inline-block;float: left;"><img src="img/SoftwarePackages/pack.png" alt="Software1"><br/><div class="overlay"><div class="text">Education Software Package For Grade 6 Students<br/><a href="">more</a><br/><a href="">Download</a></div></div></div>'
            );
        }

        count++;
    }

    for (var i = 0; i < 4; i++) {
        if (count == 2) {
            $('#journals').append('<div"></div>');
            count = 0;
        }
        if (count == 1) {
            $('#journals').append(
                '<div class="col-sm" style="width: 40%;display: inline-block; float: right;"><img src="img/SoftwarePackages/pack.png" alt="Software1"><br/><div class="overlay"><div class="text">Education Software Package For Grade 6 Students<br/><a href="">more</a><br/><a href="">Download</a></div></div></div>'
            );
        } else if (count == 0) {
            $('#journals').append(
                '<div class="col-sm" style="width: 40%;display: inline-block;float: left;"><img src="img/SoftwarePackages/pack.png" alt="Software1"><br/><div class="overlay"><div class="text">Education Software Package For Grade 6 Students<br/><a href="">more</a><br/><a href="">Download</a></div></div></div>'
            );
        }

        count++;
    }


});