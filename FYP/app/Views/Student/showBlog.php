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


<?php $this->section('title')  ?>
<?= $data['BL_Title'] ?>
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-center text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;" data-aos="fade-in ">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;"><?= $data['BL_Title'] ?></p>
            
            <h4><?= $data['St_Name'] ?> | <?= $data['St_Program'] ?></h4>

        </div>

        <div class="container py-3">
            <?php if (session()->has('message')) :  ?>

                <div class="container col-6 py-3">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session('message') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                </div>

            <?php endif ?>

            <?php if (session()->has('error')) :  ?>

                <div class="container col-6 py-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= session('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                </div>

            <?php endif ?>
            
            <div class="row">
                <div class="col-md-3 order-first pb-4">
                    <div class="card left">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between align-items-start  ">
                                <div class="">
                                    <span class="font-weight-bold">Category</span>
                                    <h6> • <?= $data['BLC_Title'] ?> </h6>
                                    <br>

                                    <span class="font-weight-bold">Created At</span>
                                    <h6> • <?= date_format(date_create($data['BL_CreatedAt']), "M jS, Y") ?> </h6>

                                    <br>
                                    <span class="font-weight-bold">Description</span>
                                    <h6> • <?= $data['BL_Description'] ?> </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 order-last ">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4>Project Description:</h1>
                                    <p class="text-justify"> <?= $data['BL_Title'] ?> </p>
                                    <hr>
                                    <!-- <embed type= "application/pdf" src="/uploads/blogs/BlogFile_1648828658_1_CC-Dijkstra.pdf" height="200" width="400" />  -->
                                    <?php if ( $data['BL_isPDF'] == 1) : ?>
                                        <a href="<?= site_url($data['BL_Content']) ?>"  target="_blank">Click Here to download</a>
                                        <hr>
                                        <iframe width="100%" height="650px" type="application/pdf" src="<?= site_url($data['BL_Content']); ?>"></iframe>
                                    
                                    <?php else : ?>
                                        <div><?= $data['BL_Content']?></div>
                                    
                                    <?php endif; ?>


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