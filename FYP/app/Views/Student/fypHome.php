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
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" /> -->

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


<style>
    .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px
    }

    .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative
    }

    .track .step.active:before {
        background: #ef6603
    }

    .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px
    }

    .track .step.active .icon {
        background: #ef6603;
        color: #fff
    }

    .track .icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd
    }

    .track .step.active .text {
        font-weight: 400;
        color: #000
    }

    .track .text {
        display: block;
        margin-top: 7px
    }

    .nav-tabs .nav-link:hover {
        background-color: #2a2c39;
        color: white;
        border-color: transparent;
    }

    .nav-tabs .nav-link.active:hover {
        color: white;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #ef6603;
        border-color: #ef6603;
    }

    .btn-download {
        font-family: "Raleway", sans-serif;
        font-weight: 400;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 12px 32px;
        border-radius: 5px;
        transition: 2s;
        line-height: 1;
        margin: 10px;
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
        background: #ef6603;
        color: #fff;
        text-decoration: none;
        border: none;
    }

    .btn-download:hover {
        background: #d4610e;
        transition: 0.5s;
        border: 3px solid #d4610e;
        color: white;
    }

    /* upload file */

    .drag {
        border: 1px dashed black;
        height: 220px;
        width: 800px;
        border-radius: 5px;
        font-weight: 400;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column
    }

    .drag.active {
        border: 2px solid black
    }

    .drag span {
        font-size: 14px;
        font-weight: 300;
        color: #000;
        margin: 10px 0 15px 0
    }

    .size {
        font-size: 16px !important;
    }

    .nav-tabs .nav-link {
        border: solid transparent;
        border-width: 0 0 2px;
        border-radius: 0;
        text-transform: uppercase;
        line-height: 1;
        font-weight: 500;
        font-size: 12px;
        color: rgba(0, 0, 0, .6);
        padding: 17px 29px 16px;
    }

    @media (max-width: 575.98px) {
        .text {
            font-size: 13px;
        }
    }

    .submit {
        border: 1px solid transparent;
        padding: 12px 70px;
        border-radius: 8px;
        margin: auto;
        background: #e46e29;
        color: #fff;
        font-weight: bold;

    }

    .submit:hover {
        transition: all ease 0.4s;
        background-color: #d85a12;
        border: 1px solid #d85a12;
        /* box-shadow: 1px 1px 8px #858585; */
    }
</style>

