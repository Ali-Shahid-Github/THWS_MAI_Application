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
<?= $data['TP_Title'] ?>
<?php $this->endSection();  ?>



<?php $this->section('styles')  ?>
<style>
    .left {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        overflow: hidden;
        border-radius: 10px;
        background-color: #2a2c39;
        color: white;
        padding: 10px 20px;
    }

    .right {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        border-radius: 10px;
        border-color: #2a2c39;
    }
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-center text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;" data-aos="fade-in ">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;"><?= $data['TP_Title'] ?></p>
            <h4><?= $data['St_Name'] ?></h4>
            <div class="text-center " style="font-size: 26px;">

                <a href="//<?= $data['TP_Youtube']; ?> "> <i class="fab fa-youtube " style="color: red;"> </i> </a>
                &nbsp;
                <a href="//<?= $data['TP_Github'] ?>"> <i class="fab fa-github  " style="color: white;"></i> </a>

            </div>
        </div>
       

        <div class="container">
            <div class="row">
                <div class="col-md-3 order-first py-4">
                    <div class="card left">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between align-items-start  ">
                                <div>
                                    <span class="font-weight-bold"> Category</span>
                                    <h6> • <?= $data['TP_Domain'] ?> </h6>
                                    <br>

                                    <span class="font-weight-bold"> Type</span>
                                    <h6> • <?= $data['TPC_Title'] ?> </h6>
                                    <br>

                                    <span class="font-weight-bold"> Language</span>
                                    <h6> • <?= $data['TP_Lang'] ?> </h6>
                                    <br>
                                    <span class="font-weight-bold"> Semesteer</span>
                                    <h6> • <?= $data['TP_Sem'] ?> </h6>
                                    <br>
                                    <span class="font-weight-bold"> Year</span>
                                    <h6> • <?= $data['TP_Year'] ?> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 order-last ">
                    <div class="card">
                        <div class="card-body">
                            <div>

                                <h1 class="">Description:</h1>
                                <p class=" text-justify"> <?= $data['TP_Desc'] ?>
                                </p>
                                <iframe id="stdFrame" src="<?= $data['TP_Youtube'] ?>" title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</main>
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