$(document).ready(function() {
    var url = window.location.href;
    if (url.split("?")[1] != null) {
        var searchValue = url.split("?")[1].split("=")[1];
    }
    var subjects = {
        subjects: [{
                id: 1,
                name: "Mathematics"
            },
            {
                id: 2,
                name: "Science"
            },
            {
                id: 3,
                name: "History"
            },
            {
                id: 4,
                name: "English"
            },
            {
                id: 5,
                name: "Music"
            },
            {
                id: 6,
                name: "IT"
            },
            {
                id: 7,
                name: "Commerce"
            },
            {
                id: 8,
                name: "Tamil"
            },
            {
                id: 9,
                name: "Buddism"
            },
            {
                id: 10,
                name: "Sinhala"
            },
            {
                id: 11,
                name: "English Literature"
            },
            {
                id: 12,
                name: "Health Science"
            },
        ]
    }
    var Softwares = {
        softwares: [{
                name: "Mathematics Software Pack",
                description: "Mathematics Software Pack",
                grade: 6,
                subject: "Mathematics",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Science Software Pack",
                description: "Science Software Pack",
                grade: 6,
                subject: "Science",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "History Software Pack",
                description: "History Software Pack",
                grade: 10,
                subject: "History",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "English Software Pack",
                description: "English Software Pack",
                grade: 7,
                subject: "English",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Music Software Pack",
                description: "Music Software Pack",
                grade: 10,
                subject: "Music",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            }, {
                name: "IT Software Pack",
                description: "IT Software Pack",
                grade: 11,
                subject: "IT",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            }, {
                name: "Commerce Software Pack",
                description: "Commerce Software Pack",
                grade: 10,
                subject: "Commerce",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            }, {
                name: "Tamil Software Pack",
                description: "Tamil Software Pack",
                grade: 7,
                subject: "Tamil",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            }, {
                name: "Mathematics Software Pack",
                description: "Mathematics Software Pack",
                grade: 7,
                subject: "Mathematics",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            }
        ]
    };
    if (searchValue == null) {
        var count = 0;
        for (var i = 0; i < Softwares.softwares.length; i++) {
            if (count == 4) {
                $('#download-container-row').append('<div style="width: 100%;margin:30px;"></div>');
                count = 0;
            }
            $("#download-container-row").append(
                '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
            );
            count++;
        }
    } else {
        for (var i = 0; i < Softwares.softwares.length; i++) {
            if (Softwares.softwares[i].subject.includes(searchValue) || Softwares.softwares[i].description.includes(searchValue)) {
                $("#download-container-row").append(
                    '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
                );
            }
        }
    }

    $("#inputSearch").on('keypress', function(e) {
        if (e.keyCode == 13) {
            $("#inputSearch").addClass("buttonSearch");
            $("p").text("Class added = " + $("#inputSearch").attr("class"));
            var x = $("#inputSearch").val();
            window.location.replace("http://localhost/NIE/educationalSoftware.php?name=" + x)
                //$("#download-container-row").clear;
            document.getElementById("#download-container-row").innerHTML = "";
            //Search elements

            //Append Elements
        }
    })

    var x;
    var y;

    $("#grade").change(function() {
        if ($("#grade").val() != null) {
            x = this.value;
            if (x != 0) {
                $("#download-container-row").empty();
                for (var i = 0; i < Softwares.softwares.length; i++) {
                    if (Softwares.softwares[i].grade == x) {
                        $("#download-container-row").append(
                            '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
                        );
                    }
                }
            } else {
                $("#download-container-row").empty();
                var count = 0;
                for (var i = 0; i < Softwares.softwares.length; i++) {
                    if (count == 4) {
                        $('#download-container-row').append('<div style="width: 100%;margin:30px;"></div>');
                        count = 0;
                    }
                    $("#download-container-row").append(
                        '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
                    );
                    count++;
                }
            }
            if (y != null) {
                $("#download-container-row").empty();
                for (var i = 0; i < Softwares.softwares.length; i++) {
                    if (Softwares.softwares[i].grade == x && Softwares.softwares[i].subject == subjects.subjects[y - 1].name) {
                        $("#download-container-row").append(
                            '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
                        );
                    }
                }
            }
        }
    });

    $("#subject").change(function() {
        if ($("#subject").val() != null) {
            y = this.value;
            if (y != 0) {
                $("#download-container-row").empty();
                for (var i = 0; i < Softwares.softwares.length; i++) {
                    if (Softwares.softwares[i].subject == subjects.subjects[y - 1].name) {
                        $("#download-container-row").append(
                            '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
                        );
                    }
                }
            } else {
                $("#download-container-row").empty();
                var count = 0;
                for (var i = 0; i < Softwares.softwares.length; i++) {
                    if (count == 4) {
                        $('#download-container-row').append('<div style="width: 100%;margin:30px;"></div>');
                        count = 0;
                    }
                    $("#download-container-row").append(
                        '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
                    );
                    count++;
                }
            }
            if (x != null) {
                $("#download-container-row").empty();
                for (var i = 0; i < Softwares.softwares.length; i++) {
                    if (Softwares.softwares[i].grade == x && Softwares.softwares[i].subject == subjects.subjects[y - 1].name) {
                        $("#download-container-row").append(
                            '<div class="col-3"><div class="col-sm"><img src="' + Softwares.softwares[i].thumbnail + '" alt="Software1"><br/><div class="overlay"><div class="text"><label style="font-weight: bold;font-size: 30px;">' + 'Grade ' + Softwares.softwares[i].grade + '</label><br/></a></a>' + Softwares.softwares[i].name + "<br/><a onclick=\"on('" + Softwares.softwares[i].name + "', '" + Softwares.softwares[i].grade + "','" + Softwares.softwares[i].description + "', '" + Softwares.softwares[i].thumbnail + "', '" + Softwares.softwares[i].filePath + '\');">more</a><br/><a href="">Download</a></div></div></div></div>'
                        );
                    }
                }
            }
        }

    });

});