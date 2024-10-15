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

<style>
    .modal-footer {
        flex-wrap: nowrap;
        align-content: space-around;
        justify-content: space-around;
    }

    .card-body {

        border-radius: 0.5rem;
        border: 1px solid #d1d5da;
        font-family: 'Roboto';
    }

    .card-body h5 {
        font-family: 'Roboto';
    }


    .card-body:hover {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%);
    }

    .side-stick {
        position: absolute;
        width: 3px;
        height: 70px;
        left: 0;
        top: 40%;
        background-color: orange
    }
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
Admin | Alumni
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;">
            <p style="color: white;">Honourable Alumni</p>
            <h5 style="color: white;">Manage Alumni Requests to reduce gap between students and industry</h5>
        </div>


        <div class="container py-3 ">

            <div class="row">
                <?php if (session()->has('message')) :  ?>

                    <div class="container col-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session('message') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>

                <?php endif ?>

                <?php if (session()->has('error')) :  ?>

                    <div class="container col-6">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>

                <?php endif ?>

                <?php if (count($data) > 0) : ?>

                    <div class="table-responsive-md">
                        <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top  ">
                            <caption>
                                Alumni Requests
                            </caption>
                            <thead class="table-dark text-center align-middle">
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Reg. No</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">WhatsApp</th>
                                    <th scope="col"><span class="fab fa-facebook-f text-white"></span></th>
                                    <th scope="col"><span class="fab fa-linkedin-in text-white"></span></th>
                                    <th scope="col">Info</th>

                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="font-weight-bold">

                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td> <?= $d['AL_Name'] ?> </td>
                                        <td> <?= $d['AL_RegNo'] ?> </td>
                                        <td> <?= $d['AL_Session'] ?> </td>
                                        <td> <?= $d['AL_Email'] ?> </td>
                                        <td> <?= ($d['AL_Desgnation'] != '') ? $d['AL_Desgnation'] : 'N/A' ?> </td>
                                        <td> <?= ($d['AL_Company'] != '') ? $d['AL_Company'] : 'N/A' ?> </td>
                                        <td> <?= $d['AL_WhatsApp'] ?> </td>
                                        <td>
                                            <a style="cursor: pointer; color: #183153;" href="<?= $d['AL_FB'] ?> "> <span class="fab fa-facebook fa-2x"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a style="cursor: pointer; color: #183153;" href="<?= $d['AL_LinkedIn'] ?> "> <span class="fab fa-linkedin fa-2x"></span>
                                            </a>
                                        </td>
                                        <td> <?= word_limiter($d['AL_Info'], 5); ?> </td>
                                        <td>
                                            <div class="modal-footer" style="border: none;">
                                                <a class="text-success " style="cursor: pointer;" href="<?= site_url('Admin/approveAlumni/' . $d['AL_Id'] . '') ?>"> <span class="fas fa-check fa-lg"></span>
                                                </a>
                                                <span class="dropdown dropup px-1 px-md-0">
                                                    <span class="text-danger " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="fas fa-trash-alt fa-lg "></span>
                                                    </span>
                                                    <ul class="dropdown-menu col-12" style=" box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%); border-radius: 0.5rem;" aria-labelledby="dropdownMenu2">

                                                        <div class="p-3">Are You Sure to Delete: <?= $d['AL_Name'] ?> ?</div>
                                                        <div class="modal-footer">
                                                            <a href="<?= site_url('Admin/deleteAlumni/' . $d['AL_Id'] . '/') ?>" class="btn btn-outline-danger">Yes</a>
                                                            <a type="button" class="btn btn-info">No</a>
                                                        </div>

                                                    </ul>
                                                </span>
                                            </div>
                                        </td>


                                    </tr>

                                <?php endforeach; ?>




                            </tbody>
                        </table>


                    </div>



            </div>

        <?php else : ?>
            <div class="container text-center py-2">
                <h2> ✅ No Alumni requests are approval awaiting</h2>
            </div>

        <?php endif; ?>
        </div>

        <div class="container pt-3 ">
            <hr class="col-10 mx-auto">
            <div class="row">

                <?php if (count($approved) > 0) : ?>

                    <div class="table-responsive-md">

                        <caption>
                            Approved Alumni
                        </caption>

                        <div class="container">
                            <div class="row">
                                <?php foreach ($approved as $d) : ?>

                                    <div class="col-md-4 py-2 ">
                                        <div class="card card-body">


                                            <div class="d-flex flex-row justify-content-center align-items-center">

                                                <img loading="lazy" class="img-fluid rounded-circle" src="<?= site_url($d['AL_Photo']) ?>" style="height: 10vh;" alt="">

                                                <h5 class="text-truncate px-3"><?= $d['AL_Name'] ?></h5>




                                            </div>
                                            <hr>
                                            <!-- <span class="side-stick"></span> -->
                                            <h5 class="py-1"><?= $d['AL_RegNo'] ?></h5>

                                            <div class="note-content">
                                                <p class="note-inner-content text-truncate ">
                                                    <?= $d['AL_Info'] ?>
                                                </p>
                                                <hr>
                                            </div>

                                            <div class="d-flex flex-row justify-content-between align-items-center">
                                                <h5 class="text-truncate"><?= $d['AL_Session'] ?></h5>
                                                <div class="d-flex flex-row justify-content-between align-items-center">

                                                    <a style="cursor: pointer; color: #183153; " class="px-4" href="<?= $d['AL_FB'] ?> "> <span class="fab fa-facebook fa-lg"></span>
                                                    </a>

                                                    <a style="cursor: pointer; color: #183153; " href="<?= $d['AL_LinkedIn'] ?> "> <span class="fab fa-linkedin fa-lg"></span>
                                                    </a>

                                                </div>
                                            </div>
                                            <hr>

                                            <div class="d-flex flex-row justify-content-between align-items-center">

                                                <p class="py-1 text-truncate "><?= $d['AL_Desgnation'] ?> </p>
                                                <p class="note-inner-content text-truncate text-muted ">
                                                    <?= $d['AL_Company'] ?>
                                                </p>


                                            </div>



                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                        </div>

                    <?php else : ?>
                        <div class="container text-center">
                            <h2>No Alumni Available</h2>
                        </div>

                    <?php endif; ?>
                    </div>



    </section>
</main>
<?php $this->endSection();  ?>

<?php $this->section('footerScripts')  ?>

<!-- <script src="/assets/vendor/aos/aos.js "></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>


<!-- <script>
window.addEventListener('load', () => {
    AOS.init({
        duration: 100,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    })
});
</script> -->
<?php $this->endSection();  ?>