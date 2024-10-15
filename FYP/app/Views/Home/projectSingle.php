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
<?= $data['TP_Title'] ?>
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-center text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;" data-aos="fade-in ">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;"><?= $data['TP_Title'] ?></p>
            <h4><?= $data['St_Name'] ?> | Sem: <?= $data['TP_Sem']       ?></h4>
            <div class="text-center " style="font-size: 26px;">

                <a href="//<?= $data['TP_Youtube']; ?> "> <i class="fab fa-youtube " style="color: red;"> </i> </a>
                &nbsp;
                <a href="//<?= $data['TP_Github'] ?>"> <i class="fab fa-github  " style="color: white;"></i> </a>

            </div>
        </div>
        <div class="container pt-3 " data-aos="fade-in " data-aos-delay="">
            <div class="row">
                <div class="col-md-3 order-last order-md-first  ">
                    <div class="card left">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between align-items-start ">
                                <span class="font-weight-bold"> Category</span>
                                <h6> • <?= $data['TP_Domain'] ?> </h6>
                                <br>

                                <span class="font-weight-bold"> Type</span>
                                <h6> • <?= $data['TPC_Title'] ?> </h6>
                                <br>

                                <span class="font-weight-bold"> Language</span>
                                <h6> • <?= $data['TP_Lang'] ?> </h6>
                                <br>

                                <span class="font-weight-bold"> Views</span>
                                <h6> • <?= $data['TP_Views'] ?> </h6>
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
                <div class="col-md-9 order-first order-md-last ">
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

    </section>
</main>
<?php $this->endSection();  ?>

<?php $this->section('footerScripts')  ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>



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