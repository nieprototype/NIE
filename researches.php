<?php include "includes/header.html"; ?>

<link rel="stylesheet" href="css/researches.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="js/jquery-3.3.1.min.js"></script>

<script>
function on(title, description, image, file) {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("overlayWindowTitle").innerHTML = title;
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
    style="background-image: url('../NIE/img/researches/geometric-2880x1800-shapes-dark-background-black-yellow-gradient-hd-4k-14372.png'); background-size: cover; padding: 20px;">
    <div style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="topic">
            <h1>RESEARCHES AND JOURNALS</h1>
        </div>
        <div class="row" style="padding-bottom: 2%;">
            <div class="col">
                <div class="rjcontainer" id="researches">
                    <div class="topics">
                        <h2>Researches</h2>
                    </div>
                </div>
            </div>
            <div class="col" style="border-left: lightgray solid 1px;">
                <div class="rjcontainer" id="journals">
                    <div class="topics">
                        <h2>Journals</h2>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 50px;">
            <Button class="btn btn-secondary" id="uploadBtn" data-toggle="modal" data-target="#myModal"
                style="float: right;width: 10%;margin-right: 10px;">Upload</Button>
        </div>
    </div>

    <div id="overlay" style="padding: 10% 35% 10% 35%;">

        <div id="overlayWindow">
            <div>
                <div class="title" id="overlayWindowTitle">Title</div>
                <div class="closebtn" onclick="off()">X</div>
            </div>
            <div class="body">
                <div class="image"><img src="" id="overlayWindowImage" /></div>
                <div class="description" id="overlayWindowDescription"
                    style="margin: auto;overflow: hidden;width: 80%;">
                    <p style="overflow-wrap: break-word;text-align: center;" id="overlayWindowDescriptionText"></p>
                </div>
                <div class="download" id="overlayWindowDownload"></div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 150%;margin-left: -25%;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">File Upload</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        style="background-color: silver;font-size:2.3em;opacity: 1;">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" id="uploadForm">
                        <div class="form-group">
                            <label for="FileName">File Name</label>
                            <input type="text" class="form-control" id="FileName" placeholder="Enter File Name">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" id="Description"
                                placeholder="Enter File Description"></textarea>
                        </div>
                        <label for="Description">Research Or Journal</label>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input name="file" type="radio" value="research"
                                        aria-label="Radio button for following text input" checked>
                                </div>
                            </div>
                            <label type="text" class="form-control"
                                aria-label="Text input with radio button">Research</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input name="file" type="radio" value="journal"
                                        aria-label="Radio button for following text input">
                                </div>
                            </div>
                            <label type="text" class="form-control"
                                aria-label="Text input with radio button">Journal</label>
                        </div>
                        <br />
                        <label for="inputGroupFileAddon01">Select PDF File</label>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="filePath"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01" id="fileName">Choose
                                    file</label>
                            </div>
                        </div>
                        <br />
                        <label for="inputGroupFileAddon01">Select Image</label>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="thumbnailPath" accept="image/*"
                                    name="image" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01" id="imageName">Choose
                                    file</label>
                            </div>
                        </div>
                        <input type="hidden" name="imagePath" id="imagePath" />
                        <input type="hidden" name="filePath" id="filePath" />
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" id="uploadbtn" class="btn btn-primary">Upload</button>
                </div>

            </div>
        </div>
    </div>
    <script src="js/researches.js"></script>
</div>
<?php include "includes/footer.html"; ?>