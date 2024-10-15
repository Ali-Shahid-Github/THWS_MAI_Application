<?php $this->extend('layouts/default');    ?>



<?php $this->section('headFiles')  ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="/assets/vendor/fontawesome-free-web/css/all.css" rel="stylesheet">
<link href="/assets/vendor/mdb/mdb.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />


<style>
    .view_more_btn {
        background-color: #ef6603;
        /* width: 30%; */
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .view_more_btn:hover {
        background-color: #be5001;
        /* width: 30%; */
    }
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>CS Home <?php $this->endSection();  ?>


<?php $this->section('content');  ?>
<!-- ======= Header ======= -->

<div id="portfolio-details" class="portfolio-details" style="padding: 10px 0;">
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <div class=" sliderImage" style=" background: url(/assets/images/img_5.jpg);"> </div>
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.5)">
                                <div class="d-flex justify-content-center align-items-center flex-column h-100">
                                    <h3 class="text-white mb-0">Department of Computer Science</h3>
                                    <a href="/#about" class="btn btn-primary Nbtn">About Us</a>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($dataSlider as $d) : ?>
                            <div class="swiper-slide">
                                <div class=" sliderImage" style="background: url(<?= site_url($d["SL_Image"]) ?>);"> </div>
                                <div class="mask" style="background-color: rgba(0, 0, 0, 0.5)">
                                    <div class="d-flex justify-content-center align-items-center flex-column h-100 col-8 text-center mx-auto">
                                        <h3 class="text-white mb-0"><?= $d["SL_Title"] ?></h3>
                                        <h5 class="text-white py-3  "><?= $d["SL_Desc"] ?></h5>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </div>
    <div>
        <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="zoom-out ">
            <h2 class="mx-5">Notice</h2>
        </div>
        <section id="testimonials" class="testimonials pt-2">
            <div class="container mx-auto">

                <div class="testimonials-slider1 swiper " data-aos="fade-up " data-aos-delay="100 " id="NoticeSlider">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide ">
                            <div class="testimonial-item  ">
                                <h3>MSc Admissions 2021</h3>
                                <br>
                                <br>

                                <p class="text-start pt-2 text-black"> The University invites applications for
                                    admissions to MSc. weekend or Morning programs.</p>
                                <button href="# " class="btn btn-outline-warning Nbtn ">View Details</button>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="testimonial-item  ">
                                <h3>Ph.D Admissions 2022 <span class="badge bg-danger">New</span> </h3>
                                <br>
                                <br>

                                <p class="text-start pt-2 text-black">Admissions in Ph.D programs are open for 2022.</p>
                                <button href="# " class="btn btn-outline-warning Nbtn ">View Details</button>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="testimonial-item  ">
                                <h3>Notice Title </h3>
                                <br>
                                <br>

                                <p class="text-start pt-2 text-black"> Some Text here Some Text here Some Text Here Some
                                    Text here Some Text here Some Text Here Some Text</p>
                                <button href="# " class="btn btn-outline-warning Nbtn ">View Details</button>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination p-0" id="nnsp"></div>
                </div>
            </div>
        </section>
    </div>
</div>

