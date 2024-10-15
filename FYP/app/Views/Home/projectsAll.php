<?php $this->extend('layouts/default');    ?>


<?php $this->section('headFiles')  ?>

<meta content="UET Computer Science Department" name="description">
<meta content="UET CS " name="keywords">
<link href="/assets/images/csLogo.png" rel="icon">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="/assets/vendor/fontawesome-free-web/css/all.css" rel="stylesheet">
<link href="/assets/vendor/mdb/mdb.min.css" rel="stylesheet">
<link href="/assets/vendor/slick/slick.css" rel="stylesheet">
<link href="/assets/vendor/slick/slick-theme.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Projects
<?php $this->endSection();  ?>



<?php $this->section('styles')  ?>


<style>
    #eventSingle .col .item {
        box-shadow: none;
    }

    #eventSingle .col .item:hover {
        transition: all 0.4s;
        box-shadow: 0px 2px 12px rgb(0 0 0 / 40%);
    }
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;">Students Projects</p>
            <h5 style="color: white;">Glance out the coding projects of our students done as themselves or semester projects</h5>
        </div>
        <div class="container pt-3">

            <div class="btn-group " role="group">
                <select id='types' class="form-select btn-success ">
                    <option selected>All </option>
                    <option>AI/ML</option>
                    <option>Web Dev</option>
                    <option>Mobile Dev</option>
                    <option>UI/UX</option>
                    <option>IHCI</option>
                    <option>Software Eng.</option>
                    <option>Programming</option>

                </select>

            </div>
            <div class="btn-group " role="group">
                <select id='LangTypes' class="form-select btn-success ">
                    <option selected>Language </option>
                    <option>C++</option>
                    <option>C-C++</option>
                    <option>C#</option>
                    <option>Python</option>
                    <option>Javascript</option>
                    <option>Dart</option>
                    <option>Java</option>

                </select>

            </div>

            <div class="btn-group " role="group">
                <select id='year' class="form-select btn-success " data-bs-toggle="dropdown" aria-expanded="false" aria-label="Default select example">
                    <option selected>Year </option>
                    <option value="1">2022</option>
                    <option value="2">2021</option>
                    <option value="3">2020</option>
                    <option value="3">2019</option>
                    <option value="3">2018</option>

                </select>

            </div>

            <?php if (count($data) > 0) : ?>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mainContent" id="eventSingle">

                    <?php foreach ($data as $d) : ?>

                        <div class="col" type="<?= $d['TP_Domain'] ?>" language="<?= $d['TP_Lang'] ?>" >
                            <div class="item ">
                                <div style="max-height: 40px;" class="overflowWrapEllipsesOneLine">
                                    <a href="/project/<?= $d['TP_Id'] ?> " style="color:black">
                                        <h2> <?= $d['TP_Title'] ?> </h2>
                                    </a>
                                </div>
                                <h5 class="text-muted"><?= $d['TPC_Title'] ?></h5>
                                <hr>
                                <h3 class="text-start "> <?= $d['TP_Domain'] ?></h3>
                                <div style="min-height: 75px; max-height: 75px" class="overflowWrapEllipses pb-2">
                                    <p class="text-justify "> <?= $d['TP_Desc'] ?></p>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col-4 text-start "> <span style="color: black; font-size: 17px; font-weight: 600;"> <?= $d['TP_Lang'] ?></span> </div>
                                    <div class="col-8 text-end " style="font-size: 18px">
                                        <a href="//<?= $d['TP_Youtube'] ?>" class=" px-3">
                                            <i class="fab fa-youtube " style="color: red;"></i>
                                        </a>
                                        <a href="//<?= $d['TP_Github'] ?>" >
                                            <i class="fab fa-github " style="color: black;"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>

                    <?php endforeach; ?>

                </div>
                <h1 id="noFound" class="d-none text-center">No Projects Found</h1>

            <?php else : ?>
                <h1 class="text-center">No Projects Found</h1>

            <?php endif; ?>


        </div>


        <div class="section-title mt-4" style="background-color: #2a2c39; padding: 20px; padding-top: 16px;">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;">Recent Projects</p>
        </div>
        <div class="container pt-3">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" id="eventSingle">



                <div class="col">
                    <div class="item ">

                        <div style="max-height: 40px;" class="overflowWrapEllipsesOneLine">
                            <h2>Bracket Analyzer </h2>
                        </div>
                        <hr>
                        <h3 class="text-start ">Console</h3>
                        <div style="max-height: 75px; " class="overflowWrapEllipses pb-2">
                            <p class="text-justify ">Some Text is here some text is here Some Text is here some text is here Some Text is here some text is here Some Text is here some text is here Some Text is here some text is here </p>
                        </div>
                        <hr>
                        <div class="row ">
                            <div class="col-6 text-start "> <span style="color: black; font-size: 20px; font-weight: 600;">C++</span> </div>
                            <div class="col-6 text-end " style="font-size: 20px">
                                <a href="# " class="animate__animated animate__fadeInUp scrollto px-4">
                                    <i class="fab fa-youtube " style="color: red;"></i>
                                </a>
                                <a href="# " class="animate__animated animate__fadeInUp scrollto ">
                                    <i class="fab fa-github " style="color: black;"></i>
                                </a>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col">
                    <div class="item ">

                        <div style="max-height: 40px;" class="overflowWrapEllipsesOneLine">
                            <h2>Bracket Analyzer </h2>
                        </div>
                        <hr>
                        <h3 class="text-start ">Category</h3>
                        <div style="max-height: 75px; " class="overflowWrapEllipses pb-2">
                            <p class="text-justify ">Some Text is here some text is here Some Text is here some text is here Some Text is here some text is here Some Text is here some text is here Some Text is here some text is here </p>
                        </div>
                        <hr>
                        <div class="row ">
                            <div class="col-6 text-start "> <span style="color: black; font-size: 20px; font-weight: 600;">Language</span> </div>
                            <div class="col-6 text-end " style="font-size: 20px">
                                <a href="# " class="animate__animated animate__fadeInUp scrollto px-4">
                                    <i class="fab fa-youtube " style="color: red;"></i>
                                </a>
                                <a href="# " class="animate__animated animate__fadeInUp scrollto ">
                                    <i class="fab fa-github " style="color: black;"></i>
                                </a>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
            <h1 id="noFound" class="d-none text-center">No Blogs Found</h1>



        </div>

    </section>

