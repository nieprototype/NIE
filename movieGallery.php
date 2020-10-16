<?php include "includes/headern.html"; ?>

<link rel="stylesheet" href="css/movieGallery.css" />
<script src="js/movieGallery.js"></script>
<!-- Start of the Body -->
<div class="containr" style="background-color: #1a1a1a;">
    <div class="row" style="border-left: 10px solid gold;border-right: 10px solid gold;">
        <div class="col leftCol"
            style="margin-left: 15px; background-color: #212529;padding: 0;background-size: cover;padding-top: 15px;">
            <div>
                <div>
                    <label>
                        <h4>NIE Documentary</h4>
                    </label><br /><br />
                    <div class="row" style="text-align: center;">
                        <div class="col-sm">
                            <img src="img/movieGallery/158826.jpg" alt="Software1"><br />
                            <div>fwf</div>
                        </div>
                        <div class="col-sm">
                            <img src="img/movieGallery/minvisit.jpg" alt="Software1"><br />
                            <div>fwf</div>
                        </div>
                        <div class="col-sm">
                            <img src="img/movieGallery/sec_pic.jpg" alt="Software1"><br />
                            <div>fwf</div>
                        </div>
                    </div>
                </div>
                <div>
                    <label>
                        <h4>Wesak Bethi Gee</h4>
                    </label><br /><br />
                    <div class="row" style="text-align: center;">
                        <div class="col-sm">
                            <img src="img/movieGallery/bathigee_2015.jpg" alt="Software1"><br />
                            <div>Wesak Sadahi Gee 2015</div>
                        </div>
                        <div class="col-sm">
                            <img src="img/movieGallery/bathigee_2015.jpg" alt="Software1"><br />
                            <div>Wesak Sadahi Gee 2016</div>
                        </div>
                        <div class="col-sm">
                            <img src="img/movieGallery/bathigee_2015.jpg" alt="Software1"><br />
                            <div>Wesak Sadahi Gee 2017</div>
                        </div>
                    </div>
                </div>
                <div>
                    <label>
                        <h4>Educational</h4>
                    </label><br /><br />
                    <div class="row" style="text-align: center;">
                        <div class="col-sm">
                            <img src="img/movieGallery/kanlec27.jpg" alt="Software1"><br />
                            <div>fwf</div>
                        </div>
                        <div class="col-sm">
                            <img src="img/movieGallery/pic_meepe_22_5_2015.jpg" alt="Software1"><br />
                            <div>fwf</div>
                        </div>
                        <div class="col-sm">
                            <img src="img/movieGallery/sciancepic1.jpg" alt="Software1"><br />
                            <div>fwf</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4" style="background-image: url('../NIE/img/movieGallery/uploads.jpg');padding: 0;">
            <div style="background-color: rgba(0, 0, 0, 0.85);height: 100%;padding: 2%;">
                <div class="topic" style="text-align: center">
                    <h1>Movie Gallery</h1>
                </div>
                <div class="videoUploadForm">
                    <h4>Upload Videos</h4>
                    </br>
                    <form action="" name="videoUploadForm" id="videoUploadForm" class="videoUploadFormfrm">
                        <div class="row">
                            <div class="col">
                                <label>Topic</label>
                            </div>
                            <div class="col"><input type="text" name="videotopic" id="videotopic"
                                    placeholder="Enter Video Topic here"></div>
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
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div style="width: 50%;float: left;padding: 0px 0 10px 0;margin-left: 15px;">
                                <input type="text" id="filename" name="filename" class="textInputs"
                                    placeholder="File Path" readonly />
                            </div>
                            <div style="float: right;width: 45%;">
                                <button class="btn btn-secondary button"
                                    style="float: right; margin-left: 2%;">Upload</button>
                                <label class="browse-button btn btn-secondary button" style="float: right;">Browse
                                    <input name="file" type="file" id="file" multiple style="display: none;"
                                        onChange="uploadOnChange(this)" />
                            </div>
                        </div>
                    </form>
                </div>
                <br />
                <div class="recentUploads">
                    <h4>Recent Videos</h4>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of the Body -->

<?php include "includes/footern.html"; ?>