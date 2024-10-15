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

    .text-truncate {
        max-width: 300px;
    }

    .accordion-flush .accordion-item .accordion-button:hover {
        box-shadow: 2px 2px 10px 2px rgb(204, 204, 204);
        border-radius: 8px;
    }

    #eventSingle .col .item {
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        color: #1266f1;
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        border-radius: 0.5rem !important;
        overflow: hidden;
    }

    .accordion-body {
        border: 1px solid #d1d5da;
        border-radius: 5px;

    }

    .lightBorder {
        border: 1px solid #d1d5da;
        overflow: hidden;
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%) !important;
        border-radius: 10px;
        padding: 10px;
    }

    .remark-btn {
        background-color: #ef6603;
        color: white;
    }

    .remark-btn:hover {
        background-color: #d15a05;
        color: white;
    }

    .dropdownShadow{
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%); 
        border-radius: 0.5rem;
        vertical-align: middle;
    }
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
Suggestions
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;">
            <p style="color: white;">Suggestions</p>
            <h5 style="color: white;">Manage Suggestions here</h5>
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
                                Suggestions
                            </caption>
                            <thead class="table-dark text-center align-middle">
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Severity</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Give Feedback</th>

                                </tr>
                            </thead>
                            <tbody class="font-weight-bold">

                                <?php foreach ($data as $d) : ?>

                                    <tr id="sg_<?= $d['SG_Id'] ?>">

                                        <td><?= $d['SG_Title'] ?></td>
                                        <td class="text-truncate"><?= $d['SG_Desc'] ?></td>
                                        <td><?= date_format(date_create($d['SG_CreatedAt']), "M jS, Y") ?></td>
                                        <td><?= $d['SG_Severity'] ?></td>
                                        <td><?= $d['SGT_Title'] ?></td>
                                        <td class="d-none"><?= $d['SG_Type'] ?></td>

                                        <td><button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success" onclick="editSuggestion(<?= $d['SG_Id'] ?>)"><i style="color:#ffffff;" class="fas fa-plus fa-2x"></i></button></td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                <?php else : ?>
                    <div class="container text-center py-2">
                        <h2> ✅ No Suggestions are available</h2>
                    </div>

                <?php endif; ?>

            </div>

            <hr>


        </div>
        <div class="container col-10">
            <h2 class="eventUpcoming" id="up">Completed Suggestions</h2>
            <?php if (count($done) > 0) : ?>
                <div class="row row-cols-2 lightBorder">
                    <div class="col-md-6 mx-auto">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php foreach ($done as $d) : ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading<?= $d['SG_Id'] ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $d['SG_Id'] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $d['SG_Id'] ?>">
                                            <h4><?= $d['SG_Title'] ?></h4>
                                        </button>
                                    </h2>


                                    <div id="flush-collapse<?= $d['SG_Id'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $d['SG_Id'] ?>" data-bs-parent="#accordionFlushExample">

                                        <div class="accordion-body my-2">
                                            <div class="my-2">
                                                <a class="btn btn-info my-md-0 my-2" type="button" onclick='editRemark(<?= $d["SG_Id"] ?>,<?= "\"" ?><?= $d["SG_Title"] ?><?= "\"" ?> ,<?= "\"" ?><?= $d["SG_Remark"] ?><?= "\"" ?>)'>Edit</a>


                                                <span class="dropdown dropup ">
                                                    <span class="text-danger " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="btn btn-danger">Delete</span>
                                                    </span>
                                                    <ul class="dropdown-menu col-12 dropdownShadow" aria-labelledby="dropdownMenu2">

                                                        <div class="p-3">Are You Sure to Delete: <?= $d['SG_Title'] ?> ?</div>
                                                        <div class="modal-footer">
                                                            <a href="<?= site_url('Admin/deleteSuggestion/' . $d['SG_Id']) ?>" class="btn btn-outline-danger">Yes</a>
                                                            <a type="button" class="btn btn-info">No</a>
                                                        </div>

                                                    </ul>
                                                </span>
                                            </div>
                                            <h6> <b>Date:</b> <?= date_format(date_create($d['SG_DoneAt']), "M jS, Y") ?></h6>
                                            <h6> <b>Severity:</b> <?= $d['SG_Severity'] ?></h6>
                                            <h6> <b>Type:</b> <?= $d['SGT_Title'] ?></h6>
                                            <hr>
                                            <p> <strong>Feedback:</strong> <br><?= $d['SG_Remark'] ?></p>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="container text-center py-2">
                    <h4> There is no feedback on any suggesstion</h4>
                </div>

            <?php endif; ?>

        </div>
    </section>

    <span data-bs-toggle="modal" id="feedbackForm" data-bs-target="#staticBackdrop"></span>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span id="fd_title"></span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?= form_open("Admin/addSuggestion") ?>
                <div class="modal-body">
                    <input type="hidden" name="sg_Id" id="sg_Id"></input>
                    <div id="feedBackDetailDiv">Details: <p id="fd_detail"></p>
                        <hr>
                    </div>

                    <div class="form-floating py-2">
                        <textarea class="form-control" placeholder=" " name="desc" id="desc" rows="90"></textarea>
                        <label for="desc">Feedback</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="modalAdd">Save</button>
                </div>
                </form>
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

<script>
    editSuggestion = (id) => {
        a = document.getElementById("sg_" + id);
        a = a.children;
        console.log(id);
        title = a[0].innerHTML;
        desription = a[1].innerHTML;


        document.getElementById("feedBackDetailDiv").innerHTML = 'Details: <p id="fd_detail"></p><hr>';
        document.getElementById("fd_title").innerHTML = title;
        document.getElementById("fd_detail").innerHTML = desription;
        document.getElementById("sg_Id").value = id;
        // document.getElementById("remarksModal").click();
        console.log(id);

    }

    editRemark = (id, title, remark) => {
        // console.log(title);
        document.getElementById("fd_title").innerHTML = 'Edit Feedback - ' + title;
        document.getElementById("feedBackDetailDiv").innerHTML = "";
        document.getElementById("sg_Id").value = id;
        document.getElementById("desc").innerHTML = remark;
        document.getElementById("feedbackForm").click();
        console.log(remark);

    }
</script>
<?php $this->endSection();  ?>