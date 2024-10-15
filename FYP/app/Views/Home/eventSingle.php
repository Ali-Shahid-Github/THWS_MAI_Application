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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

<style>
     .desc {
        /* border-right: 2px solid; */
        padding: 10px;
        background: #2a2c39;
        border-radius: 5px;
        color: white;
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        overflow: hidden;
    }
</style>

<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
Event - <?= $data['EV_Title'] ?>
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-center text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;" data-aos="fade-in ">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;"><?= $data['EV_Title'] ?></p>
            <h4><?= $data['EVC_Title'] ?> </h4>
            <h4 class="text-center"><?= date_format(date_create($data['EV_Date']), "M jS, Y") ?> | Venue : <?= $data['EV_Venue'] ?></h4>
            <h4 class="text-center"><?php
                                               
                                               $timeArray = explode (":", $data['EV_TimeStart']); 
                                               echo date("h:i A", mktime($timeArray[0], $timeArray[1], $timeArray[2], 0, 0, 0)) 
                                           ?>  to 
                                           
                                           <?php
                                               
                                               $timeArray = explode (":", $data['EV_TimeEnd']); 
                                               echo date("h:i A", mktime($timeArray[0], $timeArray[1], $timeArray[2], 0, 0, 0)) 
                                           ?>
                                           
                                    </h4>

        </div>
        <div class="container pt-3" data-aos="fade-in" data-aos-delay="">
            <div class="row ">
                <div class="col-12 order-first order-md-last text-center ">
                    <img class="img-fluid hover-overlay ripple" src="<?= site_url($data['EV_Image']) ?>" alt="<?= $data['EV_Title'] ?>">
                    <div class="desc my-2 ">
                        <h1 class="text-start">Description:</h1>
                        <p class="text-justify"> <?= $data['EV_Desc'] ?></p>

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