</main>
<?php $this->endSection();  ?>


<?php $this->section('footerScripts')  ?>

<script src="/assets/vendor/aos/aos.js "></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>


<script >
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        })
    });
</script>


<script>
    // console.log[0].);

    selectType = document.querySelector("#types");
    selectLangType = document.querySelector("#LangTypes");
    cols = document.querySelectorAll(".mainContent .col");
    // var c = 0;
    console.log(cols.length);
    updataData = () => {
        var c = 0;
        cols.forEach(element => {
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

        if (c == cols.length) {
            document.getElementById("noFound").classList.remove('d-none');
        } else
            document.getElementById("noFound").classList.add('d-none');

    }


    updataDataLang = () => {
        c = 0;
        cols.forEach(element => {
            if (selectLangType.value == 'Language') {
                element.classList.remove('d-none');
                c = 0
            } else if (element.getAttributeNode("language").value == selectLangType.value) {
                element.classList.remove('d-none');
            } else {
                element.classList.add('d-none');
                c++;
            }

        });

        if (c == cols.length) {
            document.getElementById("noFound").classList.remove('d-none');
        } else
            document.getElementById("noFound").classList.add('d-none');

    }


    selectType.addEventListener('change', updataData)
    selectLangType.addEventListener('change', updataDataLang)
    // element.onclick = updataData(element.value);
</script>


<?php $this->endSection();  ?>