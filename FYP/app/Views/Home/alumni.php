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
Alumni
<?php $this->endSection();  ?>



<?php $this->section('styles')  ?>
<style>
    .member:hover {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        overflow: hidden;
    }

    .member {
        border: 1px solid #d1d5da;
        border-radius: 0.5rem !important;
    }

    .member-info {
        border-top: 1px solid #d1d5da;
    }

    .member-info span {
        display: inline !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        color: #2d2e33 !important;
        font-family: 'Roboto';
    }

    .alumniDetail {
        padding: 20px 15px 0px 15px;
        border-top: 1px solid #d1d5da;
    }

    .table-striped>tbody>tr:nth-child(2n+1)>td,
    .table-striped>tbody>tr:nth-child(2n+1)>th {
        background-color: #788fff !important;
        font-weight: bold;
    }
  
    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    }
    .table {
    margin-bottom: 20px;
    width: 100%;
    font-family: 'roboto';
    font-size: 18px;
}
.text-right {
    text-align: right;
}
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<section id="team" class="team">
    <div data-aos="zoom-out" class="section-title " style="background-color: #2a2c39; padding: 20px; padding-top: 28px;">
        <!-- <h2 class="mx-5">About</h2> -->
        <p style="color: white;margin-left: 20px;">Alumni</p>
        <h5 style="color: white;"></h5>
    </div>

    <section id="features " class="features ">
        <div class="container ">
            <div class="row pt-1">
                <div class="col-md-7 order-2 order-lg-1 mt-lg-0 " data-aos="zoom-in">


                    <h5 class="text-justify my-5" style="font-family: 'Roboto'; word-spacing: 15px;">
                        The UET CS alumni network consists of over a thousands of Computer Scientists around the world.
                        We are very proud of this growing alumni community that epitomizes the UET spirit.
                        Our goal is to strengthen your ties to your alma mater and provide you with opportunities that
                        enhance your professional and personal lives.
                        Meet Proud Members below.
                    </h5>
                    <div class="text-center">
                        <a type="button" class="btn btn-info view_more_btn p-3" href="<?= site_url('Home/addAlumni') ?>">Register Alumni</a>
                    </div>

                </div>

                <div class="col-md-5 order-2 order-lg-2 px-4" data-aos="fade-left">
                    <div class=" sliderImage my-2 rounded-2 " style=" background: url(/assets/images/Alumni_1.jpg); height: 50vh; border: 1px solid #d1d5da; ">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container">

        <div class="row">
            <hr>
            <h6 class="text-muted">Our Alumni</h6>
            <?php if (count($data) > 0) : ?>

                <?php foreach ($data as $d) : ?>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img loading="lazy" src="<?= site_url($d['AL_Photo'])  ?>" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="tel:<?= $d['AL_WhatsApp'] ?>"><i class="bi bi-whatsapp"></i></a>
                                    <a href="<?= $d['AL_FB'] ?>"><i class="bi bi-facebook"></i></a>
                                    <a href="mailto:<?= $d['AL_Email'] ?>"><i class="fas fa-envelope"></i></a>
                                    <a href="<?= $d['AL_LinkedIn'] ?>"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="alumniDetail">
                                <h4> <strong><?= $d['AL_Name'] ?></strong></h4>
                                <hr>
                                <h5 class="py-1" style="font-family: 'Roboto';"><?= $d['AL_RegNo'] ?></h5>
                                <span><?= $d['AL_Session'] ?></span>
                                <hr>
                                <div class="d-flex flex-row justify-content-between align-items-center">

                                    <p class="text-truncate "><?= $d['AL_Company'] ?></p>
                                    <p class="note-inner-content text-truncate text-muted "> <?= $d['AL_Desgnation'] ?> </p>


                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <h1 id="noFound" class="d-none text-center">No Alumni Found</h1>

            <?php else : ?>
                <h1 class="text-center">No Alumni Found</h1>

            <?php endif; ?>

        </div>

    </div>
</section>

<?php $this->endSection();  ?>






<?php $this->section('footerScripts')  ?>

<script src="/assets/vendor/aos/aos.js "></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>


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