<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
FYP Home
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->

    <section id="about " class="about pt-5">

        <?php if (session()->has('message')) :  ?>

            <div class="container col-6 py-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session('message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>

        <?php endif ?>

        <?php if (session()->has('error')) :  ?>

            <div class="container col-6 py-2">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>

        <?php endif ?>

        <section id="about " class="about pt-3">
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Phase 1</span></div>
                <div class="step <?= (session('fypDetails')['FYPS_CurrentPhase'] >= 2) ? 'active' : ''  ?> ">
                    <span class="icon"> <i class="fas fa-tasks"></i> </span> <span class="text"> Phase 2</span>
                </div>
                <div class="step <?= (session('fypDetails')['FYPS_CurrentPhase'] >= 3) ? 'active' : ''  ?> ">
                    <span class="icon"> <i class="fab fa-figma"></i> </span> <span class="text">Phase 3</span>
                </div>
                <div class="step <?= (session('fypDetails')['FYPS_CurrentPhase'] >= 4) ? 'active' : ''  ?> ">
                    <span class="icon"> <i class="fas fa-code"></i> </span> <span class="text">Phase 4</span>
                </div>
                <div class="step <?= (session('fypDetails')['FYPS_CurrentPhase'] == 5) ? 'active' : ''  ?> ">
                    <span class="icon"> <i class="fas fa-book"></i></span> <span class="text">Phase 5</span>
                </div>
            </div>
            <div class="py-3">
                <div class="px-4 my-4">
                    <nav class="container my-2 " style="font-family:roboto;">
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button class="nav-link size active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                Proposal Submission
                            </button>

                            <button class="nav-link size" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                SRS
                            </button>

                            <button class="nav-link size" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                Desgin Document
                            </button>

                            <button class="nav-link size" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                Code
                            </button>

                            <button class="nav-link size" id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab" aria-controls="nav-5" aria-selected="false">
                                Thesis
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                            <?php if (session('fypDetails')['FYPS_CurrentPhase'] >= 1) : ?>
                                <div class="phase-1">
                                    <div>
                                        <div class="section-title " style="background-color: #2a2c39; padding: 25px; line-height: 2;">
                                            <p style="color: white;text-align: center;">Phase 1 - Propsal Submission</p>
                                        </div>

                                        <div class="container py-3">
                                            <div class="row" style="margin-left: 30px;">
                                                <div class="col-md-6 mx-auto">
                                                    <h2 style="font-size: 2rem;font-weight: bold;">Objectives</h2><br>
                                                    <ul style="list-style-type: disc;">
                                                        <li>Complete Project Proposal</li>
                                                        <li>Brief description of Project Title</li>
                                                        <li>Completely Feasiblity Analysis</li>
                                                        <li>Click here to download the Proposal Template</li>
                                                        <a href="/assets/images/user.jpg" download="Proposal"><button style="text-transform: none;" type="button" class="btn btn-download">Download Proposal<span><i class="fas fa-arrow-down"></i></span></button> </a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="d-flex align-items-center justify-content-around">
                                            <div class="py-10 bg-gray-300 px-2 col-lg-6">
                                                <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
                                                    <div class="md:flex">
                                                        <div class="w-full">
                                                            <div class="p-3">
                                                                <div class="mb-2"> </div>
                                                                <div class="mb-2">
                                                                    <?= form_open(site_url("Student/saveSubmission/1"), ['enctype' => 'multipart/form-data']) ?>
                                                                    <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                                                        <div class="absolute">
                                                                            <div class="flex flex-col items-center "> <i class="fas fa-cloud-upload-alt fa-3x text-gray-400"></i>
                                                                                <span class="block text-gray-400 font-normal">Drag
                                                                                    your files here</span>
                                                                                <span class="block text-gray-400 font-normal">or</span>
                                                                                <span class="block text-blue-400 font-normal">Browse
                                                                                    files</span>
                                                                            </div>
                                                                        </div>

                                                                        <input type="file" class="form-control h-full w-full opacity-0" name="phase-1" id="file2" required>
                                                                        



                                                                    </div>
                                                                    <p class="text-danger">
                                                                            <?php echo getErrorMessage('errors', 'phase1'); ?>
                                                                        </p>
                                                                    <div class="text-center">

                                                                        <button class="submit my-3 mb-4" type="submit">
                                                                            <i class="fas fa-plus-square "></i>&nbsp;&nbsp;Submit
                                                                        </button>

                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="tab-pane fade show " id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">

                            <?php if (session('fypDetails')['FYPS_CurrentPhase'] >= 2) : ?>
                                <div class="phase-2">
                                    <div class="section-title " style="background-color: #2a2c39; padding: 25px; line-height: 2;">
                                        <p style="color: white;text-align: center;">Phase 2 - SRS</p>
                                    </div>

                                    <div class="container py-3">
                                        <div class="row" style="margin-left: 30px;">
                                            <div class="col-md-6 mx-auto">
                                                <h2 style="font-size: 2rem;font-weight: bold;">Objectives</h2><br>
                                                <ul style="list-style-type: disc;">
                                                    <li>Complete Software Requirement Specification document</li>
                                                    <li>Must have Functional Requirements, Use Case Daigrams</li>
                                                    <li>Complete Literature Review for the Research Type Project</li>
                                                    <!-- <a href="FR.txt" download="Proposal"><button style="text-transform: none;" type="button" class="btn btn-download">Download Proposal<span><i class="fas fa-arrow-down"></i></span></button> </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php else : ?>
                                <p class="pt-2" style="font-size:20px; text-align: center;">Completed previous phases first
                                    ⚠️</p>
                            <?php endif ?>
                        </div>

                        <div class="tab-pane fade show " id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                            <?php if (session('fypDetails')['FYPS_CurrentPhase'] >= 3) : ?>
                                <div class="phase-3">
                                    <div class="section-title " style="background-color: #2a2c39; padding: 25px; line-height: 2;">
                                        <p style="color: white;text-align: center;">Phase 3 - Design Document</p>
                                    </div>

                                    <div class="container py-3">
                                        <div class="row" style="margin-left: 30px;">
                                            <div class="col-md-6 mx-auto">
                                                <h2 style="font-size: 2rem;font-weight: bold;">Objectives</h2><br>
                                                <ul style="list-style-type: disc;">
                                                    <li>Complete Design Document</li>
                                                    <li>Use Case Diagrams, DFD, other Diagrams</li>
                                                    <!-- <li>Click here to download the Proposal Template</li> -->
                                                    <!-- <a href="FR.txt" download="Proposal"><button style="text-transform: none;" type="button" class="btn btn-download">Download Proposal<span><i class="fas fa-arrow-down"></i></span></button> </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <p class="pt-2" style="font-size:20px; text-align: center;">Completed previous phases first
                                    ⚠️</p>
                            <?php endif ?>


                        </div>

                        <div class="tab-pane fade show " id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">

                            <?php if (session('fypDetails')['FYPS_CurrentPhase'] >= 4) : ?>
                                <div class="phase-4">
                                    <div class="section-title " style="background-color: #2a2c39; padding: 25px; line-height: 2;">
                                        <p style="color: white;text-align: center;">Phase 4 - Code Submission</p>
                                    </div>

                                    <div class="container py-3">
                                        <div class="row" style="margin-left: 30px;">
                                            <div class="col-md-6 mx-auto">
                                                <h2 style="font-size: 2rem;font-weight: bold;">Objectives</h2><br>
                                                <ul style="list-style-type: disc;">
                                                    <li>Code Submission</li>
                                                    <li>Complete Code with instructions for running project</li>
                                                    <!-- <li>Click here to download the Proposal Template</li> -->
                                                    <!-- <a href="FR.txt" download="Proposal"><button style="text-transform: none;" type="button" class="btn btn-download">Download Proposal<span><i class="fas fa-arrow-down"></i></span></button> </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php else : ?>
                                <p class="pt-2" style="font-size:20px; text-align: center;">Completed previous phases first
                                    ⚠️</p>
                            <?php endif ?>
                        </div>

                        <div class="tab-pane fade show " id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab">
                            <?php if (session('fypDetails')['FYPS_CurrentPhase'] == 5) : ?>
                                <div class="phase-5">
                                    <div class="section-title " style="background-color: #2a2c39; padding: 25px; line-height: 2;">
                                        <p style="color: white;text-align: center;">Phase 5 - Thesis Submission</p>
                                    </div>

                                    <div class="container py-3">
                                        <div class="row" style="margin-left: 30px;">
                                            <div class="col-md-6 mx-auto">
                                                <h2 style="font-size: 2rem;font-weight: bold;">Objectives</h2><br>
                                                <ul style="list-style-type: disc;">
                                                    <li>Complete Thesis in pdf file</li>
                                                    <li>Click here to download the Template</li>
                                                    <a href="FR.txt" download="Proposal"><button style="text-transform: none;" type="button" class="btn btn-download">Download Proposal<span><i class="fas fa-arrow-down"></i></span></button> </a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php else : ?>
                                <p class="pt-2" style="font-size:20px; text-align: center;">Completed previous phases first
                                    ⚠️</p>
                            <?php endif ?>
                        </div>

                    </div>
                </div>




            </div>

            <!-- Remarks -->
            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col-md-8 col-lg-10">
                        <h2 style="font-size: 2rem;font-weight: bold;">Remarks:</h2>
                        <div class="card shadow-0 border my-2" style="background-color: #f0f2f5;">
                            <?php if (count($rem) > 0) : ?>
                                <?php foreach ($rem as $remarks) : ?>
                                    <div class="card-body p-4">
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <div class="d-flex flex-row align-items-center ">
                                                    <img loading="lazy" src="<?= site_url($remarks['FC_Photo']) ?>" alt="<?= $remarks['FC_Name'] ?>" width="35" height="35" class="rounded-circle" />
                                                    <h1 class="fw-bold mb-0 ms-2"><?= $remarks['RM_Title'] ?></h1>
                                                </div>
                                                <div style="margin-left: 42px;">
                                                    <span><?= $remarks['FC_Name'] ?></span>
                                                    <span> |
                                                        <?= date_format(date_create($remarks['RM_Date']), "M jS, Y") ?></span>

                                                    <p>Phase: <?= $remarks['RM_Phase'] ?></p>
                                                    <p class="text-muted mt-3 ">
                                                        <?= ($remarks['RM_Detail']) ? ($remarks['RM_Detail']) : 'No detail found' ?>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="container text-center py-2">
                                    <h5>No Remarks are available</h5>
                                </div>
                            <?php endif; ?>


                        </div>
                    </div>


                </div>
            </div>

        </section>




    </section>

</main>
<?php $this->endSection();  ?>

<?php $this->section('footerScripts')  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

<?php $this->endSection();  ?>