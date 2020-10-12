<?php include "includes/header.html"; ?>

<link rel="stylesheet" href="css/researches.css">
<script src="js/researches.js"></script>


<div class="container-fluid" style="background-image: url('../NIE/img/researches/geometric-2880x1800-shapes-dark-background-black-yellow-gradient-hd-4k-14372.png'); background-size: cover; padding: 20px;">
    <div style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="topic">
            <h1>RESEARCHES AND JOURNALS</h1>
        </div>
        <div class="row" style="padding-bottom: 2%;">
            <div class="col">
                <div class="rjcontainer">
                    <div class="topics">
                        <h2>Researches</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="border-left: lightgray solid 1px;">
                <div class="rjcontainer">
                    <div class="topics">
                        <h2>Journals</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br />
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br /><br /><a href="">more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 50px;">
            <Button class="btn btn-secondary" id="uploadBtn" data-toggle="modal" data-target="#myModal" style="float: right;width: 10%;margin-right: 10px;">Upload</Button>
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 150%;margin-left: -25%;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">File Upload</h4>
                    <button type="button" class="close" data-dismiss="modal" style="background-color: silver;">&times;</button>
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
                            <input type="text" class="form-control" id="Description" placeholder="Enter File Description">
                        </div>
                        <label for="Description">Research Or Journal</label>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input name="file" type="radio" value="research" aria-label="Radio button for following text input" checked>
                                </div>
                            </div>
                            <label type="text" class="form-control" aria-label="Text input with radio button">Research</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input name="file" type="radio" value="journal" aria-label="Radio button for following text input">
                                </div>
                            </div>
                            <label type="text" class="form-control" aria-label="Text input with radio button">Research</label>
                        </div>
                        <br />
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>

            </div>
        </div>
    </div>

</div>


<?php include "includes/footer.html"; ?>