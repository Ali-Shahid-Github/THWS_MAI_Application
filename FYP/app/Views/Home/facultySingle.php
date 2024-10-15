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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

<style>
    body {
        font-family: "Open Sans", sans-serif;
        color: #2f2f2f;
        /* background: #f1f1f1; */
    }

    .row1 {
        text-align: center;
    }

    h6 {
        font-weight: bold;
    }

    /* p {
                padding: 10px;
            } */

    a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
    }

    .imgFaculty {
        border-radius: 3%;
        object-fit: cover;
        max-width: 50%;
    }

    @media screen and (max-width: 450px) {
        .imgFaculty {
            max-width: 85%;
        }
    }

    @media screen and (min-width: 750px) {
        .imgFaculty {
            max-width: 45%;
        }
    }

    @media screen and (min-width: 762px) {
        .imgFaculty {
            max-width: 95%;
        }
    }

    @media screen and (min-width: 998px) {
        .imgFaculty {
            max-width: 80%;
        }
    }

    * {
        box-sizing: border-box;
    }

    /* Container for flexboxes */

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    /* Create four equal columns */

    .column {
        flex: 25%;
        padding: 20px 10px 20px 20px;
    }

    @media screen and (max-width: 992px) {
        .column {
            flex: 50%;
        }
    }

    @media screen and (max-width: 600px) {
        .row {
            flex-direction: column;
        }
    }

    .cont {
        color: black;
        border: none;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        box-shadow: 5px 5px 8px #2a2c39;
        background-color: rgb(231, 231, 231);
        text-align: justify;
    }

    .cont:hover {
        border: 1px solid #2a2c39;
        box-shadow: 5px 5px 12px #2a2c39;
    }

    .container {
        /* box-shadow: 2px 2px 8px rgb(78, 78, 78); */
        padding: 20px;
        /* background-color: #0E5359; */
        /* color: white; */
    }

    .nav-tabs .nav-link {
        color: orange;
    }

    .card-body {
        padding: 0 !important;
    }

    .card {
        border: 1px solid #d1d5da;
        padding: 0;
        /* max-width: 540px; */
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
        /* height: 100%; */
        background-position: center;
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


<?php $this->section('title')  ?>
<?= $fac['FC_Name'] ?> | Profile
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <section id="about " class="about pt-5">
        <div class="section-title text-center" style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">

            <h5 style="color: white;"><?= $facRank ?></h5>
            <p style="color: white;"><?= $fac['FC_Name'] ?></p>
        </div>

        <div class="container py-3 ">
            <div class="row">
                <div class="container">
                    <div class="card mb-3 mx-2">
                        <div class="row g-0 ">
                            <div class="col-md-5 hover-overlay ripple d-flex align-items-center justify-content-center p-3" data-mdb-ripple-color="light">
                                <img src="<?= site_url($fac['FC_Photo']) ?>" alt=" <?= $fac['FC_Name'] ?>" class="mx-auto my-auto imgFaculty img-fluid ">
                            </div>
                            <!-- <div class="col-5 facultyImage hover-overlay ripple" style="background-image: url();" data-mdb-ripple-color="light"> </div> -->
                            <div class="col-md-7 px-4 pt-3">
                                <div class="card-body mx-auto text-black">
                                    <h6 class="text-black">
                                        <?= $facRank ?>
                                    </h6>

                                    <h4 class="fw-bold text-truncate">
                                        <?= $fac['FC_Name'] ?>
                                    </h4>

                                    <hr>

                                    <p class="card-text"><?= $fac['FC_Domain'] ?></p>
                                    <p class="text-black ">
                                        <a class="bi bi-geo-alt-fill"> </a>
                                        <?= $fac['FC_Office'] ?>
                                    </p>
                                    <p class="text-black ">
                                        <a class="bi bi-telephone"> </a>
                                        <?= $fac['FC_Phone'] ?>
                                    </p>
                                    <p class="text-black ">
                                        <a class="bi bi-envelope"> </a>
                                        <?= $fac['FC_Email'] ?>
                                    </p>
                                    <hr>

                                    <p class="text-black ">
                                        <a class="fas fa-people-arrows"> </a>
                                        <?= $fac['FC_AvailableHour'] ?>
                                    </p>

                                </div>
                            </div>
                            <div class="px-4 my-4">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                            <h6>Biblography</h6>
                                        </button>

                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                            <h6>Area of Interest</h6>
                                        </button>

                                        <button class="nav-link" id="nav-pub-tab" data-bs-toggle="tab" data-bs-target="#nav-pub" type="button" role="tab" aria-controls="nav-pub" aria-selected="false">
                                            <h6> Publication</h6>
                                        </button>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                        <div class="container">

                                            <?php if (count($edu) > 0) : ?>
                                                <?php foreach ($edu as $data) : ?>
                                                    <hr>
                                                    <div class="" id="ed_<?= $data['FE_Id'] ?>">
                                                        <span><?= ($data['FE_Title']) ?></span> , <span><?= ($data['FE_Year']) ?></span>
                                                        <br>
                                                        <span><?= ($data['FE_Uni']) ?></span> <span>(</span> <span><?= ($data['FE_Loc']) ?></span> <span> )</span>

                                                    </div>

                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <div class="container text-center py-2">
                                                    <h5>No Education details are available</h5>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    
                                            <div class="container text-black">
                                                
                                                    <?php if (count($fai) > 0) : ?>
                                                    <ul>
                                                        <?php foreach ($fai as $data) : ?>

                                                            <div id="interestArea_<?= $data['FAI_Id'] ?>">

                                                                <li><?= $data['AI_Item'] ?></li>
                                                            </div>

                                                        <?php endforeach; ?>
                                                 </ul>
                                                    <?php else : ?>
                                                        <div class="container text-center py-2">
                                                            <h5>No Area of Interests are available</h5>
                                                        </div>
                                                    <?php endif; ?>
                                              
                                            </div>

                                        </div>
                                 
                                    <div class="tab-pane fade" id="nav-pub" role="tabpanel" aria-labelledby="nav-profile-pub">
                                        <div class="container">

                                            <?php if (count($res) > 0) : ?>
                                                <div class="row row-cols-1 lightBorder">
                                                    <div class="col-md-12 mx-auto">
                                                        <div class="accordion accordion-flush" id="researchAccordian">
                                                            <?php foreach ($res as $d) : ?>
                                                                <div class="accordion-item " type="<?= $d['RS_Category'] ?>" year="<?= $d['RS_Year'] ?>">
                                                                    <h2 class="accordion-header " id="flush-heading<?= $d['RS_Id'] ?>">
                                                                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $d['RS_Id'] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $d['RS_Id'] ?>">
                                                                            <a class="titleLink text-black" target="_blank" href="https://dx.doi.org/<?= $d['RS_DOI'] ?>">
                                                                                <h4><?= $d['RS_Title'] ?></h4>
                                                                            </a>
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
                                                    <h5>No Publications details are available</h5>
                                                </div>

                                            <?php endif; ?>

                                        </div>
                                    </div>

                                </div>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

<?php $this->endSection();  ?>