<?php $this->extend('layouts/default');    ?>

<?php $this->section('headFiles')  ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- Vendor CSS Files
<link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
<!-- <link href="/assets/vendor/aos/aos.css" rel="stylesheet">  -->
<!-- <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
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
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
Notices
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;">
            <p style="color: white;">Notices</p>
            <h5 style="color: white;">Manage Your Notices here</h5>
        </div>


        <div class="container py-3 ">


            <div class="row py-2">
                <div class="text-center ">
                    <a href=" <?= site_url("Staff/addNotice") ?> " class="btn btn-info  py-3 " type="button">
                        Add Notice <span class="fas fa-plus px-2 fa-lg"></span></a>
                </div>
            </div>


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
                                Notices
                            </caption>
                            <thead class="table-dark text-center align-middle">
                                <tr>

                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Attachment</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="font-weight-bold">

                                <?php foreach ($data as $d) : ?>

                                    <tr>
                                        <td> <?= $d['NB_Title'] ?> </td>
                                        <td> <?= $d['NBC_Title'] ?> </td>
                                        <td> <?= date_format(date_create($d['NB_CreatedAt']), "M jS, Y G:i")  ?> </td>
                                        
                                        <td> <?= $d['NB_Description'] ?> </td>
                                       
                                        <td> Attachement </td>

                                        <td>
                                            <div class="modal-footer" style="border: none;">
                                                <a class="text-success " style="cursor: pointer;" href="<?= site_url('Staff/editNotice/' . $d['NB_ID'] . '') ?>"> <span class="fas fa-pencil-alt fa-lg"></span>
                                                </a>


                                                <span class="dropdown dropup px-1 px-md-0">
                                                    <span class="text-danger " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="fas fa-trash-alt fa-lg "></span>
                                                    </span>
                                                    <ul class="dropdown-menu col-12" style=" box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%); border-radius: 0.5rem;" aria-labelledby="dropdownMenu2">

                                                        <div class="p-3">Are You Sure to Delete: <?= $d['NB_Title'] ?> ?</div>
                                                        <div class="modal-footer">
                                                            <a href="<?= site_url('Staff/deleteNotice/' . $d['NB_ID'] . '/') ?>" class="btn btn-outline-danger">Yes</a>
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
                <h2> ✅ No projects are approval awaiting</h2>
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