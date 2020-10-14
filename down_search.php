<?php include "includes/header.html"; ?>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="container">
            <div class="row">

                <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: left" class="section-title">
                            <h2 style="font-size: 50px; margin-bottom: 2%; margin-top: 6%;">DOWNLOADS SEARCH RESULTS&nbsp;<span style="font-size: 40px; color: rgba(17,17,17,0.36)"> for "dfszdf"</span></h2>
                            <h5>Home > Downloads > Search</h5>
                        </div>
                    </div>
                </div>


            </div>
            <section id="card">







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
											              <span style="color: #E9AD28;" class="icon_folder-alt"></span>
										</span>
                                    <h3 style="font-size: 18px; color: #E9AD28; font-weight: 500;">
                                        List of Downloadable Materials
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
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Grade</th>
                                        <th>Subject</th>
                                        <th>Language</th>
                                        <th>Description</th>
                                        <th>Files</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr id="row_1">
                                        <td>1</td>
                                        <td id="d_title_1">Business Studies (2017)</td>
                                        <td id="d_type_1">Syllabus</td>
                                        <td id="d_grade_1">Grade 12</td>
                                        <td id="d_subject_1">Business Studies</td>
                                        <td id="d_lan_1">Sinhala</td>
                                        <td id="d_desc_1">Its study combines elements of accountancy, finance, marketing, organizational studies and operations.
                                        </td>
                                        <td style="text-align: center;"><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a>
                                        </td>
                                        <td>
                                            <button onclick="edit_d_r1(this.id)" id="1" name="1"
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
                                        <td id="d_title_2">English (2017)</td>
                                        <td id="d_type_2">Teacher's Guide</td>
                                        <td id="d_grade_2">Grade 8</td>
                                        <td id="d_subject_2">English</td>
                                        <td id="d_lan_2">English</td>
                                        <td id="d_desc_2">This Teachers' Guide consists of detailed syllabus of grade 09, instructions for... Competencies through teaching of English Language in Sri Lanka to ensure...
                                        </td>
                                        <td style="text-align: center;"><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a>
                                        </td>
                                        <td>
                                            <button onclick="edit_d_r1(this.id)" id="2" name="2"
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
                                        <td id="d_title_3">Biology Practical Book for Teachers and Teachers Guide</td>
                                        <td id="d_type_3">Teacher's Guide</td>
                                        <td id="d_grade_3">Grade 12</td>
                                        <td id="d_subject_3">Biology</td>
                                        <td id="d_lan_3">English</td>
                                        <td id="d_desc_3">Three aspects need to be taken into consideration by teachers when using this book. They are, the coherence of the Teacher's Instructional Manual and the...
                                        </td>
                                        <td style="text-align: center;"><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png"
                                                                         width="50px"></a><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png" width="50px"></a>
                                        </td>
                                        <td>
                                            <button onclick="edit_d_r1(this.id)" id="3" name="3"
                                                    style="background-color: rgba(246,219,172,0.51);" type="submit"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--inline kt-badge--pill"
                                                    title="Update">
                                                <i style="font-size: 18px; color: #E9AD28; font-weight: 800;"
                                                   class="icon_pencil"></i>
                                            </button>
                                            <hr>
                                            <button onclick="
                              if (confirm('Are you sure you want to delete this material ?')) {
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

                                    <tr id="downloads_upload" style="display:none;">
                                        <td>4</td>
                                        <td id="d_title"></td>
                                        <td id="d_type"></td>
                                        <td id="d_grade"></td>
                                        <td id="d_subject"></td>
                                        <td id="d_lan"></td>
                                        <td id="d_desc"></td>
                                        <td style="text-align: center;"><a
                                                    style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;"
                                                    href="#course1"><img src="img/downloads/pdf2.png" width="50px">
                                                <span id="file_d"></span></a></td>
                                        <td>
                                            <button onclick="edit_d_r1(this.id)" id="4" name="4"
                                                    style="background-color: rgba(246,219,172,0.51);" type="submit"
                                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--inline kt-badge--pill"
                                                    title="Update">
                                                <i style="font-size: 18px; color: #E9AD28; font-weight: 800;"
                                                   class="icon_pencil"></i>
                                            </button>
                                            <hr>
                                            <button onclick="
                              if (confirm('Are you sure you want to delete this material ?')) {
                                   document.getElementById('downloads_upload').style.display = 'none';
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