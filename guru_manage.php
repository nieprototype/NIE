<?php

include "includes/header.html";

date_default_timezone_set("Asia/Colombo");

?>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="container">
            <div class="row">
                <div style="text-align: right;" class="col-12">

                    <a id="stick" href="forms.php"
                       style="z-index:10; font-family: 'Barlow Condensed',sans-serif; font-size: 18px;"
                       class="primary-btn"><i class="fa fa-angle-left" aria-hidden="true"></i> Back to Dashboard</a>


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: left" class="section-title">
                            <h2>MANAGE GURGEDARA SUPPORTIVE MATERIALS</h2>
                            <h5>Home > Dashboard > Gurugedara</h5>
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
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ; font-family: Poppins, sans-serif; font-size: 14px;"
                         class="kt-portlet kt-margin-top-30">
                        <div id="form_color" class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
	<span class="kt-portlet__head-icon">
											              <span style="color: #E9AD28; font-size: 18px;"
                                                                class="icon_book_alt"></span>
										</span>

                                <h3 id="form_title" style="font-size: 18px; color: #E9AD28; font-weight: 500;">
                                    Add a New Supportive Material for a Gurugedara Video</h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form id="guru_materials" class="kt-form kt-form--label-right">
                            <div class="kt-portlet__body">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="subject">Related Subject of the Material
                                        :</label>
                                    &nbsp; &nbsp;&nbsp;
                                    <select class="col-4" id="subject">
                                        <option value="Information and Communication Technology">Information and
                                            Communication Technology
                                        </option>
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
                                        <option value="Health and Physical Education">Health and Physical Education
                                        </option>
                                        <option value="Music">Music</option>
                                        <option value="Life Competencies and Citizenship Education">Life Competencies
                                            and Citizenship Education
                                        </option>
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
                                    <label class="col-lg-3 col-form-label">Lesson No :</label>
                                    <div class="col-lg-7">
                                        <input type="text" name="lesson" id="lesson" class="form-control"
                                               placeholder="Lesson number of the subject">
                                        <span class="form-text text-muted">Please enter the lesson no of the subject</span>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="type">Related Grade of the Subject
                                        :</label>
                                    &nbsp; &nbsp;&nbsp;
                                    <select class="col-2" id="grade">

                                        <?php

                                        $i = 1;
                                        while ($i < 14) {


                                            ?>

                                            <option value="Grade <?php echo $i; ?>">Grade <?php echo $i;
                                                $i++; ?></option>

                                            <?php

                                        }

                                        ?>

                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="type">Language of the Subject :</label>
                                    &nbsp; &nbsp;&nbsp;
                                    <select class="col-2" id="lan">
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="English">English</option>
                                        <option value="Tamil">Tamil</option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Date & Time :</label>
                                    <div class="col-lg-7">

                                        <input type="datetime-local" name="datetime" id="datetime" class="form-control"
                                               placeholder="Date and time of the telecasting program">

                                        <span class="form-text text-muted">Please enter the date & time of the TV program</span>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Vedio Link of the TV Program :</label>
                                    <div class="col-lg-7">
                                        <input style="color: #0288d1;" type="text" name="link" id="link" class="form-control"
                                               placeholder="Vedio Link of the TV Program">
                                        <span class="form-text text-muted">Please type the vedio link of the TV program</span>
                                    </div>

                                </div>


                                <div class="form-group form-group-last row">
                                    <label class="col-lg-3 col-form-label">Upload Files:</label>
                                    <div class="col-lg-9">
                                        <div class="dropzone dropzone-multi" id="kt_dropzone_5">
                                            <div class="dropzone-panel">
                                                <a id="upfile"
                                                   class="dropzone-select btn btn-label-brand btn-bold btn-sm">Attach
                                                    files</a>
                                            </div>
                                            <div class="dropzone-items">
                                                <div class="dropzone-item" style="display:none">
                                                    <div class="dropzone-file">
                                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                            <span id="filename"
                                                                  data-dz-name>some_image_file_name.jpg</span> <strong>(<span
                                                                        data-dz-size>340kb</span>)</strong>
                                                        </div>
                                                        <div class="dropzone-error" data-dz-errormessage></div>
                                                    </div>
                                                    <div class="dropzone-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar kt-bg-brand" role="progressbar"
                                                                 aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
                                                                 data-dz-uploadprogress></div>
                                                        </div>
                                                    </div>
                                                    <div class="dropzone-toolbar">
                                                        <span class="dropzone-delete" data-dz-remove><i
                                                                    class="fa fa-times" aria-hidden="true"></i></span>
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
                                        <div style="font-family: 'Barlow Condensed', sans-serif; font-size: 14px;"
                                             class="col-lg-6">
                                            <button id="submit_form"
                                                    style="border-radius:0px; padding: 8px; width: 20%;"
                                                    onclick="gurugedara_input()" type="button" class="btn primary-btn">
                                                Submit
                                            </button>

                                            <button id="row1_edit"
                                                    style="border-radius:0px; display: none; padding: 8px; width: 20%;"
                                                    onclick="edit_row_submit(this.id)" type="button" class="btn primary-btn">
                                                Update
                                            </button>
                                            <button id="row2_edit"
                                                    style="border-radius:0px; display: none; padding: 8px; width: 20%;"
                                                    onclick="edit_row_submit(this.id)" type="button" class="btn primary-btn">
                                                Update
                                            </button>
                                            <button id="row3_edit"
                                                    style="border-radius:0px; display: none; padding: 8px; width: 20%;"
                                                    onclick="edit_row_submit(this.id)" type="button" class="btn primary-btn">
                                                Update
                                            </button>
                                            <button id="row4_edit"
                                                    style="border-radius:0px; display: none; padding: 8px; width: 20%;"
                                                    onclick="edit_row_submit(this.id)" type="button" class="btn primary-btn">
                                                Update
                                            </button>
                                            &nbsp;
                                            <button style="border-radius:0px; padding: 8px; width: 20%; background-color: lightgrey; color: #1a1a1a;"
                                                    type="reset" onClick="reset()" class="btn primary-btn">Cancel
                                            </button>
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
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;"
                         class=" kt-container--fluid  kt-grid__item kt-grid__item--fluid">


                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											              <span style="color: #E9AD28;" class="icon_desktop"></span>
										</span>
                                    <h3 style="font-size: 18px; color: #E9AD28; font-weight: 500;">
                                        List of Gurugedara TV programms with Materials
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">

                                <!--begin: Datatable -->
                                <table style="text-align:center; font-family: 'DM Sans', sans-serif; font-size: 16px;"
                                       class="table table-striped table-bordered table-hover table-checkable"
                                       id="kt_table_1">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th>Lesson No</th>
                                        <th>Grade</th>
                                        <th>Language</th>
                                        <th>Date & Time</th>
                                        <th>Video Link</th>
                                        <th>Files</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr id="row_1">
                                        <td>1</td>
                                        <td id="d_subject_1">Chemistry</td>
                                        <td id="d_lessonNo_1">Lesson 08</td>
                                        <td id="d_grade_1">Grade 12</td>
                                        <td id="d_lan_1">Sinhala</td>
                                        <td id="d_dateTime_1">2020-10-08 17:00</td>
                                        <td style="text-decoration: none; color: #0288d1;" id="d_link_1"><a id="d_link_1_a" class="gm_vl" style="text-decoration: none; color: #0288d1;" href="https://www.youtube.com/watch?v=sDWXR_HprN4" target="_blank">Gurugedara | AL Chemistry Sinhala Medium Part-03</a>
                                        </td>
                                        <td style="text-align: center;"><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a>
                                        </td>
                                        <td>
                                            <button onclick="edit_g_r1(this.id)" id="1" name="1"
                                                    style="background-color: rgba(246,219,172,0.51);" type="submit"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--inline kt-badge--pill"
                                                    title="Update">
                                                <i style="font-size: 18px; color: #E9AD28; font-weight: 800;"
                                                   class="icon_pencil"></i>
                                            </button>
                                            <hr>
                                            <button onclick="
                              if (confirm('Are you sure you want to delete this material ?')) {
                                   document.getElementById('row_1').style.display = 'none';
                                   var table = $('#kt_table_1').DataTable();
                                   table.draw();
                              } else {
                                  return false;
                              }" type="submit" id="submit_remove" name="submit_remove"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                                    title="Delete">
                                                <i style="font-size: 26px; color: #dc3545; font-weight: 800;"
                                                   class="icon_close"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr id="row_2">
                                        <td>2</td>
                                        <td id="d_subject_2">Biology</td>
                                        <td id="d_lessonNo_2">Lesson 11</td>
                                        <td id="d_grade_2">Grade 12</td>
                                        <td id="d_lan_2">Sinhala</td>
                                        <td id="d_dateTime_2">2020-10-10 08:00</td>
                                        <td style="text-decoration: none; color: #0288d1;" id="d_link_2"><a id="d_link_2_a" class="gm_vl" style="text-decoration: none; color: #0288d1;" href="https://www.youtube.com/watch?v=mIdNFvFSWwI" target="_blank">Biology A/L | Microbiology Part - 02</a>
                                        </td>
                                        <td style="text-align: center;"><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a>
                                        </td>
                                        <td>
                                            <button onclick="edit_g_r1(this.id)" id="2" name="2"
                                                    style="background-color: rgba(246,219,172,0.51);" type="submit"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--inline kt-badge--pill"
                                                    title="Update">
                                                <i style="font-size: 18px; color: #E9AD28; font-weight: 800;"
                                                   class="icon_pencil"></i>
                                            </button>
                                            <hr>
                                            <button onclick="
                              if (confirm('Are you sure you want to delete this material ?')) {
                                   document.getElementById('row_2').style.display = 'none';
                                   var table = $('#kt_table_1').DataTable();
                                   table.draw();
                              } else {
                                  return false;
                              }" type="submit" id="submit_remove" name="submit_remove"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                                    title="Delete">
                                                <i style="font-size: 26px; color: #dc3545; font-weight: 800;"
                                                   class="icon_close"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr id="row_3">
                                        <td>3</td>
                                        <td id="d_subject_3">English</td>
                                        <td id="d_lessonNo_3">Lesson 05</td>
                                        <td id="d_grade_3">Grade 13</td>
                                        <td id="d_lan_3">Sinhala</td>
                                        <td id="d_dateTime_3">2020-10-11 05:00</td>
                                        <td style="text-decoration: none; color: #0288d1;" id="d_link_3">

                                            <a id="d_link_3_a" class="gm_vl" style="text-decoration: none; color: #0288d1;" href="https://www.youtube.com/watch?v=jXBYIuxI8nQ" target="_blank">NIE Guru Gedara | O/L English - Lesson 03 (Part 01)</a>

                                        </td>
                                        <td style="text-align: center;">
                                            <a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png"
                                                                         width="50px"></a><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img style="width: 70%; margin-left: 4%;" src="img/downloads/down.png" width="50px"></a>
                                        </td>
                                        <td>
                                            <button onclick="edit_g_r1(this.id)" id="3" name="3"
                                                    style="background-color: rgba(246,219,172,0.51);" type="submit"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--inline kt-badge--pill"
                                                    title="Update">
                                                <i style="font-size: 18px; color: #E9AD28; font-weight: 800;"
                                                   class="icon_pencil"></i>
                                            </button>
                                            <hr>
                                            <button onclick="
                              if (confirm('Are you sure you want to delete this Material ?')) {
                                   document.getElementById('row_3').style.display = 'none';
                                   var table = $('#kt_table_1').DataTable();
                                   table.draw();
                              } else {
                                  return false;
                              }" type="submit" id="submit_remove" name="submit_remove"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                                    title="Delete">
                                                <i style="font-size: 26px; color: #dc3545; font-weight: 800;"
                                                   class="icon_close"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr id="gurugedara_upload" style="display:none;">
                                        <td>4</td>
                                        <td id="d_subject"></td>
                                        <td id="d_lessonNo"></td>
                                        <td id="d_grade"></td>
                                        <td id="d_lan"></td>
                                        <td id="d_dateTime"></td>
                                        <td class="gm_vl" style="text-decoration: none; color: #0288d1;" id="d_link"></td>
                                        <td style="text-align: center;"><a id="d_link_a"
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="https://www.youtube.com/watch?v=jXBYIuxI8nQ"><img src="img/downloads/pdf2.png" width="50px">
                                                <span id="file_d"></span></a></td>
                                        <td>
                                            <button onclick="edit_g_r1(this.id)" id="4" name="4"
                                                    style="background-color: rgba(246,219,172,0.51);" type="submit"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--inline kt-badge--pill"
                                                    title="Update">
                                                <i style="font-size: 18px; color: #E9AD28; font-weight: 800;"
                                                   class="icon_pencil"></i>
                                            </button>
                                            <hr>
                                            <button onclick="
                              if (confirm('Are you sure you want to delete this material ?')) {
                                   document.getElementById('gurugedara_upload').style.display = 'none';
                                   var table = $('#kt_table_1').DataTable();
                                   table.draw();
                              } else {
                                  return false;
                              }" type="submit" id="submit_remove" name="submit_remove"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                                    title="Delete">
                                                <i style="font-size: 26px; color: #dc3545; font-weight: 800;"
                                                   class="icon_close"></i>
                                            </button>
                                        </td>
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