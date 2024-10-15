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
Research
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

    .left {
        border-right: 2px solid;
        background: #2a2c39;
        border-radius: 9px;
        color: white;
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        overflow: hidden;
    }

    body {
        color: #6c757d;
        background-color: #f5f6f8;
        /* margin-top: 20px; */
    }
    .mb-4,
    .my-4 {
        margin-bottom: 2.25rem !important;
    }

    .m-0 {
        margin: 0 !important;
    }
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-center" style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;"><?= $data["RS_Title"] ?></p>
            <h5 style="color: white;"><?= $data["RS_Category"] ?></h5>
        </div>
        <div class="container p-4">

            <div class="row">
                <div class="col-md-3 order-first pb-4">
                    <div class="card left">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between align-items-start p-3 ">
                                <div>
                                    <span class="font-weight-bold">Year</span>
                                    <h6><li><?= $data['RS_Year'] ?> </li> </h6>
                                    <br>

                                    <span class="font-weight-bold">Journal</span>
                                    <h6><li><?= $data['RS_Journal'] ?> </li> </h6>

                                    <br>
                                    <span class="font-weight-bold">DOI</span>
                                    <h6> • <a href="https://dx.doi.org/<?= $data['RS_DOI'] ?>" style="font-family: Arial, Helvetica, sans-serif;"><?= $data['RS_DOI'] ?></a></h6>

                                    <br>
                                    <span class="font-weight-bold">Authors</span>
                                    <ul class="mb-0">
                                        <?php

                                        $a = explode(',', $data['RS_Authors']);

                                        foreach ($a as $b) {
                                            echo '<li>' . $b . '</li>';
                                        } ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 order-last ">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-3">
                                <h4>Description</h1>
                                    <hr>
                                    <p class="text-justify"> <?= $data['RS_Desc'] ?> </p>
                            </div>

                        </div>
                    </div>
                </div>
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