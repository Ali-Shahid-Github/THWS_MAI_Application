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
    .text-right {
        text-align: right;
    }

    .table {
        margin-bottom: 20px;
        width: 100%;
        font-family: 'poppins';
        border-spacing: 0;
        border-collapse: collapse;
        font-weight: normal;
        font-size: medium;
        font-style: normal;
        color: -internal-quirk-inherit;
        text-align: start;
    }

    .table-striped>tbody>tr:nth-child(2n+1)>td,
    .table-striped>tbody>tr:nth-child(2n+1)>th {
        background-color: #8196ff !important;
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #ddd;
        font-weight: 600;
    }

    .events_area {
        padding: 5% 0 100px;
        background: #002347;
    }

    @media (max-width: 991px) {
        .events_area {
            padding: 70px 0;
        }
    }

    .events_area .event-link {
        color: #fdc632;
        font-size: 13px;
        text-transform: uppercase;
    }

    .events_area .event-link img {
        margin-left: 5px;
        display: inline-block;
    }

    .single_event {
        margin-bottom: 30px;
    }

    .single_event .event_thumb {
        overflow: hidden;
    }

    .single_event .event_thumb img {
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .single_event .event_details {
        background: rgba(0, 35, 71, 0.8);
        position: absolute;
        top: 0px;
        right: 0px;
        width: 275px;
        padding: 30px 25px;
        color: #ffffff;
    }

    .single_event .event_details .date {
        color: #ffffff;
        padding-right: 15px;
        border-right: 2px solid #fff;
        font-family: "Rubik", sans-serif;
        font-size: 14px;
    }

    .single_event .event_details .date span {
        display: block;
        color: #fdc632;
        font-size: 28px;
        font-weight: 500;
    }

    .single_event .event_details .time-location {
        padding-left: 15px;
        font-size: 14px;
    }

    .single_event .event_details .time-location p {
        margin-bottom: 0px;
    }

    .single_event .event_details .time-location p span {
        color: #ffffff;
        font-size: 13px;
        font-weight: 500;
    }

    .single_event:hover img {
        transform: scale(1.1);
    }

    .single_event:hover h4 a {
        color: #fdc632;
    }

    .events-date {
        text-align: center;
        position: absolute;
        right: 30px;
        top: 20px;
        background-color: rgba(25, 47, 89, 0.9);
        color: #fff;
        padding: 8px 20px;
        text-transform: uppercase;
        font-size: 16px;

    }

    .event-time li {
        display: inline-block;
        margin-right: 20px
    }

    .event-time li:last-child {
        margin-right: 0
    }

    .event-time li i {
        color: #59c17a
    }

    @media screen and (max-width: 1199px) {
        .event-date {
            padding: 10px 18px 6px 18px
        }
    }

    .position-relative {
        position: relative !important;
    }

    .facultyImage {
        background-size: cover;
        height: 100%;
        background-position: center;
    }

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
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
Events
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title  text-center text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;">
            <p style="color: white;">Events</p>
            <h5 style="color: white;">Explore Events happening in the Computer Science Department.</h5>
        </div>


        <div class="container-fluid py-3">
            <div class="events_area" style="border-radius: 10px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="main_title text-center">
                                <h2 class="mb-3 text-white">Upcoming Events</h2>
                                <p class="text-white">
                                    Replenish man have thing gathering lights yielding shall you
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php if (count($Upcoming) > 0) : ?>
                        <div class="row">
                            <?php foreach ($Upcoming as $d) : ?>

                                <div class="col-lg-6 col-md-6 mx-auto">
                                    <div class="single_event position-relative">
                                        <div class="event_thumb">
                                            <img height="500px" src="<?= site_url($d["EV_Image"]) ?>" alt="" />
                                        </div>
                                        <div class="event_details">
                                            <div class="d-flex mb-4">
                                                <div class="date"><span><?= date_format(date_create($d['EV_Date']), "j") ?></span> <?= date_format(date_create($d['EV_Date']), "M") ?></div>
                                                <div class="time-location ">
                                                    <h5 class="overflowWrapEllipses" ><?= $d['EV_Title']  ?></h5>
                                                    <p><span class="ti-time mr-2"></span> <?= $d['EV_TimeStart'] ?> - <?= $d['EV_TimeEnd'] ?></p>
                                                    <p><span class="ti-location-pin mr-2"></span> <?= $d['EV_Venue'] ?></p>
                                                </div>
                                            </div>
                                            <p><?= word_limiter($d['EV_Desc'],10,'...') ?></p>
                                            <a href="/Home/eventDetail/<?= $d['EV_Id'] ?>" class="btn btn-info rounded-0 mt-3">View Details</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <div class="container text-center py-2">
                            <h2 class="text-white"> Wait, Untill we get an event to see</h2>
                        </div>
                <?php endif ?>
                </div>
            </div>
        </div>

        <div class="container-fluid p-4">
            <h2 class="text-center">Past Events</h2>
            <div class="row justify-content-center justify-content-lg-start ">

                <?php if (count($Past) > 0) : ?>
                    <?php foreach ($Past as $d) : ?>
                        <div class="card my-3 mx-1 mx-auto" style="max-width: 640px;">
                            <div class="row g-0">
                                <div class="col-md-5 p-2 position-relative">
                                    <div class=" facultyImage hover-overlay ripple" style="background-image: url(<?= site_url($d["EV_Image"]) ?>); height: 40vh;" data-mdb-ripple-color="light"> </div>
                                    <div class="events-date">
                                        <p><?= date_format(date_create($d['EV_Date']), "j") ?></p>
                                        <span><?= date_format(date_create($d['EV_Date']), "M") ?></span>
                                    </div>
                                </div>
                                <div class="col-md-7 p-3">
                                    <div class="card-body">
                                        <a href="/Home/eventDetail/<?= $d['EV_Id'] ?>" style="color:black">
                                            <h5 class="card-title text-black text-truncate"><?= $d['EV_Title'] ?></h5>
                                        </a>

                                        <div style="max-height: 75px; min-height: 75px;" class="overflowWrapEllipses pb-2">
                                            <p class="text-justify "><?= $d['EV_Desc'] ?></p>
                                        </div>

                                        <p class="card-text py-2"><small class="text-muted"><?= $d['EVC_Title'] ?></small></p>
                                        <p class="event-time"><a class="ti-time mr-2"></a> <?= $d['EV_TimeStart'] ?> - <?= $d['EV_TimeEnd'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="container text-center py-2">
                        <h2> :( No Events are available</h2>
                    </div>
                <?php endif ?>

            </div>
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

<script>
    editSlider = (id) => {
        a = document.getElementById("sl_" + id);
        a = a.children;
        console.log(id);
        title = a[1].innerHTML;
        desription = a[2].innerHTML;

        document.getElementById("E_SL_Title").value = title;
        document.getElementById("E_SL_Description").value = desription;
        document.getElementById("sl_id").value = id;
        document.getElementById("remarksModal").click();

    }
</script>
<?php $this->endSection();  ?>