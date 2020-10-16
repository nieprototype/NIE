var imagePath;
var filePath;

document.querySelector("#filePath").addEventListener("change", function() {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        filePath = reader.result;
        //console.log(filePath);
        document.getElementById("fileName").innerHTML = this.files[0].name;
    });
    reader.readAsDataURL(this.files[0]);
});

document
    .querySelector("#thumbnailPath")
    .addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            imagePath = reader.result;
            //console.log(imagePath);
            document.getElementById("imageName").innerHTML = this.files[0].name;
        });
        reader.readAsDataURL(this.files[0]);
    });
$(document).ready(function() {
    var ResearchAndJournals = {
        researches: [{
                name: "Research 1",
                description: "Research 1 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Research 2",
                description: "Research 2 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Research 3",
                description: "Research 3 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Research 4",
                description: "Research 4 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Research 5",
                description: "Research 5 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
        ],
        journals: [{
                name: "Journal 1",
                description: "Journal 1 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Journal 2",
                description: "Journal 2 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Journal 3",
                description: "Journal 3 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
            {
                name: "Journal 4",
                description: "Journal 4 Description",
                filePath: "",
                thumbnail: "img/SoftwarePackages/pack.png",
            },
        ],
    };
    //localStorage.clear();
    if (localStorage.getItem("ResearchAndJournals") == null) {
        localStorage.setItem(
            "ResearchAndJournals",
            JSON.stringify(ResearchAndJournals)
        );
    }
    console.log(
        JSON.parse(localStorage.getItem("ResearchAndJournals")).researches.length +
        JSON.parse(localStorage.getItem("ResearchAndJournals")).journals.length
    );

    var RNJLocal = JSON.parse(localStorage.getItem("ResearchAndJournals"));

    var count = 0;
    for (var i = 0; i < RNJLocal.researches.length; i++) {
        if (count == 2) {
            $("#researches").append('<div"></div>');
            count = 0;
        }
        if (count == 1) {
            $("#researches").append(
                '<div class="col-sm" style="width: 40%;display: inline-block; float: right;"><img src="' +
                RNJLocal.researches[i].thumbnail +
                '" alt="Software1"><br/><div class="overlay"><div class="text">' +
                RNJLocal.researches[i].name +
                "<br/><a onclick=\"on('" +
                RNJLocal.researches[i].name +
                "', '" +
                RNJLocal.researches[i].description +
                "', '" +
                RNJLocal.researches[i].thumbnail +
                "', '" +
                RNJLocal.researches[i].filePath +
                '\');">more</a><br/><a href="">Download</a></div></div></div>'
            );
        } else if (count == 0) {
            $("#researches").append(
                '<div class="col-sm" style="width: 40%;display: inline-block;float: left;"><img src="' +
                RNJLocal.researches[i].thumbnail +
                '" alt="Software1"><br/><div class="overlay"><div class="text">' +
                RNJLocal.researches[i].name +
                "<br/><a onclick=\"on('" +
                RNJLocal.researches[i].name +
                "', '" +
                RNJLocal.researches[i].description +
                "', '" +
                RNJLocal.researches[i].thumbnail +
                "', '" +
                RNJLocal.researches[i].filePath +
                '\');">more</a><br/><a href="">Download</a></div></div></div>'
            );
        }

        count++;
    }

    for (var i = 0; i < RNJLocal.journals.length; i++) {
        if (count == 2) {
            $("#journals").append('<div"></div>');
            count = 0;
        }
        if (count == 1) {
            $("#journals").append(
                '<div class="col-sm" style="width: 40%;display: inline-block; float: left;"><img src="' +
                RNJLocal.journals[i].thumbnail +
                '" alt="Software1"><br/><div class="overlay"><div class="text">' +
                RNJLocal.journals[i].name +
                "<br/><a onclick=\"on('" +
                RNJLocal.journals[i].name +
                "', '" +
                RNJLocal.journals[i].description +
                "', '" +
                RNJLocal.journals[i].thumbnail +
                "', '" +
                RNJLocal.journals[i].filePath +
                '\');">more</a><br/><a href="">Download</a></div></div></div>'
            );
        } else if (count == 0) {
            $("#journals").append(
                '<div class="col-sm" style="width: 40%;display: inline-block;float: right;"><img src="' +
                RNJLocal.journals[i].thumbnail +
                '" alt="Software1"><br/><div class="overlay"><div class="text">' +
                RNJLocal.journals[i].name +
                "<br/><a onclick=\"on('" +
                RNJLocal.journals[i].name +
                "', '" +
                RNJLocal.journals[i].description +
                "', '" +
                RNJLocal.journals[i].thumbnail +
                "', '" +
                RNJLocal.journals[i].filePath +
                '\');">more</a><br/><a href="">Download</a></div></div></div>'
            );
        }

        count++;
    }

    $("#uploadbtn").click(function() {
        if (imagePath == null) {
            imagePath = "default/pngegg.png";
        }
        if (filePath != null) {
            var obj = {
                name: $("#FileName").val(),
                description: $("#Description").val(),
                filePath: filePath,
                thumbnail: imagePath,
            };
            var radioValue = $("input[name='file']:checked").val();
            if (radioValue != null) {
                if (radioValue == "research") {
                    RNJLocal.researches.push(obj);
                } else {
                    RNJLocal.journals.push(obj);
                }
                console.log(RNJLocal);
                localStorage.setItem("ResearchAndJournals", JSON.stringify(RNJLocal));
            }
            alert("Success!");
            location.reload();
        } else {}
    });
});