<?php include "includes/header.html"; ?>

    <link rel="stylesheet" href="css/movieGallery.css"/>
    <script src="js/movieGallery.js"></script>
    <!-- Start of the Body -->

    <div class="container-fluid">
        <div class="row">
            <div class="col leftCol" style="margin-left: 1%;margin-right: 0.5%;">
                <div>
                    <label>NIE Documentary</label>
                    <div class="row" style="text-align: center;">
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label>Wesak Bethi Gee</label>
                    <div class="row" style="text-align: center;">
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label>Educational</label>
                    <div class="row" style="text-align: center;">
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="img/SoftwarePackages/pack.png" alt="Software1"><br/>
                            <div class="overlay">
                                <div class="text">Education Software Package For Grade 6 Students<br/><br/><a href="">more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4" style="margin-right: 1%;">
                <div class="topic">
                    <h1 class="center">Movie Gallery</h1>
                </div>
                <div class="videoUploadForm">
                    <h4>Upload Videos</h4>
                    </br>
                    <form action="" name="videoUploadForm" id="videoUploadForm" class="videoUploadFormfrm">
                        <div class="row">
                            <div class="col">
                                <label>Topic</label>
                            </div>
                            <div class="col"><input type="text" name="videotopic" id="videotopic" placeholder="Enter Video Topic here"></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Category</label>
                            </div>
                            <div class="col">
                                <select name="category" id="category" class="selectCat">
                                <option value="" class="catOption">Select Category</option>
                                <option value="1" class="catOption">NIE Documentary</option>
                                <option value="2" class="catOption">Wesak Bethi Gee</option>
                                <option value="3" class="catOption">Educational</option>
                            </select></div>
                        </div>
                        <div class="row">
                            <div style="width: 50%;float: left;padding: 0px 0 10px 0;margin-left: 15px;">
                                <input type="text" id="filename" name="filename" class="textInputs" readonly />
                            </div>
                            <div style="float: right;width: 45%;">
                                <button class="btn btn-secondary button" style="float: right; margin-left: 2%;">Upload</button>
                                <label class="browse-button btn btn-secondary button" style="float: right;">Browse <input name="file"
                                    type="file" id="file" multiple style="display: none;"
                                    onChange="uploadOnChange(this)"/>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
                <div class="recentUploads">
                    <h4>Recent Videos</h4>
                </br>  
                </div>
            </div>
        </div>
    </div>

    <!-- End of the Body -->

<?php include "includes/footer.html"; ?>
