<?php include "includes/header.html"; ?>

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="img/slider/abv.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="text-align: left; margin-left: 0%; margin-top: -9%" class="hero__text">

                    <h2 style="font-size: 50px;">DOWNLOADS SECTION</h2>
                    <h5>Home / Downloads</h5>
                    <br><br>

                </div>
                <form action="down_search.php" method="get" style="margin-bottom: -10%" class="filter__form col-12">
                    <div style="text-align: center;" class="filter__form__item filter__form__item--search col-sm-10">

                        <h3 class="kt-widget14__title">
                            What are you looking for ?

                        </h3>
                        <br>
                        <div class="filter__form__input col-12">
                            <input required name="name_search" id="d_input" style="text-align: center" type="text" placeholder="Search Downloads">
                            <span style="margin-right: 2%;" class="icon_search"></span>

                            <div style="text-align: center;" class="row">


                                <div style="text-align: right;" class="col-5">

                                    <h3 style="font-weight: 400; font-size: 20px; margin-top: 3.1%;"
                                        class="kt-widget14__title">
                                        Top Searches :
                                    </h3>

                                </div>

                                <div style="text-align: left; margin-left: -2%; margin-top: 1.4%;" class="col-7">

                                    <h3 onClick="change_text(this.id)" id="bl2" class="lat_a" style="font-size: large;">
                                        Biology Lesson 02</h3>
                                    ,
                                    <h3 onClick="change_text(this.id)" id="tg" class="lat_a" style="font-size: large;">
                                        Teacher's Guide</h3>
                                    ,
                                    <h3 onClick="change_text(this.id)" id="syl" class="lat_a" style="font-size: large;">
                                        Syllabus</h3>

                                </div>

                            </div>


                        </div>

                    </div>


                    <button id="hover_search" type="submit">SEARCH</button>


                </form>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="text-align: left" class="section-title">
                    <br><br><br>
                    <h2>MATERIALS</h2>
                    <h5>Syllabus & Teacher's Guide</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">

                <form style=" position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="down_search.php" method="get" class="filter__form">

                    <div class="col-11 filter__form__item filter__form__item--search">

                        <center><img src="img/downloads/s.jpg" width="70%"></center>

                        <div class="kt-widget14__header kt-margin-b-30">
                            <h3 class="kt-widget14__title">
                                Syllabus Downloads
                            </h3>
                            <span class="kt-widget14__desc">
														  <p style="font-size: small; margin-top: 2%;">
                                                             Most of the syllabus are attached in the Teachers' Guides. Only separated English medium syllabus are displayed under this option.</p>
                       									</span>
                        </div>


                        <form id="syl_search" name="syl_search" method="get" action="down_search.php" class="filter__form__input">
                            <div style="width: 100%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Grade of the Syllabus
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_group"></span>
                                    <select id="grade_search" name="grade_search">
                                        <option value="">Select Grade</option>
                                        <?php

                                        $i = 1;
                                        while ($i < 14) {

                                            ?>

                                            <option value="<?php echo $i; ?>">Grade <?php echo $i;
                                                $i++; ?></option>

                                            <?php

                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div style="width: 100%; margin-top: 8%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Medium of the Syllabus
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_globe-2"></span>
                                    <select id="language_search" name="language_search">
                                        <option value="">Select Language</option>
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="English">English</option>
                                        <option value="Tamil">Tamil</option>
                                    </select>
                                </div>
                            </div>

                            <div style="width: 100%; margin-top: 8%; margin-bottom: 5%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Subject of the Syllabus
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_book"></span>
                                    <select id="subject_search" name="subject_search_cat">
                                        <option value="">Select Subject</option>
                                        <option value="ICT">ICT</option>
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
                                        <option value="Health">Health
                                        </option>
                                        <option value="Music">Music</option>
                                        <option value="Citizenship Education">Citizenship Education
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
                            </div>

                            <p style="text-align: right; margin-bottom: -1%; ">

                                <input id="syl_search_submit" value="Search" type="button" onclick="search_syl()" style="font-family: 'Barlow Condensed',sans-serif; font-size: 20px; font-weight: 400; border: #E9AD28;" class="primary-btn">

                            </p>

                        </form>
                    </div>


                </form>

                <br><br>
            </div>


            <div class="col-6">

                <form style=" position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" id="syl_search" name="syl_search" method="get" action="down_search.php" class="filter__form">

                    <div class="col-11 filter__form__item filter__form__item--search">

                        <center><img src="img/downloads/t.jpg" width="71%"></center>

                        <div class="kt-widget14__header kt-margin-b-30">
                            <h3 class="kt-widget14__title">
                                Teacher's Guide Downloads
                            </h3>
                            <span class="kt-widget14__desc">
														  <p style="font-size: small; margin-top: 2%;">
                                                             You can search the preffered teacher's guide according to the relavant grade, medium and the subject under this option.</p>
                       									</span>
                        </div>


                        <form id="syl_search" name="syl_search" method="get" action="down_search.php" class="filter__form__input">
                            <div style="width: 100%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Grade of the Guide
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_group"></span>
                                    <select id="grade_search_tg" name="grade_search">
                                        <option value="">Select Grade</option>
                                        <?php

                                        $i = 1;
                                        while ($i < 14) {

                                            ?>

                                            <option value="<?php echo $i; ?>">Grade <?php echo $i;
                                                $i++; ?></option>

                                            <?php

                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div style="width: 100%; margin-top: 8%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Medium of the Guide
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_globe-2"></span>
                                    <select id="language_search_tg" name="language_search">
                                        <option value="">Select Language</option>
                                        <option value="Sinhala">Sinhala</option>
                                        <option value="English">English</option>
                                        <option value="Tamil">Tamil</option>
                                    </select>
                                </div>
                            </div>

                            <div style="width: 100%; margin-top: 8%; margin-bottom: 5%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Subject of the Guide
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_book"></span>

                                    <select id="subject_search_tg" name="subject_search_cat">

                                        <option value="">Select Subject</option>
                                        <option value="ICT">ICT</option>
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
                                        <option value="Health">Health
                                        </option>
                                        <option value="Music">Music</option>
                                        <option value="Citizenship Education">Citizenship Education
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
                            </div>

                            <p style="text-align: right; margin-bottom: -1%; ">
                                <input id="tg_search_submit" value="Search" type="button" onclick="search_tg()" style="font-family: 'Barlow Condensed',sans-serif; font-size: 20px; font-weight: 400; border: #E9AD28;" class="primary-btn">
                            </p>
                        </form>
                    </div>


                </form>

                <br><br>
            </div>


        </div>


        <div class="row">
            <div class="col-lg-12">
                <div style="text-align: left" class="section-title">
                    <br><br><br>
                    <h2>OTHER SPECIAL MATERIALS</h2>
                    <h5>Other Uncategorized Downloadable Materials</h5>
                </div>
            </div>
        </div>

        <div class="row">

            <a href="img/doc/practical.pdf" target="_blank">
            <div class="col-6">

                <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                      class="filter__form hover-div">


                    <div style="margin-top: -2%;" class="filter__form__item col-8">

                        <div class="kt-widget14__header">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">
                                Practical Instructional Manual
                            </h3>


                            <p style="text-align: left; font-size: 15px;">G.C.E. (A/L)Practical Instructional Manual
                                (Biology-Sinhala)</p>

                            <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                 class="latest__blog__text">
                                <a style="font-size: large;" href="img/doc/practical.pdf" target="_blank">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                 style=" margin-top: -2%; margin-bottom: -4%;"></a>
                        </div>
                    </div>

                </form>

            </div>
            </a>

            <a href="img/doc/practical.pdf" target="_blank">
            <div class="col-6">

                <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                      class="filter__form hover-div">


                    <div style="margin-top: -2%;" class="filter__form__item col-8">

                        <div class="kt-widget14__header">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">
                                ICT Model Paper
                            </h3>


                            <p style="text-align: left; font-size: 15px;">Suggested Answers for the ICT (G.C.E.
                                A/L)issued
                                by the General of Examinations.</p>

                            <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                 class="latest__blog__text">
                                <a style="font-size: large;" href="img/doc/practical.pdf" target="_blank">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">

                            <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                 style=" margin-top: -2%; margin-bottom: -4%;"></a>
                        </div>
                    </div>

                </form>

            </div>
            </a>

        </div>
        <br>
        <br>
        <div class="row">
            <a href="img/doc/practical.pdf" target="_blank">
            <div class="col-6">

                <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                      class="filter__form hover-div">


                    <div style="margin-top: -2%;" class="filter__form__item col-8">

                        <div class="kt-widget14__header">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">
                                Electrical, Electronic Reference
                            </h3>


                            <p style="text-align: left; font-size: 15px;">Electrical, Electronic & IT Reference book for
                                technology
                                stream students.</p>

                            <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                 class="latest__blog__text">
                                <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                 style=" margin-top: -2%; margin-bottom: -4%;">
                            </a>
                        </div>
                    </div>

                </form>

            </div>
            </a>

            <a href="img/doc/practical.pdf" target="_blank">
            <div class="col-6">

                <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                      class="filter__form hover-div">


                    <div style="margin-top: -2%;" class="filter__form__item col-8">

                        <div class="kt-widget14__header">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">
                                Geometry - I
                            </h3>


                            <p style="text-align: left; font-size: 15px;">Geometry - I (Resource Book)-Sinhala for
                                Advanced level.</p>

                            <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                 class="latest__blog__text">
                                <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                 style=" margin-top: -2%; margin-bottom: -4%;"></a>
                        </div>
                    </div>

                </form>

            </div>
            </a>

        </div>


        <br>
        <br>
        <div class="row">
            <a href="img/doc/practical.pdf" target="_blank">
            <div class="col-6">

                <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                      class="filter__form hover-div">


                    <div style="margin-top: -2%;" class="filter__form__item col-8">

                        <div class="kt-widget14__header">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">
                                Physics List of Practical's
                            </h3>


                            <p style="text-align: left; font-size: 15px;">G.C.E. (A/L) : List of Practical's
                                (Physics_Sinhala).</p>

                            <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                 class="latest__blog__text">
                                <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                 style=" margin-top: -2%; margin-bottom: -4%;"></a>
                        </div>
                    </div>

                </form>

            </div>
            </a>
            <a href="img/doc/practical.pdf" target="_blank">
            <div class="col-6">

                <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                      class="filter__form hover-div">


                    <div style="margin-top: -2%;" class="filter__form__item col-8">

                        <div class="kt-widget14__header">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">
                                Mechanical Technology
                            </h3>


                            <p style="text-align: left; font-size: 15px;">Mechanical Technology Reference book for
                                Gr-13-sinhala.</p>

                            <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                 class="latest__blog__text">
                                <a style="font-size: large;" href="img/doc/practical.pdf" download >Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                 style=" margin-top: -2%; margin-bottom: -4%;"></a>
                        </div>
                    </div>

                </form>

            </div>

            </a>
        </div>

        <br><br>

        <div style="display: none" class="row">
            <a href="img/doc/practical.pdf" target="_blank">
                <div class="col-6">

                    <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                          class="filter__form hover-div">


                        <div style="margin-top: -2%;" class="filter__form__item col-8">

                            <div class="kt-widget14__header">
                                <h3 style="font-weight: 400;" class="kt-widget14__title">
                                    Electrical, Electronic Reference
                                </h3>


                                <p style="text-align: left; font-size: 15px;">Electrical, Electronic & IT Reference book for
                                    technology
                                    stream students.</p>

                                <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                     class="latest__blog__text">
                                    <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter__form__item filter__form__item--search">
                            <div class="filter__form__input">
                                <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                     style=" margin-top: -2%; margin-bottom: -4%;">
                                </a>
                            </div>
                        </div>

                    </form>

                </div>
            </a>

            <a href="img/doc/practical.pdf" target="_blank">
                <div class="col-6">

                    <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                          class="filter__form hover-div">


                        <div style="margin-top: -2%;" class="filter__form__item col-8">

                            <div class="kt-widget14__header">
                                <h3 style="font-weight: 400;" class="kt-widget14__title">
                                    Geometry - I
                                </h3>


                                <p style="text-align: left; font-size: 15px;">Geometry - I (Resource Book)-Sinhala for
                                    Advanced level.</p>

                                <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                     class="latest__blog__text">
                                    <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter__form__item filter__form__item--search">
                            <div class="filter__form__input">
                                <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                     style=" margin-top: -2%; margin-bottom: -4%;"></a>
                            </div>
                        </div>

                    </form>

                </div>
            </a>

        </div>


        <div style="display: none" class="row">
            <a href="img/doc/practical.pdf" target="_blank">
                <div class="col-6">

                    <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                          class="filter__form hover-div">


                        <div style="margin-top: -2%;" class="filter__form__item col-8">

                            <div class="kt-widget14__header">
                                <h3 style="font-weight: 400;" class="kt-widget14__title">
                                    Electrical, Electronic Reference
                                </h3>


                                <p style="text-align: left; font-size: 15px;">Electrical, Electronic & IT Reference book for
                                    technology
                                    stream students.</p>

                                <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                     class="latest__blog__text">
                                    <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter__form__item filter__form__item--search">
                            <div class="filter__form__input">
                                <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                     style=" margin-top: -2%; margin-bottom: -4%;">
                                </a>
                            </div>
                        </div>

                    </form>

                </div>
            </a>

            <a href="img/doc/practical.pdf" target="_blank">
                <div class="col-6">

                    <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                          class="filter__form hover-div">


                        <div style="margin-top: -2%;" class="filter__form__item col-8">

                            <div class="kt-widget14__header">
                                <h3 style="font-weight: 400;" class="kt-widget14__title">
                                    Geometry - I
                                </h3>


                                <p style="text-align: left; font-size: 15px;">Geometry - I (Resource Book)-Sinhala for
                                    Advanced level.</p>

                                <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                     class="latest__blog__text">
                                    <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter__form__item filter__form__item--search">
                            <div class="filter__form__input">
                                <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                     style=" margin-top: -2%; margin-bottom: -4%;"></a>
                            </div>
                        </div>

                    </form>

                </div>
            </a>

        </div>


        <div style="display: none" class="row">
            <a href="img/doc/practical.pdf" target="_blank">
                <div class="col-6">

                    <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                          class="filter__form hover-div">


                        <div style="margin-top: -2%;" class="filter__form__item col-8">

                            <div class="kt-widget14__header">
                                <h3 style="font-weight: 400;" class="kt-widget14__title">
                                    Electrical, Electronic Reference
                                </h3>


                                <p style="text-align: left; font-size: 15px;">Electrical, Electronic & IT Reference book for
                                    technology
                                    stream students.</p>

                                <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                     class="latest__blog__text">
                                    <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter__form__item filter__form__item--search">
                            <div class="filter__form__input">
                                <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                     style=" margin-top: -2%; margin-bottom: -4%;">
                                </a>
                            </div>
                        </div>

                    </form>

                </div>
            </a>

            <a href="img/doc/practical.pdf" target="_blank">
                <div class="col-6">

                    <form style="position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#"
                          class="filter__form hover-div">


                        <div style="margin-top: -2%;" class="filter__form__item col-8">

                            <div class="kt-widget14__header">
                                <h3 style="font-weight: 400;" class="kt-widget14__title">
                                    Geometry - I
                                </h3>


                                <p style="text-align: left; font-size: 15px;">Geometry - I (Resource Book)-Sinhala for
                                    Advanced level.</p>

                                <div style="background-color: #ffffff00; margin-left: -9%; margin-bottom: -10%; margin-top: -15%;"
                                     class="latest__blog__text">
                                    <a style="font-size: large;" href="img/doc/practical.pdf" download>Download PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter__form__item filter__form__item--search">
                            <div class="filter__form__input">
                                <a href="img/doc/practical.pdf" target="_blank"><img height="120px" class="" src="img/downloads/pdf2.png"
                                                                                     style=" margin-top: -2%; margin-bottom: -4%;"></a>
                            </div>
                        </div>

                    </form>

                </div>
            </a>

        </div>


        <p style="text-align: center; margin-bottom: -1%; margin-top: 4%;"><img src="img/notices/arr.gif" width="6%;">
        </p>


        <br><br><br><br>
    </div>
</div>


<!-- Your Section Begin -->

<!-- Your Section End -->

<?php include "includes/footer.html"; ?>
