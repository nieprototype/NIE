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
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#" class="filter__form">

                    <div class="col-11 filter__form__item filter__form__item--search">

                        <center><img src="img/downloads/s.jpg" width="70%"></center>

                        <div class="kt-widget14__header kt-margin-b-30">
                            <h3 class="kt-widget14__title">
                                Syllabus Downloads
                            </h3>
                            <span class="kt-widget14__desc">
														  <p style="font-size: small; margin-top: 2%;">
                                                             Most of the syllabi are attached in the Teachers' Guides. Only separated English medium syllabi are displayed under this option.</p>
                       									</span>
                        </div>


                        <form class="filter__form__input">
                            <div style="width: 100%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Grade of the Syllabus
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_group"></span>
                                    <select>
                                        <option value="">Select Grade</option>
                                        <option value="">Grade 11</option>
                                        <option value="">Grade 13</option>
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
                                    <select>
                                        <option value="">Select Medium</option>
                                        <option value="">Sinhala</option>
                                        <option value="">English</option>
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
                                    <select>
                                        <option value="">Select Subject</option>
                                        <option value="">Biology</option>
                                        <option value="">History</option>
                                    </select>
                                </div>
                            </div>

                            <p style="text-align: right; margin-bottom: -1%; "><a href="#"
                                                                                  style="font-family: 'Poppins',sans-serif; font-size: large;"
                                                                                  class="primary-btn">Search</a></p>

                        </form>
                    </div>


                </form>

                <br><br>
            </div>


            <div class="col-6">

                <form style=" position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1) ;" action="#" class="filter__form">

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


                        <form class="filter__form__input">
                            <div style="width: 100%;" class="filter__form__item">

                                <div class="kt-widget14__header">
                                    <h3 style="font-weight: 400; font-size: 24px;" class="kt-widget14__title">
                                        Grade of the Guide
                                    </h3>
                                </div>

                                <div style="width: 50%; margin-top: -8%; margin-left: 50%;"
                                     class="filter__form__select">
                                    <span class="icon_group"></span>
                                    <select>
                                        <option value="">Select Grade</option>
                                        <option value="">Grade 12</option>
                                        <option value="">Grade 09</option>
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
                                    <select>
                                        <option value="">Select Medium</option>
                                        <option value="">English</option>
                                        <option value="">Sinhala</option>
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
                                    <select>
                                        <option value="">Select Subject</option>
                                        <option value="">Chemistry</option>
                                        <option value="">English</option>
                                    </select>
                                </div>
                            </div>

                            <p style="text-align: right; margin-bottom: -1%; "><a href="#"
                                                                                  style="font-family: 'Poppins',sans-serif; font-size: large;"
                                                                                  class="primary-btn">Search</a></p>
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
                                <a style="font-size: large;" href="#">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <img height="120px" class="" src="img/downloads/pdf2.png"
                                 style=" margin-top: -2%; margin-bottom: -4%;">
                        </div>
                    </div>

                </form>

            </div>


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
                                <a style="font-size: large;" href="#">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <img height="120px" class="" src="img/downloads/pdf2.png"
                                 style=" margin-top: -2%; margin-bottom: -4%;">
                        </div>
                    </div>

                </form>

            </div>


        </div>
        <br>
        <br>
        <div class="row">
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
                                <a style="font-size: large;" href="#">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <img height="120px" class="" src="img/downloads/pdf2.png"
                                 style=" margin-top: -2%; margin-bottom: -4%;">
                        </div>
                    </div>

                </form>

            </div>


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
                                <a style="font-size: large;" href="#">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <img height="120px" class="" src="img/downloads/pdf2.png"
                                 style=" margin-top: -2%; margin-bottom: -4%;">
                        </div>
                    </div>

                </form>

            </div>


        </div>


        <br>
        <br>
        <div class="row">
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
                                <a style="font-size: large;" href="#">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <img height="120px" class="" src="img/downloads/pdf2.png"
                                 style=" margin-top: -2%; margin-bottom: -4%;">
                        </div>
                    </div>

                </form>

            </div>


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
                                <a style="font-size: large;" href="#">Download PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter__form__item filter__form__item--search">
                        <div class="filter__form__input">
                            <img height="120px" class="" src="img/downloads/pdf2.png"
                                 style=" margin-top: -2%; margin-bottom: -4%;">
                        </div>
                    </div>

                </form>

            </div>


        </div>

        <p style="text-align: center; margin-bottom: -1%; margin-top: 4%;"><img src="img/notices/arr.gif" width="6%;">
        </p>


        <br><br><br><br>
    </div>
</div>


<!-- Your Section Begin -->

<!-- Your Section End -->

<?php include "includes/footer.html"; ?>
