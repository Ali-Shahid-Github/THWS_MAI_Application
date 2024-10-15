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
    body {
        background: #f7f7f7;

    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
    }

    .side-stick {
        position: absolute;
        width: 3px;
        height: 60px;
        left: 0;
        /* top: 40%; */
        background-color: orange
    }

    .modal-footer {
        flex-wrap: nowrap;
        align-content: space-around;
        justify-content: space-around;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.57rem;
    }

    .nav-pills {
        display: flex;
        flex-direction: row;
        justify-content:center;
        align-items: center;
        background-color: #a7a7a7;
        border-radius: 5px;
       
        /* width: 100%; */
    }

    .nav-link{
        letter-spacing: 2px !important;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        /* transition: all ease 0.5s; */
        color: #fff;
        background-color: #e7770f;
        font-size: 16px;
        font-family: 'Roboto';
        transition: all 0.6s;
        
    }

    .nav-pills .nav-link {
        font-family: 'Roboto';
        color: black;

        font-size: 14px;
    }

    .note-has-grid .nav-link {
        padding: .5rem;

    }

    .note-date {
        font-style: italic;
        text-align: right;
    }

    .note-has-grid .single-note-item .card {
        border-radius: 10px
    }

    #eventSingle .col .item {
        box-shadow: none;
    }

    .accordion-header {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%);
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .accordion-item,
    .accordion-item h5 {
        border: 0;
        font-family: "Raleway", sans-serif !important;

    }

    .accordion-header:hover {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 50%), 0 2px 6px 2px rgb(60 64 67 / 45%);

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
Notices
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">

    <div class="py-4 container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Time table</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">DateSheet</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-scholarship-tab" data-bs-toggle="pill" data-bs-target="#pills-scholarship" type="button" role="tab" aria-controls="pills-scholarship" aria-selected="false">Scholarship</button>
            </li>
        </ul>

        <?php if (count($data) > 0) : ?>

            <div class="tab-content " id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row row-cols-1 " id="eventSingle">
                        <div class="col">

                            <div class="accordion accordion-flush" id="accord_1">

                                <?php foreach ($data as $d) : ?>

                                    <?php if (
                                        $d['NBC_Title'] != 'DateSheet' &&
                                        $d['NBC_Title'] != 'TimeTable' &&
                                        $d['NBC_Title'] != 'Scholarship'
                                    ) : ?>

                                        <div class="accordion-item my-2 ">
                                            <h2 class="accordion-header" id="flush-heading_<?= $d['NB_ID'] ?>">
                                                <div class="accordion-button collapsed  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_<?= $d['NB_ID'] ?>" aria-expanded="false" aria-controls="flush-collapse_<?= $d['NB_ID'] ?>">
                                                    <h5 class="note-title text-truncate w-100 mb-0 fw-bold">
                                                        <?= $d['NB_Title'] ?>
                                                    </h5>


                                                    <a class="text-primary mx-3 " style="cursor: pointer;" href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">
                                                        <h5><span class="fas fa-download"></span></h5>

                                                    </a>

                                                </div>
                                            </h2>
                                            <div id="flush-collapse_<?= $d['NB_ID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading_<?= $d['NB_ID'] ?>" data-bs-parent="#accord_1">

                                                <div class="accordion-body my-2">

                                                    <div class="  ">
                                                        <h5 class="note-title mb-0 fw-bold">
                                                            <?= $d['NBC_Title'] ?></h5>


                                                        <span class="note-date font-12 fw-bold">
                                                            <?= date_format(date_create($d['NB_CreatedAt']), "M jS, Y G:i")  ?>
                                                        </span>
                                                        <hr>
                                                        <p class="note-inner-content">
                                                            <?= $d['NB_Description'] ?>
                                                        </p>

                                                        <hr>
                                                        <?php
                                                        $z = explode('.', $d['NB_Attachment']);
                                                        ?>
                                                        <?php if (end($z) == 'pdf') : ?>
                                                            <h6> Attachment:</h6>

                                                            <a href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">Click to download file </a>
                                                        <?php else : ?>
                                                            <h6> Attachment</h6>
                                                            <img loading="lazy" src="<?= site_url($d['NB_Attachment']) ?>" class="img-fluid"></img>
                                                        <?php endif; ?>




                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?>


                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <div class="row row-cols-1 " id="eventSingle">
                        <div class="col">

                            <div class="accordion accordion-flush" id="accord_1">

                                <?php foreach ($data as $d) : ?>

                                    <?php if ($d['NBC_Title'] == 'TimeTable') : ?>

                                        <div class="accordion-item my-2 ">
                                            <h2 class="accordion-header" id="flush-heading_<?= $d['NB_ID'] ?>">
                                                <div class="accordion-button collapsed  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_<?= $d['NB_ID'] ?>" aria-expanded="false" aria-controls="flush-collapse_<?= $d['NB_ID'] ?>">
                                                    <h5 class="note-title text-truncate w-100 mb-0 fw-bold">
                                                        <?= $d['NB_Title'] ?>
                                                    </h5>


                                                    <a class="text-primary mx-3 " style="cursor: pointer;" href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">
                                                        <h5><span class="fas fa-download"></span></h5>

                                                    </a>

                                                </div>
                                            </h2>
                                            <div id="flush-collapse_<?= $d['NB_ID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading_<?= $d['NB_ID'] ?>" data-bs-parent="#accord_1">

                                                <div class="accordion-body my-2">

                                                    <div class="  ">
                                                        <h5 class="note-title mb-0 fw-bold">
                                                            <?= $d['NBC_Title'] ?></h5>


                                                        <span class="note-date font-12 fw-bold">
                                                            <?= date_format(date_create($d['NB_CreatedAt']), "M jS, Y G:i")  ?>
                                                        </span>
                                                        <hr>
                                                        <p class="note-inner-content">
                                                            <?= $d['NB_Description'] ?>
                                                        </p>

                                                        <hr>
                                                        <?php
                                                        $z = explode('.', $d['NB_Attachment']);
                                                        ?>
                                                        <?php if (end($z) == 'pdf') : ?>
                                                            <h6> Attachment:</h6>

                                                            <a href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">Click to download file </a>
                                                        <?php else : ?>
                                                            <h6> Attachment</h6>
                                                            <img loading="lazy" src="<?= site_url($d['NB_Attachment']) ?>" class="img-fluid"></img>
                                                        <?php endif; ?>




                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?>


                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                    <div class="row row-cols-1 " id="eventSingle">
                        <div class="col">

                            <div class="accordion accordion-flush" id="accord_1">

                                <?php foreach ($data as $d) : ?>

                                    <?php if ($d['NBC_Title'] == 'DateSheet') : ?>

                                        <div class="accordion-item my-2 ">
                                            <h2 class="accordion-header" id="flush-heading_<?= $d['NB_ID'] ?>">
                                                <div class="accordion-button collapsed  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_<?= $d['NB_ID'] ?>" aria-expanded="false" aria-controls="flush-collapse_<?= $d['NB_ID'] ?>">
                                                    <h5 class="note-title text-truncate w-100 mb-0 fw-bold">
                                                        <?= $d['NB_Title'] ?>
                                                    </h5>


                                                    <a class="text-primary mx-3 " style="cursor: pointer;" href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">
                                                        <h5><span class="fas fa-download"></span></h5>

                                                    </a>

                                                </div>
                                            </h2>
                                            <div id="flush-collapse_<?= $d['NB_ID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading_<?= $d['NB_ID'] ?>" data-bs-parent="#accord_1">

                                                <div class="accordion-body my-2">

                                                    <div class="  ">
                                                        <h5 class="note-title mb-0 fw-bold">
                                                            <?= $d['NBC_Title'] ?></h5>


                                                        <span class="note-date font-12 fw-bold">
                                                            <?= date_format(date_create($d['NB_CreatedAt']), "M jS, Y G:i")  ?>
                                                        </span>
                                                        <hr>
                                                        <p class="note-inner-content">
                                                            <?= $d['NB_Description'] ?>
                                                        </p>

                                                        <hr>
                                                        <?php
                                                        $z = explode('.', $d['NB_Attachment']);
                                                        ?>
                                                        <?php if (end($z) == 'pdf') : ?>
                                                            <h6> Attachment:</h6>

                                                            <a href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">Click to download file </a>
                                                        <?php else : ?>
                                                            <h6> Attachment</h6>
                                                            <img loading="lazy" src="<?= site_url($d['NB_Attachment']) ?>" class="img-fluid"></img>
                                                        <?php endif; ?>




                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?>


                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                    <div class="row row-cols-1 " id="eventSingle">
                        <div class="col">

                            <div class="accordion accordion-flush" id="accord_1">

                                <?php foreach ($data as $d) : ?>

                                    <?php if ($d['NBC_Title'] == 'DateSheet') : ?>

                                        <div class="accordion-item my-2 ">
                                            <h2 class="accordion-header" id="flush-heading_<?= $d['NB_ID'] ?>">
                                                <div class="accordion-button collapsed  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_<?= $d['NB_ID'] ?>" aria-expanded="false" aria-controls="flush-collapse_<?= $d['NB_ID'] ?>">
                                                    <h5 class="note-title text-truncate w-100 mb-0 fw-bold">
                                                        <?= $d['NB_Title'] ?>
                                                    </h5>


                                                    <a class="text-primary mx-3 " style="cursor: pointer;" href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">
                                                        <h5><span class="fas fa-download"></span></h5>

                                                    </a>

                                                </div>
                                            </h2>
                                            <div id="flush-collapse_<?= $d['NB_ID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading_<?= $d['NB_ID'] ?>" data-bs-parent="#accord_1">

                                                <div class="accordion-body my-2">

                                                    <div class="  ">
                                                        <h5 class="note-title mb-0 fw-bold">
                                                            <?= $d['NBC_Title'] ?></h5>


                                                        <span class="note-date font-12 fw-bold">
                                                            <?= date_format(date_create($d['NB_CreatedAt']), "M jS, Y G:i")  ?>
                                                        </span>
                                                        <hr>
                                                        <p class="note-inner-content">
                                                            <?= $d['NB_Description'] ?>
                                                        </p>

                                                        <hr>
                                                        <?php
                                                        $z = explode('.', $d['NB_Attachment']);
                                                        ?>
                                                        <?php if (end($z) == 'pdf') : ?>
                                                            <h6> Attachment:</h6>

                                                            <a href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">Click to download file </a>
                                                        <?php else : ?>
                                                            <h6> Attachment</h6>
                                                            <img loading="lazy" src="<?= site_url($d['NB_Attachment']) ?>" class="img-fluid"></img>
                                                        <?php endif; ?>




                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?>


                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="pills-scholarship" role="tabpanel" aria-labelledby="pills-scholarship-tab">

                    <div class="row row-cols-1 " id="eventSingle">
                        <div class="col">

                            <div class="accordion accordion-flush" id="accord_1">

                                <?php foreach ($data as $d) : ?>

                                    <?php if ($d['NBC_Title'] == 'Scholarship') : ?>

                                        <div class="accordion-item my-2 ">
                                            <h2 class="accordion-header" id="flush-heading_<?= $d['NB_ID'] ?>">
                                                <div class="accordion-button collapsed  " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_<?= $d['NB_ID'] ?>" aria-expanded="false" aria-controls="flush-collapse_<?= $d['NB_ID'] ?>">
                                                    <h5 class="note-title text-truncate w-100 mb-0 fw-bold">
                                                        <?= $d['NB_Title'] ?>
                                                    </h5>


                                                    <a class="text-primary mx-3 " style="cursor: pointer;" href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">
                                                        <h5><span class="fas fa-download"></span></h5>

                                                    </a>

                                                </div>
                                            </h2>
                                            <div id="flush-collapse_<?= $d['NB_ID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading_<?= $d['NB_ID'] ?>" data-bs-parent="#accord_1">

                                                <div class="accordion-body my-2">

                                                    <div class="  ">
                                                        <h5 class="note-title mb-0 fw-bold">
                                                            <?= $d['NBC_Title'] ?></h5>


                                                        <span class="note-date font-12 fw-bold">
                                                            <?= date_format(date_create($d['NB_CreatedAt']), "M jS, Y G:i")  ?>
                                                        </span>
                                                        <hr>
                                                        <p class="note-inner-content">
                                                            <?= $d['NB_Description'] ?>
                                                        </p>

                                                        <hr>
                                                        <?php
                                                        $z = explode('.', $d['NB_Attachment']);
                                                        ?>
                                                        <?php if (end($z) == 'pdf') : ?>
                                                            <h6> Attachment:</h6>

                                                            <a href="<?= site_url('Student/downloadAttachment/?file=' . $d['NB_Attachment'] . '') ?>">Click to download file </a>
                                                        <?php else : ?>
                                                            <h6> Attachment</h6>
                                                            <img loading="lazy" src="<?= site_url($d['NB_Attachment']) ?>" class="img-fluid"></img>
                                                        <?php endif; ?>




                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?>


                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>


                </div>




            <?php else : ?>
                <div class="container text-center">
                    <h2>No Notice found/h2>
                </div>

            <?php endif; ?>


            </div>


    </div>

    <div class="modal fade  " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class=" modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="modalTitle"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <h2 class="" id="modalNoticeType"></h2>
                    <hr>

                    <h5 class="text-muted">Description:</h5>
                    <h3 class="col" id="modalDescription"></h3>

                    <hr>


                    <h6 id="modalAnn"></h6>
                    <iframe src="" style="height: 90vh; width:55vw" id="modalIframe"></iframe>

                </div>

            </div>
        </div>
    </div>

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

<script>
    showData = (id, li) => {





        let temp = li.split('.');
        if (temp[temp.length - 1] == 'pdf') {
            var frame = document.getElementById('modalIframe_' + id);
            frame.style.maxheight = '5vh;';
            frame.setAttribute('src', "");

            document.getElementById('modalAnn_' + id).innerHTML = "Annoucement: <br>Check Your Downloads folder";




        } else {
            document.getElementById('modalAnn_' + id).innerHTML = "Annoucement:";
            document.getElementById('modalIframe_' + id).setAttribute('src', "<?= site_url() ?>" + li)

        }






    }
</script>

<?php $this->endSection();  ?>