<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about" class="about ">
        <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="zoom-out ">
            <h2 class="mx-5">About</h2>
        </div>
        <div class="container ">
            <div class="container pt-4">
                <div class="mt-2" data-aos="fade-up ">
                    <div class=" show " id="tab-1 ">
                        <div class="row ">
                            <div class="col-md-12 col-12 order-2 order-lg-1 mt-lg-0 ">
                                <!-- <div class="section-title " data-aos="zoom-out ">
                                        <p>Chairman Message</p>
                                    </div> -->
                                <p class=" text-left text-justify p-0"> The Department of Computer Science is one of the
                                    most prominent and oldest centers of computer education in the country. Its history
                                    dates back to the year 1968 when UET Lahore established a Computer Center under the
                                    supervision of Department of Mathematics. The center was equipped with a
                                    contemporary IBM 1130 third generation batch processing system that was equipped
                                    with a disk and a monitor. The center was responsible for
                                    teaching of courses in Computer Science and Numerical Analysis, which formed an
                                    integral part of the curricula for all disciplines of B.Sc. Engineering degrees
                                    offered by UET.
                                    <br>
                                    <br> The center also offered short term computer courses for private and public
                                    sector organizations. A Bachelor degree program in computer science center was
                                    started in 1976. In 1978, the course was upgraded to
                                    MSc. Computer Science degree that makes the department the first center in the
                                    country to offer graduate program in computer science. The center became an
                                    independent department of Computer Science in 1991. The
                                    department holds an endowment chair given by His Majesty Sultan Qaboos Bin
                                    Said-Al-Said, Sultan of Oman.
                            </div>
                            <!-- <div class="col-md-4 order-2 order-lg-2 text-center Mflex d-md-flex d-none "> <img loading="lazy" src="/assets/images/csLogo.png" alt="chairperson" class="img-fluid w-75 "> </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row content " data-aos="fade-up ">
                <div class="col-lg-6 ">

                    <div class="section-title  " data-aos="zoom-out ">
                        <p>Vision</p>
                    </div>
                    <p class="text-justify"> To be an international partner in Computing education, research and
                        development Our graduates impacting the society as computing professionals Entrepreneurs
                        demonstrating professional integrity and leadership </p>


                    <!-- <p class="text-justify"> To be an international partner </p>
                        <ul>
                            <li><i class="fas fa-laptop-code"></i> Computing education, research and development</li>
                            <li><i class="fas fa-user-graduate"></i> Our graduates impacting the society as computing professionals</li>
                            <li><i class="ri-check-double-line "></i> Entrepreneurs demonstrating professional integrity and leadership</li>
                        </ul> -->
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 ">

                    <div class="section-title " data-aos="zoom-out ">
                        <p>Mission</p>
                    </div>
                    <p class="text-justify"> To impart high quality computing education to the students in order to
                        develop Criticall thinking, Analytical skills and abilities to solve real-world problems for the
                        technological and socio-economic development.</p>
                </div>
                <!-- <a href="# " class="btn-learn-more ">Learn More</a> -->
            </div>
        </div>
    </section>


    <!-- End About Section -->

    <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="zoom-out ">
        <div class="row text-center Stat">
            <div class="col-3">
                <p>500+</p>
                <h6>Current Students</h6>
            </div>
            <div class="col-3">
                <p>10+</p>
                <h6>PHD Prof.</h6>
            </div>
            <div class="col-3">
                <p>5</p>
                <h6>Labs</h6>
            </div>
            <div class="col-3">
                <p>400-500</p>
                <h6>QS Rankings</h6>
            </div>
        </div>
    </div>
    <br>
    <!-- ======= Features Section ======= -->
    <section id="features " class="features ">
        <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="zoom-out ">
            <h2 class="mx-5">Chairman Message</h2>
        </div>
        <div class="container ">
            <div class="mt-2" data-aos="fade-up ">
                <div class=" show " id="tab-1 ">
                    <div class="row ">
                        <div class="col-md-8 order-2 order-lg-1 mt-lg-0 ">
                            <!-- <div class="section-title " data-aos="zoom-out ">
                                    <p>Chairman Message</p>
                                </div> -->
                            <p class=" text-left text-justify p-3 p-md-0"> <i class="bx bxs-quote-alt-left quote-icon-left "></i> Established in 1991, the UET CS
                                department has demonstrated green leadership in computer science education. Whether it’s
                                practicing professionals or graduate and undergraduate
                                students, our department excels in designing cutting-edge, world-class educational
                                programs to address complex problems in a creative and productive manner. Our innovative
                                education and technical expertise have generated
                                dynamic collaborations. Our sole aim is to build a better future for our students.
                                <br>
                                <br> As the need for flexible, multidisciplinary, global education increase, our courses
                                combine both theoretical and research-based knowledge with practical hands-on
                                experience, as well as networking opportunities
                                with other peers in your field.
                                <br>
                                <br> Our faculty members provide considerable knowledge and technical expertise to
                                professionals who are eager to boost their context-specific knowledge or to develop new
                                areas of expertise. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <div class="section-title  d-md-block d-none" data-aos="zoom-out ">
                                <h2 class="text-dark">Prof. Dr. M. Shoaib</h2>
                            </div>
                        </div>
                        <div class="col-md-4 order-2 order-lg-2 text-center Mflex ">
                            <!-- <img loading="lazy" src="/assets/img/testimonials/testimonials-4.jpg" alt="chairperson" class="img-fluid w-responsive rounded-circle"> -->
                            <img loading="lazy" src="/assets/images/chairman.jpeg" alt="chairperson" class="img-fluid w-responsive rounded-circle">
                            <div class="section-title m-4 d-md-none d-block" data-aos="zoom-out ">
                                <h2 class="text-dark mb-3">Prof. Dr. M. Shoaib</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->
    <section id="events" class="eventsContainer ">
        <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="zoom-out ">
            <h2 class="mx-5">Events</h2>
        </div>
        <div class="container ">
       
            <div class="row">
                <div class="col-lg-4 d-lg-block d-none">
                    <div class=" eventsContainer-slider swiper " data-aos="fade-up " data-aos-delay="100 " id="EventsHomeSlider">
                        <div class="swiper-slide ">
                            <div class="eventsContainerSlider-item " style="border-radius: 5px;">
                                <div class="image sliderImage" style=" background: url(assets/images/events.jpg); height: 35vh;"> </div>
                                <!-- <img loading="lazy" src="" class="card-img-top"> -->
                                <h2 class="text-center pt-2 text-black">Explore More !!</h2>
                                <h3 class="text-center py-3">Feel Free to view more of them</h3>

                                <!-- <h3 class="text-center" style="min-height: 70px; max-height: 70px">Click here to view All Events</h3> -->
                                <a href="<?= site_url("Home/events") ?>" class="btn btn-success" style=" font-size: 18px;">Click Here <i class="px-2 fas fa-share-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <h4 class="d-lg-none d-block p-3 lh-1" style=" line-height: 1.5!important;">Explore More Events at
                        here!! <a href="<?= site_url("Home/events") ?>" class="btn btn-success">Click Here <i class="px-2 fas fa-share-square"></i></a></h4>
                    <div class="eventsContainer-slider swiper " data-aos="fade-up " data-aos-delay="100 " id="EventsHomeSlider">
                        <div class="swiper-wrapper ">

                            <?php foreach ($dataEvents as $d) : ?>
                                <div class="swiper-slide ">
                                    <div class="eventsContainerSlider-item ">
                                        <div class="image sliderImage" style=" background: url(<?= site_url($d['EV_Image']) ?>); height: 35vh;"> </div>
                                        <!-- <img loading="lazy" src="" class="card-img-top"> -->
                                        <h3 class="text-start text-black pt-1 text-truncate"><?= $d['EV_Title'] ?></h3>
                                        <p class="text-justify overflowWrapEllipses" style="min-height: 75px; max-height: 75px"><?= $d['EV_Desc'] ?></p>
                                        <div class="row">
                                            <div class="col-7 text-start float-start p-2">
                                                <h4><?= date_format(date_create($d['EV_Date']), "M jS, Y") ?></h4>
                                            </div>
                                            <div class="col-5 "> <a href="/Home/eventDetail/<?= $d['EV_Id'] ?>" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto" style="padding: 3px; text-transform: none; font-size: 14px;">Read
                                                    More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                        </div>

                        <div class="swiper-pagination " id="sbsp"></div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="features " class="features ">
        <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="fade-in">
            <h2 class="mx-5">Publications</h2>
        </div>
        <div class="container ">
            <div class="mt-2">
                <div class=" show " id="tab-1 ">
                    <div class="row pt-4">
                        <div class="col-md-7 order-2 order-lg-1 mt-lg-0  " data-aos="zoom-in" style="margin-bottom: -20px;">
                            <p class="text-center  p-md-0">
                                <br>
                                <span style=" font-weight:bold;  font-size:30px; text-transform:capitalize;">
                                    We are in throes of a transition where every publication has to think of their
                                    digital strategy
                                </span>
                                <br>
                                <span style="float: right; margin-right:30px;font-style: italic;">
                                    ~ Bill Gates</span>
                                <br>
                                <br>
                            <p class="text-justify">
                                Our teachers not only teach but write publications too. To succeed academically, one
                                must conduct research and publish it. Click on the button below to view publications by
                                our talented teachers.
                            </p>

                            <a href="<?= site_url('Home/research/#researchPublications') ?>" class="btn btn-info view_more_btn">View Publications</a>


                            <div class="section-title  d-md-block d-none text-center" data-aos="zoom-out ">

                            </div>
                        </div>

                        <div class="col-md-5 order-1 order-lg-2 p-3" data-aos="fade-left">
                            <div class=" sliderImage my-2 rounded-2" style=" background: url(assets/images/pub.jpg); height: 60vh; border: 1px solid #d1d5da; ">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stdProjects" class="eventsContainer ">
        <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="zoom-out ">
            <h2 class="mx-5">Student Projects</h2>
        </div>

        <div class="container ">
            <div class="mt-2" data-aos="fade-up ">
                <div class=" show ">
                    <div class="row pt-4">
                        <div class="col-md-5 order-2 order-lg-1 mt-lg-0" style="margin-bottom: -20px;" data-aos="fade-right">
                            <div class=" sliderImage my-3 rounded-2" style=" background: url(assets/images/projects.jpg); height: 50vh; border: 1px solid #d1d5da;">
                            </div>

                        </div>
                        <div class="col-md-7 order-2 order-lg-2 p-3" data-aos="zoom-in">
                            <div>
                                <p class=" text-center p-3 p-md-0">

                                    <span style="font-weight:bold; font-size:30px; text-transform:capitalize;">
                                        Talk is cheap, Show me the Code</span>
                                    <br>
                                    <span style="float: right; margin-right:30px;font-style: italic;">~Father of Linux
                                        Kernel</span>
                                    <br>


                                <p class="text-justify"> Every Semester Students are assigned to undertake a project. We
                                    highly encourage students to implement practically what they had learned in theory
                                    and open doors to add more items in their bag of skills. We want
                                    to provide students with visions of the future.
                                </p>
                                <br>
                                <a type="button" class="btn btn-warning view_more_btn float-start" href="<?= site_url("Home/studentsTermProjects") ?>">View
                                    Projects</a>
                                <br>
                                <!-- <button class="btn btn-outline-warning" >Text</button> -->
                                <div class="section-title  d-md-block d-none text-center" data-aos="zoom-out">

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blogs" class="eventsContainer ">
        <div class="section-title " style="background-color: #222538; padding: 20px; padding-top: 28px;" data-aos="zoom-out ">
            <h2 class="mx-5">Students Blogs</h2>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 d-lg-block d-none">
                    <div class="eventsContainer-slider swiper " data-aos="fade-up " data-aos-delay="100 " id="EventsHomeSlider">
                        <div class="swiper-slide ">
                            <div class="eventsContainerSlider-item " style="border-radius: 5px;">
                                <div class="image sliderImage" style=" background: url(assets/images/blog3.jpg); height: 35vh;"> </div>
                                <!-- <img loading="lazy" src="" class="card-img-top"> -->
                                <h2 class="text-center pt-2 text-black">More Blogs 🖥️</h2>
                                <h3 class="text-center py-3">Don't forget to see them </h3>

                                <!-- <h3 class="text-center" style="min-height: 70px; max-height: 70px">Click here to view All Events</h3> -->
                                <a href="<?= site_url("Home/blogs") ?>" class="btn btn-success my-2" style=" font-size: 18px;">Click Here <i class="px-2 fas fa-share-square"></i></a>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <h4 class="d-lg-none d-block p-3 lh-1" style=" line-height: 1.5!important;">
                        Explore More Blogs at here!!
                        <a href="<?= site_url("Home/blogs") ?>" class="btn btn-success">Click Here <i class="px-2 fas fa-share-square"></i></a>
                    </h4>
                    <div class="eventsContainer-slider swiper " data-aos="fade-up " data-aos-delay="100 " id="BlogHomeSlider">
                        <div class="swiper-wrapper ">
                            <?php foreach ($dataBlog as $d) : ?>
                                <div class="swiper-slide ">
                                    <div class="eventsContainerSlider-item ">
                                        <div class="image sliderImage" style=" background: url(<?= site_url($d['BL_Thumbnail']) ?>); height: 35vh;">
                                        </div>
                                        <!-- <img loading="lazy" src="" class="card-img-top"> -->
                                        <h2 class="text-center text-black pt-1 text-truncate"><?= $d['BL_Title'] ?></h2>
                                        <p class="text-justify overflowWrapEllipses" style="min-height: 75px; max-height: 75px"><?= $d['BL_Description'] ?></p>
                                        <div class="d-flex flex-row justify-content-between align-items-center ">
                                            <h3 class="text-black font-weight-bold"><?= $d['BLC_Title'] ?></h3>
                                            <h3> <a href="/Home/showBlog/<?= $d['BL_Id'] ?>"> Read More</a> </h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination " id="sbsp"></div>
						
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php $this->endSection();  ?>



<?php $this->section('footerScripts')  ?>

<script async src="/assets/vendor/aos/aos.js "></script>
<script async src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
<script async src="/assets/vendor/glightbox/js/glightbox.min.js "></script>
<script async src="/assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js "></script>
<script async src="/assets/vendor/php-email-form/validate.js "></script>
<script async src="/assets/vendor/mdb/mdb.min.js "></script>
<script src="/assets/js/swiper.js "></script>

<script>
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        })
    });
</script>
<?php $this->endSection();  ?>