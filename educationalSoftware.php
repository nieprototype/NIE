<?php include "includes/header.html"; ?>

<link rel="stylesheet" href="css/educationalSoftware.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/educationalSoftware.js"></script>

<div class="container-fluid" style="background-image: url('../NIE/img/SoftwarePackages/library.jpg'); background-size: cover; padding: 20px;">
    <div style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="topic">
            <h1 style="color: white;">NIE Educational Software</h1>
        </div>
        <div class="intro">
            <p style="color: white;">
                NIE has been developed educational software since 1988. The first educational software packages distributed in schools were Waves, Curve Plotter and Potentiometer. The Wave software was the first software which was developed in Sinhala medium. Later NIE
                distributed following software packages for various advanced level subjects. These software packages were developed in three medium of English, Sinhala and Tamil. Later; educational software packages have been developed for subjects of
                grade 6 to 11.
            </p>
        </div>
        <div class="sorter">
            <h2 style="color: white;">DOWNLOAD SOFTWARE PACKAGES</h2>
            <div class="sortSection">
                <div class="row" style="margin-left: 3%; margin-right: 3%;">
                    <div class="col-sm">
                        <select name="grade" id="grade" class="selectCat">
                            <option value="" class="catOption">Select Grade</option>
                            <option value="1" class="catOption">GRADE 6</option>
                            <option value="2" class="catOption">GRADE 7</option>
                            <option value="3" class="catOption">GRADE 8</option>
                            <option value="3" class="catOption">GRADE 9</option>
                            <option value="3" class="catOption">GRADE 10</option>
                            <option value="3" class="catOption">GRADE 11</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <select name="subject" id="subject" class="selectCat">
                            <option value="" class="catOption">Select Subject</option>
                            <option value="1" class="catOption">NIE Documentary</option>
                            <option value="2" class="catOption">Wesak Bethi Gee</option>
                            <option value="3" class="catOption">Educational</option>
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

    <?php include "includes/footer.html"; ?>