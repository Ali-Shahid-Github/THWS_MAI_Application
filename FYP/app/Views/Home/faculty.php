<?php $this->extend('layouts/default');    ?>


<?php $this->section('headFiles')  ?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Faculty
<?php $this->endSection();  ?>



<?php $this->section('styles')  ?>


<style>
    .card-body {
        padding: 0 !important;
    }

    .card {
        border: 1px solid #d1d5da;
        padding: 0;
    }

    .card:hover {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%);
        border-radius: 0.5rem;
    }

    .card .col-4 {
        margin: auto;
    }

    .facultyImage {
        background-size: cover;
        height: 100%;
        background-position: center;
    }
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;">CS Faculty</p>
            <h5 style="color: white;">Lets meet up with our talented CS Faculty, with ten plus PHD Professors</h5>
        </div>
        <div class="container p-4">



            <div class="row justify-content-center justify-content-lg-start ">

                <?php if (count($data) > 0) : ?>

                    <?php foreach ($data as $d) : ?>

                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0 ">
                                <div class="col-5 facultyImage hover-overlay ripple" style="background-image: url(<?= site_url($d["FC_Photo"]) ?>);" data-mdb-ripple-color="light"> </div>
                                <!-- <div class="col-5 facultyImage hover-overlay ripple" style="background-image: url();" data-mdb-ripple-color="light"> </div> -->
                                <div class="col-7 px-4 pt-2">
                                    <div class="card-body ">
                                        <h4 class="fw-bold text-truncate"><?= $d["FC_Name"] ?></h4>
                                        <h6 class="text-black"><?= $d["FR_Title"] ?> <a href='<?= site_url("Home/showProfile/". $d["FC_Id"] ) ?>'><i class="px-2 fas fa-share-square"></i> </a> </h6> 
                                        <hr>

                                        <p class="card-text">Domain: <?= $d["FC_Domain"] ?></p>
                                        <p class="text-black "><a class="bi bi-geo-alt-fill"> </a><?= $d["FC_Office"] ?></p>
                                        <p class="text-black "><a class="bi bi-telephone"> </a><?= $d["FC_Phone"] ?></p>
                                        <p class="text-black "><a class="bi bi-envelope"> </a><?= $d["FC_Email"] ?></p>
                                        <hr>

                                        <p class="text-black "><a class="fas fa-people-arrows"> </a> <?= $d["FC_AvailableHour"] ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                <?php else : ?>
                    <h6>No Faculty Found</h6>
                <?php endif; ?>

            </div>



        </div>

    </section>
</main>
<?php $this->endSection();  ?>


<?php $this->section('footerScripts')  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>




<?php $this->endSection();  ?>