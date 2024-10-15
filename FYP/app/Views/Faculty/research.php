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

    .card .col-4 {
        margin: auto;
    }

    .facultyImage {
        background-size: cover;
        height: 100%;
        background-position: center;
    }

    .modal-footer {
        flex-wrap: nowrap;
        align-content: space-around;
        justify-content: space-around;
    }

    .overlayText {

        overflow: overlay;
        text-overflow: none;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
Research
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <section id="about " class="about pt-5">
        <div class="section-title " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">

            <p style="color: white;">Research</p>
            <h5 style="color: white;">Add Research to the System</h5>
        </div>

        <div class="container py-3 ">
            <div class="row py-2">
                <div class="text-center ">
                    <a href=" <?= site_url("Faculty/addResearch") ?> " class="btn btn-info  py-3 " type="button">
                        Add Research <span class="fas fa-plus px-2 fa-lg"></span></a>
                </div>
            </div>

            <div class="row">
                <?php if (session()->has('message')) :  ?>

                    <div class="container col-6 my-2">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session('message') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>

                <?php endif ?>

                <?php if (session()->has('error')) :  ?>

                    <div class="container col-6 my-2">
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
                                Research
                            </caption>
                            <thead class="table-dark text-center align-middle">
                                <tr>
                                    <!-- <th scope="col">Image</th> -->
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Journal</th>
                                    <th scope="col">Authors</th>
                                    <th scope="col">DOI</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="font-weight-bold">

                                <?php foreach ($data as $d) : ?>

                                    <tr id="rs_<?= $d['RS_Id'] ?>">
                                        <td class="text-truncate" style="max-width: 200px;"> <a href="/Home/researchDetail/<?= $d['RS_Id'] ?> " style="color:black"><?= $d['RS_Title'] ?></a></td>
                                        <td class="overlayText" style="max-width: 300px; height: 30vh;"> <?= $d['RS_Desc'] ?> </td>

                                        <td> <?= $d['RS_Category'] ?> </td>
                                        <td> <?= $d['RS_Year'] ?> </td>

                                        <td><?= $d['RS_Journal'] ?></td>
                                        <td style="min-width: 150px; padding: 5px 0" class="text-start">

                                            <ul class="mb-0">
                                                <?php

                                                $a = explode(',', $d['RS_Authors']);

                                                foreach ($a as $b) {
                                                    echo '<li>' . $b . '</li>';
                                                } ?>
                                            </ul>
                                        </td>

                                        <td> <?= $d['RS_DOI'] ?> </td>
                                        <td>

                                            <div class="modal-footer" style="border: none;">
                                                <a class="text-success " href="<?= site_url('Faculty/addResearch/' . $d['RS_Id']) ?>" style="cursor: pointer;">
                                                    <span class="fas fa-pencil-alt fa-lg"></span>
                                                </a>


                                                <span class="dropdown dropup px-1 px-md-0">
                                                    <span class="text-danger " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="fas fa-trash-alt fa-lg "></span>
                                                    </span>
                                                    <ul class="dropdown-menu col-12" style=" box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%); border-radius: 0.5rem;" aria-labelledby="dropdownMenu2">

                                                        <div class="p-3">Are You Sure to Delete <?= $d['RS_Title'] ?> ?</div>
                                                        <div class="modal-footer">
                                                            <a href="<?= site_url('Faculty/deleteResearch/' . $d['RS_Id'] . '/') ?>" class="btn btn-outline-danger">Yes</a>
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
                <h2>No Research details are available</h2>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?= form_open("Staff/addSlider", ['enctype' => 'multipart/form-data'])  ?>
                <div class="modal-body">
                    <input type="hidden" name="sl_id" id="sl_id"></input>
                    <div class="form-floating py-2">
                        <input type="text" class="form-control" placeholder=" " id="E_SL_Title" required name="title"></input>
                        <label for="E_SL_Title">Title</label>
                    </div>
                    <div class="form-floating py-2">
                        <input type="text" class="form-control" placeholder=" " id="E_SL_Description" name="desc"></input>
                        <label for="E_SL_Description">Description</label>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="form-floating">
                                <div class="input-group ">
                                    <input type="file" class="form-control  pt-2" id="thumbnail" style="font-size: 16px; height: 42px;" name="thumbnail">
                                    <label class="input-group-text text-white " style="background-color: #e46e29; " for="thumbnail">Thumbnail</label>
                                </div>
                                <p class="text-danger">
                                    <?php echo getErrorMessage('errors', 'SL_Image'); ?>
                                </p>
                            </div>
                        </div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

<script>
    editResearch = (id) => {
        a = document.getElementById("rs_" + id);
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