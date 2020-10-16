<?php include "includes/headern.html"; ?>

<link rel="stylesheet" href="css/educationalSoftware.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/educationalSoftware.js"></script>

<script>
function on(title, grade, description, image, file) {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("overlayWindowTitle").innerHTML = title;
    document.getElementById("overlayWindowGrade").innerHTML = "Grade " + grade;
    document.getElementById("overlayWindowDescriptionText").innerHTML = description;
    document.getElementById("overlayWindowDownload").innerHTML =
        "<div class='downloadLink btn btn-primary' onclick=\"" + "window.open('" + file + "')" + "\">Download</div>";
    document.getElementById("overlayWindowImage").src = image;

}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>
<style>
.close:hover {
    background-color: red;
}
</style>

<div class="container-fluid"
    style="background-image: url('../NIE/img/SoftwarePackages/library.jpg'); background-size: cover; padding: 20px;">
    <div style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="topic">
            <h1 style="color: white;">NIE Educational Software</h1>
        </div>
        <div class="intro">
            <p style="color: white;">
                NIE has been developed educational software since 1988. The first educational software packages
                distributed in schools were Waves, Curve Plotter and Potentiometer. The Wave software was the first
                software which was developed in Sinhala medium. Later NIE
                distributed following software packages for various advanced level subjects. These software packages
                were developed in three medium of English, Sinhala and Tamil. Later; educational software packages have
                been developed for subjects of
                grade 6 to 11.
            </p>
        </div>
        <div class="sorter">
            <h2 style="color: white;">DOWNLOAD SOFTWARE PACKAGES</h2>
            <div class="sortSection">
                <div class="row" style="margin-left: 3%; margin-right: 3%;">
                    <div class="col-sm">
                        <select name="grade" id="grade" class="selectCat">
                            <option value="0" class="catOption">Select Grade</option>
                            <option value="6" class="catOption">GRADE 6</option>
                            <option value="7" class="catOption">GRADE 7</option>
                            <option value="8" class="catOption">GRADE 8</option>
                            <option value="9" class="catOption">GRADE 9</option>
                            <option value="10" class="catOption">GRADE 10</option>
                            <option value="11" class="catOption">GRADE 11</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select name="subject" id="subject" class="selectCat">
                            <option value="0" class="catOption">Select Subject</option>
                            <option value="1" class="catOption">Mathematics</option>
                            <option value="2" class="catOption">Science</option>
                            <option value="3" class="catOption">History</option>
                            <option value="4" class="catOption">English</option>
                            <option value="5" class="catOption">Music</option>
                            <option value="6" class="catOption">IT</option>
                            <option value="7" class="catOption">Commerce</option>
                            <option value="8" class="catOption">Tamil</option>
                            <option value="9" class="catOption">Buddism</option>
                            <option value="10" class="catOption">Sinhala</option>
                            <option value="11" class="catOption">English Literature</option>
                            <option value="12" class="catOption">Health Science</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <input type="text" name="inputSearch" id="inputSearch" class="" placeholder="🔍 SEARCH" />
                    </div>
                </div>
            </div>
        </div>
        <div class="download-container center" id="download-container">
            <div class="row" id="download-container-row">
            </div>
        </div>

    </div>
    <div id="overlay" style="padding: 10% 35% 10% 35%;display:none;">

        <div id="overlayWindow">
            <div>
                <div class="title" id="overlayWindowTitle">Title</div>
                <div class="closebtn" onclick="off()">X</div>
            </div>
            <div class="body">
                <div class="image"><img src="" id="overlayWindowImage" /></div>
                <div id="overlayWindowGrade" style="text-align: center;color: white;"></div>
                <div class="description" id="overlayWindowDescription"
                    style="margin: auto;overflow: hidden;width: 80%;color: white;">
                    <p style="overflow-wrap: break-word;text-align: center;" id="overlayWindowDescriptionText"></p>
                </div>
                <div class="download" id="overlayWindowDownload"></div>
            </div>
            <div>
                <div class="title" id="overlayWindowTitle">&nbsp;</div>
            </div>
        </div>

    </div>

    <?php include "includes/footern.html"; ?>