<?php include "includes/header.html"; ?>

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="img/slider/5.png">


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text">
                    <h5>WELCOME TO</h5>
                    <h2>NATIONAL INSTITUTE OF EDUCATION</h2>
                </div>
                <form action="down_search.php" method="get" class="filter__form">
                    <div class="filter__form__item filter__form__item--search">
                        <p>Search Materials</p>
                        <div class="filter__form__input">
                            <input required name="name_search" type="text" placeholder="Search Downloads">
                            <span class="icon_search"></span>
                        </div>
                    </div>
                    <div class="filter__form__item">
                        <p>Grade</p>
                        <div class="filter__form__select">
                            <span class="icon_group"></span>
                            <select name="grade_search">
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
                    <div class="filter__form__item">
                        <p>Subject</p>
                        <div class="filter__form__select">
                            <span class="icon_book"></span>
                            <select name="subject_search">
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
                    <div class="filter__form__item filter__form__item--select">
                        <p>Language</p>
                        <div class="filter__form__select">
                            <span class="icon_globe-2"></span>
                            <select name="language_search">
                                <option value="">Select Language</option>
                                <option value="Sinhala">Sinhala</option>
                                <option value="English">English</option>
                                <option value="Tamil">Tamil</option>
                            </select>
                        </div>
                    </div>
                    <button id="hover_search" type="submit">SEARCH</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Home About Section Begin -->
<section class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="home__about__text">
                    <div class="section-title">
                        <h5>ABOUT US</h5>
                        <h2>National Institute of Education (NIE), The prime institute in Sri Lanka</h2>
                    </div>
                    <p class="first-para">NIE is the prime institute in the country that responsible for providing
                        leadership for the development of general education with, <br>
                    </p>
                    <p class="last-para">
                        - &nbsp; Design and develop curricula for general and teacher education.<br>
                        - &nbsp; Provide professional development of educational community.<br>
                        - &nbsp; Spearhead change through research and innovation.</p>

                    <img src="img/home-about/sign.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home__about__pic">
                    <img src="img/home-about/home-about.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home About Section End -->


<!-- Gallery Section Begin -->
<section class="gallery spad">
    <div class="gallery__text">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="section-title">
                        <h5>OUR GALLERY</h5>
                        <h2>Explore The Special Moments Photo Gallery at NIE</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery__title">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Sunt in culpa qui officia deserunt mollit anim.</p>
                        <a href="#" class="primary-btn">View Events <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12">
        <div class="gallery__slider owl-carousel">
            <div class="gallery__item small__item set-bg" data-setbg="img/gallery/sp1.jpg">

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <form action="#" class="filter__form">

                    <div style="text-align: center; width: 84%;" class="filter__form__item">

                        <div class="kt-widget14__header">
                            <hr class="new4">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">

                                Prevent Covid-19: Stay Healthy
                            </h3>

                            <br>
                            <p style="text-align: center; font-size: 15px;">Guidance of district leaders to best support
                                their students, schools and communities.</p>

                            <hr class="new4">
                        </div>
                    </div>

                </form>


            </div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/sp2.jpg">


                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <form action="#" class="filter__form">

                    <div style="text-align: center;width: 84%;" class="filter__form__item">

                        <div class="kt-widget14__header">
                            <hr class="new4">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">

                                Greetings : Children's Day
                            </h3>

                            <br>
                            <p style="text-align: center; font-size: 15px;">Message by Prime Minister Mahinda on the
                                World Children’s Day</p>

                            <hr class="new4">
                        </div>
                    </div>

                </form>


            </div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/sp4.jpg">


                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <form action="#" class="filter__form">

                    <div style="text-align: center; width: 84%;" class="filter__form__item">

                        <div class="kt-widget14__header">
                            <hr class="new4">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">

                                IDs for NCE professionals
                            </h3>

                            <br>
                            <p style="text-align: center; font-size: 15px;">Issue Identity Cards to principals,lecturers
                                and teachers in NCE</p>

                            <hr class="new4">
                        </div>
                    </div>

                </form>


            </div>
            <div class="gallery__item set-bg">
                <video style="position: absolute; z-index: -10000000000; width: 100%;" autoplay="autoplay" muted="muted"
                       loop="loop">
                    <source src="img/gallery/vd.mp4" type="video/mp4">
                </video>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                <form style="z-index: +100000000000000000;position: absolute; width: 100%" action="#"
                      class="filter__form">

                    <div style="text-align: center; width: 84%;" class="filter__form__item">

                        <div class="kt-widget14__header">
                            <hr class="new4">
                            <h3 style="font-weight: 400;" class="kt-widget14__title">

                                Discussions : Raise on Forum
                            </h3>

                            <br>
                            <p style="text-align: center; font-size: 15px;">Weekly discussion forum on curriculum
                                reforms was held on 12/10/2020</p>


                            <hr class="new4">
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>

</section>
<!-- Gallery Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h5>EVENTS AT NIE</h5>
                    <h2>RECENT EVENTS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                <div class="latest__blog__pic set-bg hover-div1" data-setbg="img/bakthi.jpg"></div>
            </div>
            <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                <div id="a" class="latest__blog__text">
                    <div id="b" class="label">Religious</div>
                    <h5>Bhakthi Gee Program at the Faculty of ELDM Meepe</h5>
                    <p><i class="fa fa-clock-o"></i> 19th March, 2020</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                <div class="latest__blog__pic set-bg hover-div1" data-setbg="img/educ.jpg"></div>
            </div>
            <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                <div class="latest__blog__text">
                    <div class="label">Diploma Awards</div>
                    <h5>Diploma Award Ceramony - NCOE at Temple Trees</h5>
                    <p><i class="fa fa-clock-o"></i> 20th August, 2019</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                <div class="latest__blog__pic latest__blog__pic__last__row set-bg hover-div1"
                     data-setbg="img/charity.jpg"></div>
            </div>
            <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                <div class="latest__blog__text">
                    <div class="label">Charity</div>
                    <h5>Almsgiving Ceremoney held by Transport Unit</h5>
                    <p><i class="fa fa-clock-o"></i> 01st January, 2020</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                <div class="latest__blog__pic latest__blog__pic__last__row set-bg hover-div1"
                     data-setbg="img/grad.jpg"></div>
            </div>
            <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                <div class="latest__blog__text">
                    <div class="label">Graduation</div>
                    <h5>Annual NIE Convocation 2019 at BMICH</h5>
                    <p><i class="fa fa-clock-o"></i> 29th March, 2020</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

<?php include "includes/footer.html"; ?>
