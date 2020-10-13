<?php include "includes/header.html"; ?>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="container">
            <div class="row">
                <div style="text-align: right;" class="col-12">

                    <a id="stick" href="forms.php" style="z-index:10; font-family: 'Barlow Condensed',sans-serif; font-size: 18px;"
                       class="primary-btn"><i class="fa fa-angle-left" aria-hidden="true"></i> Back to Dashboard</a>


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: left" class="section-title">
                            <h2>MANAGE DOWNLOADS</h2>
                            <h5>Home > Dashboard > Downloads</h5>
                        </div>
                    </div>
                </div>


            </div>
            <section id="card">












                <div class="col-12">
                    <div style="
                position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ; font-family: Poppins, sans-serif; font-size: 14px;" class="kt-portlet kt-margin-top-30">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
	<span class="kt-portlet__head-icon">
											              <span style="color: #E9AD28; font-size: 18px;" class="icon_folder-add_alt"></span>
										</span>

                                <h3 style="font-size: 18px; color: #E9AD28; font-weight: 500;">
                                    Add a new downloadable material            </h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form id="down_materials" class="kt-form kt-form--label-right">
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title of the Material :</label>
                                    <div class="col-lg-7">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Name of the Downloadable Material">
                                        <span class="form-text text-muted">Please enter the title of the material</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="type">Type of the Material :</label>
                                    &nbsp; &nbsp;&nbsp;
                                    <select class="col-2" id="type">
                                        <option value="Syllabus">Syllabus</option>
                                        <option value="Teacher's Guide">Teacher's Guide</option>
                                        <option value="Other Material">Other Material</option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="type">Related Grade of the Material :</label>
                                    &nbsp; &nbsp;&nbsp;
                                    <select class="col-2" id="grade">

                                        <?php

                                        $i = 1;
                                        while ($i < 14){



                                        ?>

                                        <option value="Grade <?php echo $i; ?>">Grade <?php echo $i;
                                        $i++; ?></option>

                                        <?php

                                        }

                                        ?>

                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="type">Related Subject of the Material :</label>
                                    &nbsp; &nbsp;&nbsp;
                                    <select class="col-4" id="subject">
                                        <option value="Information and Communication Technology">Information and Communication Technology</option>
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="English">English</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Catholic">Catholic</option>
                                        <option value="Science">Science</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="History">History</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Health and Physical Education">Health and Physical Education</option>
                                        <option value="Music">Music</option>
                                        <option value="Life Competencies and Citizenship Education">Life Competencies and Citizenship Education</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Business Studies">Business Studies</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="IT (A/L)">IT (A/L)</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Languages">Languages</option>
                                        <option value="Mathematics (A/L)">Mathematics (A/L)</option>
                                        <option value="English Literature">English Literature</option>

                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="type">Language of the Material :</label>
                                    &nbsp; &nbsp;&nbsp;
                                    <select class="col-2" id="lan">
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="English">English</option>
                                        <option value="Tamil">Tamil</option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description :</label>
                                    <div class="col-lg-7">
                                        <textarea class="form-control" id="desc" rows="3" placeholder="Please enter a short description on the uploading material"></textarea>
                                        <span class="form-text text-muted">Short description on the material</span>
                                    </div>
                                </div>
                                <div class="form-group form-group-last row">
                                    <label class="col-lg-3 col-form-label">Upload Files:</label>
                                    <div class="col-lg-9">
                                        <div class="dropzone dropzone-multi" id="kt_dropzone_5">
                                            <div class="dropzone-panel">
                                                <a id="upfile" class="dropzone-select btn btn-label-brand btn-bold btn-sm">Attach files</a>
                                            </div>
                                            <div class="dropzone-items">
                                                <div class="dropzone-item" style="display:none">
                                                    <div class="dropzone-file">
                                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                            <span id="filename" data-dz-name>some_image_file_name.jpg</span> <strong>(<span  data-dz-size>340kb</span>)</strong>
                                                        </div>
                                                        <div class="dropzone-error" data-dz-errormessage></div>
                                                    </div>
                                                    <div class="dropzone-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar kt-bg-brand" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress></div>
                                                        </div>
                                                    </div>
                                                    <div class="dropzone-toolbar">
                                                        <span class="dropzone-delete" data-dz-remove><i class="fa fa-times" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Max file size is 2 MB and max number of files is 5.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div style="font-family: 'Barlow Condensed', sans-serif; font-size: 14px;" class="col-lg-6">
                                            <button style="border-radius:0px; padding: 8px; width: 20%;" onclick="download_input()" type="button" class="btn primary-btn">Submit</button>
                                           &nbsp;
                                            <button style="border-radius:0px; padding: 8px; width: 20%; background-color: lightgrey; color: #1a1a1a;" type="reset" onClick="reset()" class="btn primary-btn">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>
                </div>




<br><br>




                <div class="col-12">

                <!-- begin:: Content -->
                <div style="width: 100%;
                position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" class=" kt-container--fluid  kt-grid__item kt-grid__item--fluid">


                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											              <span style="color: #E9AD28;" class="icon_folder-alt"></span>
										</span>
                                <h3 style="font-size: 18px; color: #E9AD28; font-weight: 500;">
                                    List of courses that are offered for all teachers and Teacher Educators
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">

                            <!--begin: Datatable -->
                            <table style="text-align:center; font-family: 'DM Sans', sans-serif; font-size: 16px;" class="table table-striped table-bordered table-hover table-checkable" id="kt_table_1">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Grade</th>
                                    <th>Subject</th>
                                    <th>Language</th>
                                    <th>Description</th>
                                    <th>Files</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Business Studies (2017)</td>
                                    <td>Syllabus</td>
                                    <td>Grade 12</td>
                                    <td>Business Studies</td>
                                    <td>Sinhala</td>
                                    <td>Its study combines elements of accountancy, finance, marketing, organizational studies and operations.</td>
                                    <td style="text-align: center;"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>English (2017)</td>
                                    <td>Teacher's Guide</td>
                                    <td>Grade 8</td>
                                    <td>English</td>
                                    <td>English</td>
                                    <td>This Teachers' Guide consists of detailed syllabus of grade 09, instructions for... Competencies through teaching of English Language in Sri Lanka to ensure...</td>
                                    <td style="text-align: center;"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Biology Practical Book for Teachers and Teachers Guide</td>
                                    <td>Teacher's Guide</td>
                                    <td>Grade 12</td>
                                    <td>Biology</td>
                                    <td>English</td>
                                    <td>Three aspects need to be taken into consideration by teachers when using this book. They are, the coherence of the Teacher's Instructional Manual and the...</td>
                                    <td style="text-align: center;"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a></td>
                                </tr>

                                <tr id="downloads_upload" style="display:none;">
                                    <td>4</td>
                                    <td id="d_title"></td>
                                    <td id="d_type"></td>
                                    <td id="d_grade"></td>
                                    <td id="d_subject"></td>
                                    <td id="d_lan"></td>
                                    <td id="d_desc"></td>
                                   <td style="text-align: center;"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1"><img src="img/downloads/pdf2.png" width="50px"> <span id="file_d"></span></a></td>
                                </tr>


                                </tbody>
                            </table>

                            <!--end: Datatable -->
                        </div>
                    </div>

                </div>
                </div>
                <!-- end:: Content -->








        </div>
    </div>



        </section>


        <br><br><br>




<?php include "includes/footer.html"; ?>