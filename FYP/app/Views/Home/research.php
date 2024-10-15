<?php $this->extend('layouts/default');    ?>


<?php $this->section('headFiles')  ?>


<link href="/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />


<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Research
<?php $this->endSection();  ?>



<?php $this->section('styles')  ?>


<style>
    body,
    html {
        height: 100%;
        font-family: "Open Sans", sans-serif;
    }

    .bg {
        background-image: url("https://images.unsplash.com/photo-1578496479763-c21c718af028?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cmVzZWFyY2glMjBsYWJzJTIwY29tcHV0ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60");
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .titleLink{
        color: black;
    }
    .titleLink:hover{
        color: #fc8129;
        text-decoration: underline;
    }
    .text-on-image {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        font-weight: bold;
    }

    .ml4 {
        /* position: relative; */
        font-weight: 900;
        font-size: 2.5rem;
    }

    @media (min-width: 768px) {
        .ml4 {
            /* position: relative; */
            font-weight: 900;
            font-size: 4.5rem;
        }
    }

    .ml4 .letters {
        /* position: absolute; */
        /* margin: auto; */
        /* left: 0;
            top: 0.3em;
            right: 0; */
        opacity: 0;
    }

    .aim {
        font-weight: bold;
        font-style: bold;
        font-size: 1.5rem;
        line-height: 1;
        text-align: justify;
        margin-left: 20px;
        margin-right: 20px;
    }

    .container_aim {
        background-color: rgb(228, 228, 228);
        padding: 30px;
        height: 40%;
    }

    .card-title {
        text-align: center;
    }

    .leaderCard {
        border-radius: 2% !important;
        box-shadow: 1px 2px 8px rgb(180, 180, 180) !important;
    }

    .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fc8129;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
    }

    .social-link:hover,
    .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #d35902;
    }

    #eventSingle .col .item {
        box-shadow: none;
    }

    .accordion-header:hover {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%);
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .accordion-button:not(.collapsed) {
        color: #1266f1;
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        border-radius: 0.5rem !important;
        overflow: hidden;
    }

    .accordion-body {
        border: 1px solid #d1d5da;
    }
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<div>
    <div class="bg">
        <div class="text-on-image">
            <h1 class="ml4 text-uppercase">
                <span class="letters letters-1"><i class="bx bxs-quote-alt-left quote-icon-left "></i>No <span style="color: #fc8129;">research</span> without action</span>
                <span class="letters letters-2">no action without <span style="color: #fc8129;">research</span> <i class="bx bxs-quote-alt-right quote-icon-right"></i></span>
                <!-- <span class="letters letters-3">Go!</span> -->
            </h1>
        </div>
    </div>
    <br>
    <!-- Research Labs -->
    <section id="features " class="features ">
        <div class="section-title " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
            <p id="phase_text" style="color: white;text-align: center;">Research Labs</p>
        </div>
        <br>
        <div class="container ">
            <div class="my-2">

                <div class="container ">
                    <div class="mt-2" data-aos="fade-up ">
                        <div class=" show ">
                            <div class="row pt-4">
                                <div class="col-md-5 order-2 order-lg-1 mt-lg-0" style="margin-bottom: 20px;" data-aos="fade-right">
                                    <div class=" sliderImage my-3 rounded-2" style=" background: url(https://media.istockphoto.com/photos/online-doctor-telemedicine-future-technology-trend-patient-consult-picture-id1296963883); height: 40vh; border: 1px solid #d1d5da;">
                                    </div>
                                </div>

                                <div class="col-md-7 order-2 order-lg-2 p-3" data-aos="zoom-in">
                                    <div>
                                        <p class="pt-md-3">
                                        <p class="text-justify  pt-md-4 pt-2 ">
                                            <span class="text-uppercase" style="font-weight: bold; color: #fc8129;">
                                                Artificial
                                                intelligence</span> research lab (AIRL) is affiliated with Alkhawarizmi
                                            Institute of Computer Science (KICS), UET Lahore. Al-Khwarizmi Institute of
                                            Computer
                                            Science (KICS) was established in August 2002 at University of Engineering
                                            and Technology for research in latest technological advancements.
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="container">
                    <div class="" data-aos="fade-up ">
                        <div class=" ">
                            <div class="row">
                                <div class="col-md-7 order-1 order-lg-1 p-3" data-aos="fade-right">
                                    <div>
                                        <p class="pt-md-0">
                                        <p class="text-justify  pt-md-4 pt-2">
                                            The <span class="text-uppercase" style="font-weight: bold; color: #fc8129;">Bioinformatics
                                                Laboratory</span> research lab (AIRL) is affiliated with Alkhawarizmi
                                            Institute of Computer Science (KICS), UET Lahore. Al-Khwarizmi Institute of
                                            Computer Science (KICS) was established in August 2002
                                            at University of Engineering and Technology for research in latest
                                            technological advancements.
                                        </p>
                                    </div>

                                </div>

                                <div class="col-md-5 order-1 order-lg-2 mt-lg-0" style="margin-bottom: 20px;" data-aos="zoom-in">
                                    <div class=" sliderImage my-3 rounded-2" style=" background: url(https://media.istockphoto.com/photos/chip-picture-id182147380); height: 40vh; border: 1px solid #d1d5da;">
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="container ">
                    <div class="mt-2" data-aos="fade-up ">
                        <div class=" show ">
                            <div class="row pt-4">
                                <div class="col-md-5 order-2 order-lg-1 mt-lg-0" style="margin-bottom: 20px;" data-aos="fade-right">
                                    <div class=" sliderImage my-3 rounded-2" style=" background: url(https://media.istockphoto.com/photos/online-doctor-telemedicine-future-technology-trend-patient-consult-picture-id1296963883); height: 40vh; border: 1px solid #d1d5da;">
                                    </div>
                                </div>

                                <div class="col-md-7 order-2 order-lg-2 p-3" data-aos="zoom-in">
                                    <div>
                                        <p class="pt-md-3">
                                        <p class="text-justify  pt-md-4 pt-2 ">
                                            <span class="text-uppercase" style="font-weight: bold; color: #fc8129;">
                                                Computer Vision Machine Learning</span> research lab (AIRL) is
                                            affiliated with Alkhawarizmi Institute of Computer Science (KICS),
                                            UET Lahore. Al-Khwarizmi Institute of Computer Science (KICS) was
                                            established in August<br> 2002 at University of Engineering and Technology
                                            for research in latest technological advancements.
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="container">
                    <div class="mt-2" data-aos="fade-up ">
                        <div class=" show ">
                            <div class="row pt-4">
                                <div class="col-md-7 order-1 order-lg-1 p-3" data-aos="fade-right">
                                    <div>
                                        <p class="pt-md-3">
                                        <p class="text-justify  pt-md-4 pt-2 ">
                                            The <span class="text-uppercase" style="font-weight: bold; color: #fc8129;">Data Science Lab</span>
                                            research lab (AIRL) is affiliated with Alkhawarizmi Institute of Computer
                                            Science (KICS), UET Lahore. Al-Khwarizmi
                                            Institute of Computer Science (KICS) was established in August 2002 at
                                            University of Engineering and Technology for research in latest
                                            technological advancements.
                                        </p>
                                    </div>

                                </div>

                                <div class="col-md-5 order-1 order-lg-2 mt-lg-0" style="margin-bottom: 20px;" data-aos="zoom-in">
                                    <div class=" sliderImage my-3 rounded-2" style=" background: url(https://media.istockphoto.com/photos/chip-picture-id182147380); height: 40vh; border: 1px solid #d1d5da;">
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Research Labs End -->
    <br>
    <div class="container_aim mt-6 text-center">
        <br><br>
        <span class=" mt-3 text-center">
            <span class=" fw-bold" style="font-size: 1.8rem;">WHAT WE DO</span><br> What we do sit amet consectetur
            adipisicing elit. Nam amet molestias doloribus reiciendis voluptatum deleniti est dolore, architecto libero,
            voluptatem, illo fugit
            sapiente minima quam magnam quibusdam rerum porro cumque. Lorem ipsum dolor sit amet consectetur adipisicing
            elit. </span>

    </div>
    <br>
    <hr>
    <div class="leadership mt-4">
        <div class="section-title " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
            <p id="phase_text" style="color: white;text-align: center;">Leadership</p>
        </div>
        <div class="container mt-4">

            <div class="row text-center justify-content-around mx-2">
                <div class="col-md-3 my-2 ">
                    <div class="bg-white rounded leaderCard py-5 px-4"><img loading="lazy" src="/assets/images/chairman.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Prof. Dr. Shoaib</h5><span class="small text-uppercase text-muted">Director</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-map-marker-alt" title="CS LT-1"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-envelope" title="email@email.com"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-home" title="92 42 111222"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 my-2 ">
                    <div class="bg-white rounded leaderCard py-5 px-2"><img loading="lazy" src="/assets/img/team/team-3.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Prof. Dr. M. Usman Ghani</h5><span class="small text-uppercase text-muted">Scientific
                            Advisor</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-map-marker-alt" title="CS LT-1"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-envelope" title="email@email.com"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-home" title="92 42 111222"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 my-2 ">
                    <div class="bg-white rounded leaderCard py-5 px-4"><img loading="lazy" src="/assets/img/testimonials/testimonials-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Dr. Awais Hassan</h5><span class="small text-uppercase text-muted">Director</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-map-marker-alt" title="CS LT-1"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-envelope" title="email@email.com"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fas fa-home" title="92 42 111222"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects ">
        <div class=" mt-4">
            <div class="publications" id="researchPublications">
                <div class="section-title " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
                    <p id="phase_text lh-1" style="color: white;text-align: center;">Publications</p>
                </div>

                <div class="container pt-3">

                    <div class="btn-group " role="group">
                        <select id='type' class="form-select btn-success ">
                            <option selected>All</option>
                            <option>IHCI</option>
                            <option value="AI/ML">AI/ML</option>
                            <option value="IoT">IoT</option>
                            <option value="Information Systems">Information Systems</option>
                            <option value="Health">Health</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Networking">Networking</option>
                            <option value="Signal Processing">Signal Processing</option>
                            <option value="Computer Vision">Computer Vision</option>
                            <option value="Database">Database</option>
                        </select>

                    </div>

                    <div class="btn-group " role="group">
                        <select id='year' class="form-select btn-success " data-bs-toggle="dropdown" aria-expanded="false" aria-label="Default select example">

                            <option value="All" selected>All</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>

                        </select>

                    </div>

                    <div class="my-2">
                        <?php if (count($data) > 0) : ?>
                            <div class="row row-cols-1 lightBorder">
                                <div class="col-md-12 mx-auto">
                                    <div class="accordion accordion-flush" id="researchAccordian">
                                        <?php foreach ($data as $d) : ?>
                                            <div class="accordion-item" type="<?= $d['RS_Category'] ?>" year="<?= $d['RS_Year'] ?>">
                                                <h2 class="accordion-header" id="flush-heading<?= $d['RS_Id'] ?>">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $d['RS_Id'] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $d['RS_Id'] ?>">
                                                    <a class="titleLink" target="_blank" href="https://dx.doi.org/<?= $d['RS_DOI'] ?>"><h4><?= $d['RS_Title'] ?></h4></a>
                                                    </button>
                                                </h2>


                                                <div id="flush-collapse<?= $d['RS_Id'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $d['RS_Id'] ?>" data-bs-parent="#researchAccordian">

                                                    <div class="accordion-body my-2">
                                                        <h6> <b>Year:</b> <?= $d['RS_Year'] ?> | Category: <?= $d['RS_Category'] ?> </h6>

                                                        <h6> <b>Authors:</b></h6>
                                                        <ul class="mb-0">
                                                            <?php

                                                            $a = explode(',', $d['RS_Authors']);

                                                            foreach ($a as $b) {
                                                                echo '<li>' . $b . '</li>';
                                                            } ?>
                                                        </ul>
                                                        <hr>
                                                        <p> <strong>Description:</strong> <br><?= $d['RS_Desc'] ?></p>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="container text-center py-2">
                                <h4> There is no Research work available</h4>
                            </div>

                        <?php endif; ?>
                        <h3 id="noFound" class="d-none text-center">No Research Found</h3>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->endSection();  ?>






