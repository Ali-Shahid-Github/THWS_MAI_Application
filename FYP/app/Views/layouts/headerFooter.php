<?php $this->section('header');  ?>


<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-around fixed-top">
        <div class="logo">
            <!-- <h1><a href="index.html">Selecao</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/"> <img loading="lazy" src="/assets/images/csLogo.png" alt="csLogo" class="img-fluid NavbarImage"> </a>
        </div>
        <nav id="navbar" class="navbar mt-2 ">
            <ul>
                <li><a class="nav-link scrollto " href="<?= site_url("Home/alumni") ?>">Alumni</a></li>
                <li><a class="nav-link scrollto" href="/#about">About</a></li>
                <li><a class="nav-link scrollto" href="/#events">Events</a></li>
                <li><a class="nav-link scrollto" href="/#blogs">Blogs</a></li>
                <li class="dropdown"><a href="/#stdProjects"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= site_url("Home/studentsTermProjects") ?>">Term Project</a></li>
                        <li><a href="<?= site_url("Home/fyp") ?>">FYP</a></li>
                        <!-- <li><a href="#">Thesis</a></li> -->
                    </ul>
                </li>
                <li class="dropdown"><a href="#portfolio"><span>Department</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= site_url("Home/research") ?>">Research</a></li>
                        <li><a href="<?= site_url("Home/faculty") ?>">Faculty</a></li>
                        <li><a href="#">Job Vacancies</a></li>
                        <li><a href="<?= site_url("Home/academics") ?>">Academics</a></li>
                        <li><a href="<?= site_url("Home/policies") ?>">PLOs & Policies</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href=" <?= site_url("/Home/login") ?> "> <?= getUserName() ? getUserName() : 'Login' ?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <a href="//uet.edu.pk" target="_blank"> <img loading="lazy" src="/assets/images/uetLogo.png" alt="csLogo" class="img-fluid NavbarImage"> </a>
    </div>
</header>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php $this->endSection();  ?>


<?php $this->section('footer');  ?>

<div class="container-fluid footter" data-aos="fade-up " data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 lh-lg pt-5">
                <h5>Department Of Computer Science</h5>
                <div style="font-size: 18px;">
                    <li><i class="fas fa-phone-alt"></i> +92 (042) 9902-9260</li>
                    <li><i class="fas fa-envelope"></i> info@csuet.com</li>
                    <li><i class="fas fa-location-arrow"></i> G. T. Road, Staff Houses Engineering University Lahore, Lahore, Punjab 39161</li>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.9678697331105!2d74.35412961445502!3d31.579928951359815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191b273d6ed0c1%3A0x4dcac84ea2200944!2sUniversity%20of%20Engineering%20and%20Technology%2C%20Lahore!5e0!3m2!1sen!2s!4v1642182587278!5m2!1sen!2s" width="90%" style="border:0; border-radius: 5px; margin-top: 10px;" allowfullscreen="" ></iframe>

            </div>
            <div id="ImpLinks" class="col-md-4 col-12 lh-lg d-block pt-5" style="font-size: 18px;">

                <h5>Important Links</h5>
                <a href="<?= site_url("Home/academics") ?>">
                    <li>Academics </li>
                </a>
                <a href="/#blogs">
                    <li>Blogs</li>
                </a>
                <a href="/#events">
                    <li>Events</li>
                </a>
                <a href="<?= site_url("Home/faculty") ?>">
                    <li>Faculty</li>
                </a>
                <a href="<?= site_url("Home/research") ?>">
                    <li>Research</li>
                </a>
                <a href="<?= site_url("Home/fyp") ?>">
                    <li>FYP</li>
                </a>
                <a href="/#stdProjects">
                    <li>Students Projects</li>
                </a>
                <a href="<?= site_url("Home/policies") ?>">
                    <li>Rules and Policies</li>
                </a>
                <a href="">
                    <li>Jobs Vacancies </li>
                </a>
            </div>
            <div class="col-md-4 col-12 lh-lg pt-5">
                <h5>Catch Us On</h5>
                <div style="font-size: 18px;">
                    <li><i class="fab fa-facebook-f"></i>  <a href=""> facebook.com/csuet.com</a></li>
                    <li><i class="fab fa-linkedin-in"></i> <a href=""> info@csuet.com </a> </li>
                    <li><i class="fab fa-instagram"></i> <a href=""> instagram/csuet.com </a> </li>
                    <li><i class="fab fa-youtube"></i> <a href=""> youtube/csuet.com </a> </li>

                </div>
            </div>
        </div>
    </div>


</div>

<?php $this->endSection();  ?>