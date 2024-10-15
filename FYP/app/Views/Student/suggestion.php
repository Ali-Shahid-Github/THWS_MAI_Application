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
            <h5 style="color: white;">Manage Your Suggestions here</h5>
        </div>


        <div class="container py-3 ">
            <div class="row py-2">
                <div class="text-center ">
                    <a href=" <?= site_url("Student/addSuggestion") ?> " class="btn btn-info  py-3 " type="button">
                        Add Suggestion <span class="fas fa-plus px-2 fa-lg"></span></a>
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
                                Suggestions
                            </caption>
                            <thead class="table-dark text-center align-middle">
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Severity</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">is Replied</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="font-weight-bold">
                                <?php foreach ($data as $d) : ?>
                                    <tr id="sg_<?= $d['SG_Id'] ?>">

                                        <td><?= $d['SG_Title'] ?></td>
                                        <td><?= $d['SG_Desc'] ?></td>
                                        <td><?= date_format(date_create($d['SG_CreatedAt']), "M jS, Y") ?></td>
                                        <td><?= $d['SG_Severity'] ?></td>
                                        <td><?= $d['SGT_Title'] ?></td>
                                        <td><?= ($d['SG_isDone'])? 'Yes': 'No' ?></td>
                                        <td class="d-none"><?= $d['SG_Type'] ?></td>
                                        

                                        <td>
                                            <div class="modal-footer" style="border: none;">
                                                <a class="text-success " style="cursor: pointer;" onclick="editSlider('<?= $d['SG_Id'] ?>')"> <span class="fas fa-pencil-alt fa-lg"></span>
                                                </a>


                                                <span class="dropdown dropup px-1 px-md-0">
                                                    <span class="text-danger " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="fas fa-trash-alt fa-lg "></span>
                                                    </span>
                                                    <ul class="dropdown-menu col-12" style=" box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%); border-radius: 0.5rem;" aria-labelledby="dropdownMenu2">

                                                        <div class="p-3">Are You Sure to Delete: <?= $d['SG_Title'] ?> ?</div>
                                                        <div class="modal-footer">
                                                            <a href="<?= site_url('Student/deleteSuggestion/' . $d['SG_Id'] . '/') ?>" class="btn btn-outline-danger">Yes</a>
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

                <?php else : ?>
                    <div class="container text-center py-2">
                        <h2> ✅ No Suggestions are available</h2>
                    </div>

                <?php endif; ?>

            </div>

            <hr>

            <h2 class="eventUpcoming" id="up">Aknowledged Suggestions</h2>
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
                                            <h6> <b>Date:</b>  <?= date_format(date_create($d['SG_DoneAt']), "M jS, Y")?></h6>
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

        <span class="d-inline float-end">
            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="remarksModal"></a>
        </span>

    </section>




    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Suggestion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?= form_open("Student/addSuggestion")  ?>
                <div class="modal-body">

                    <input type="hidden" name="sg_id" id="sg_id"></input>

                    <div class="form-floating my-2">
                        <input type="text" class="form-control" placeholder=" " id="E_SG_Title" required name="title"></input>
                        <label for="E_SG_Title">Title</label>
                    </div>

                    <div class="form-floating my-2">
                        <input type="text" class="form-control" placeholder=" " id="E_SG_Description" name="desc"></input>
                        <label for="E_SG_Description">Description</label>
                    </div>

                    <div class="form-floating my-2">
                        <select class="form-select" id="floatingInput2" required name="type" aria-label="Floating label select example">
                            <?php
                            foreach ($sgt as $t) {
                                echo  "<option value=\"" . $t['SGT_Id'] . "\">" . $t["SGT_Title"] . "</option> \n\t\t\t\t";
                            }
                            ?>
                        </select>
                        <label for="floatingInput2">Type</label>
                    </div>

                    <div class="form-floating my-2">
                        <select class="form-select" id="floatingInput3" required name="severity" aria-label="Floating label select example">

                            <option value="High" selected>High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>

                        </select>
                        <label for="floatingInput3">Type</label>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="modalAdd">Edit</button>
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
    editSlider = (id) => {
        a = document.getElementById("sg_" + id);
        a = a.children;
        console.log(id);
        title = a[0].innerHTML;
        desription = a[1].innerHTML;
        sev = a[3].innerHTML;
        type = a[6].innerHTML;

        console.log(type);
        document.getElementById("E_SG_Title").value = title;
        document.getElementById("E_SG_Description").value = desription;
        document.getElementById("sg_id").value = id;
        document.getElementsByName('severity')[0].value = sev
        document.getElementsByName('type')[0].value = type
        document.getElementById("remarksModal").click();

    }
</script>
<?php $this->endSection();  ?>