<?php $this->section('footerScripts')  ?>

<script src="/assets/vendor/aos/aos.js "></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>


<script>
    window.addEventListener('load', () => {
        AOS.init({
            duration: 600,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        })
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    var ml4 = {};
    ml4.opacityIn = [0, 1];
    ml4.scaleIn = [0.2, 1];
    ml4.scaleOut = 3;
    ml4.durationIn = 2000;
    ml4.durationOut = 2000;
    ml4.delay = 500;

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml4 .letters-1',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-1',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-2',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-2',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4 .letters-3',
            opacity: ml4.opacityIn,
            scale: ml4.scaleIn,
            duration: ml4.durationIn
        }).add({
            targets: '.ml4 .letters-3',
            opacity: 0,
            scale: ml4.scaleOut,
            duration: ml4.durationOut,
            easing: "easeInExpo",
            delay: ml4.delay
        }).add({
            targets: '.ml4',
            opacity: 0,
            duration: 500,
            delay: 500
        });
</script>

<script>
        // console.log[0].);

        selectType = document.querySelector("#type");
        selectYearType = document.querySelector("#year");
        items = document.querySelectorAll(".accordion-item");
        // var c = 0;
        updataData = () => {
            var c = 0;
            items.forEach(element => {
                if (selectType.value == 'All') {
                    element.classList.remove('d-none');
                    c = 0
                } else if (element.getAttributeNode("type").value == selectType.value) {
                    element.classList.remove('d-none');

                } else {
                    element.classList.add('d-none');
                    c++;
                }
            });

            if (c == items.length) {
                document.getElementById("noFound").classList.remove('d-none');
            } else
                document.getElementById("noFound").classList.add('d-none');

        }


        updataDataYear = () => {
            c = 0;
            items.forEach(element => {
                if (selectYearType.value == 'All') {
                    element.classList.remove('d-none');
                } else if (element.getAttributeNode("year").value == selectYearType.value) {
                    element.classList.remove('d-none');
                } else {
                    element.classList.add('d-none');
                    c++;
                }

            });

            if (c == items.length) {
                document.getElementById("noFound").classList.remove('d-none');
            } else
                document.getElementById("noFound").classList.add('d-none');

        }


        selectType.addEventListener('change', updataData)
        selectYearType.addEventListener('change', updataDataYear)
            // element.onclick = updataData(element.value);
    </script>
<?php $this->endSection();  ?>