<?php include "includes/header.html"; ?>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="container">
        <div class="row">

            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: left" class="section-title">
                        <h2 style="font-size: 50px; margin-bottom: 2%; margin-top: 6%;">DOWNLOADS SEARCH
                            RESULTS&nbsp;<span style="font-size: 40px; color: rgba(17,17,17,0.36)"> for "<span
                                        id="st"></span>"</span></h2>
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
                                   id="kt_table_12">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Grade</th>
                                    <th>Subject</th>
                                    <th>Language</th>

                                    <th>Files</th>

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

                                    <td style="text-align: center;" width="300px"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1" class="primary-btn-tbl hover-div-tbl"><img src="img/downloads/pdf2.png" width="18%">Download Material</a></td>


                                </tr>
                                <tr id="row_2">
                                    <td>2</td>
                                    <td id="d_title_2">English (2017)</td>
                                    <td id="d_type_2">Teacher's Guide</td>
                                    <td id="d_grade_2">Grade 8</td>
                                    <td id="d_subject_2">English</td>
                                    <td id="d_lan_2">English</td>

                                    <td style="text-align: center;" width="300px"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1" class="primary-btn-tbl hover-div-tbl"><img src="img/downloads/pdf2.png" width="18%">Download Material</a></td>


                                </tr>
                                <tr id="row_3">
                                    <td>3</td>
                                    <td id="d_title_3">Biology Practical Book for Teachers and Teachers Guide</td>
                                    <td id="d_type_3">Teacher's Guide</td>
                                    <td id="d_grade_3">Grade 12</td>
                                    <td id="d_subject_3">Biology</td>
                                    <td id="d_lan_3">English</td>

                                    <td style="text-align: center;" width="300px"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1" class="primary-btn-tbl hover-div-tbl"><img src="img/downloads/pdf2.png" width="18%">Download Material</a></td>


                                </tr>

                                <tr id="downloads_upload" style="display:none;">
                                    <td>4</td>
                                    <td id="d_title"></td>
                                    <td id="d_type"></td>
                                    <td id="d_grade"></td>
                                    <td id="d_subject"></td>
                                    <td id="d_lan"></td>

                                    <td style="text-align: center;" width="300px"><a style="color: #343638; font-size: 14px; font-weight: 500; font-family: 'Poppins', sans-serif;" href="#course1" class="primary-btn-tbl hover-div-tbl"><img src="img/downloads/pdf2.png" width="18%">Download Material</a></td>

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

<script>

    $(document).ready(function () {

        var url_string = window.location.href;
        var url = new URL(url_string);

        if (window.location.href.indexOf("subject_search_cat") < 0) {

            var c = url.searchParams.get("name_search");
            document.getElementById('st').innerHTML = c;

            "use strict";
            var KTDatatablesBasicScrollable = function () {

                var initTable1 = function () {
                    var table = $('#kt_table_12');

                    // begin first table
                    table.DataTable({
                        scrollY: false,
                        scrollX: true,
                        scrollCollapse: true,
                        search: {
                            "search": c
                        }
                    });
                };


                return {

                    //main function to initiate the module
                    init: function () {
                        initTable1();
                    },

                };

            }();

            jQuery(document).ready(function () {
                KTDatatablesBasicScrollable.init();
            });
        }

        if (url.searchParams.get("subject_search_cat").value !== 'null') {

            var d = url.searchParams.get("subject_search_cat");
            document.getElementById('st').innerHTML = d;

            "use strict";
            var KTDatatablesBasicScrollable = function () {

                var initTable1 = function () {
                    var table = $('#kt_table_12');

                    // begin first table
                    table.DataTable({
                        scrollY: false,
                        scrollX: true,
                        scrollCollapse: true,
                        search: {
                            "search": d
                        }
                    });
                };


                return {

                    //main function to initiate the module
                    init: function () {
                        initTable1();
                    },

                };

            }();

            jQuery(document).ready(function () {
                KTDatatablesBasicScrollable.init();
            });

        }

    });

</script>


