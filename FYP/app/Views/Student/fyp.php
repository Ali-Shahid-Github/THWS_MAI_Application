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
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
FYP
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->

    <section id="about " class="about pt-5">

        <?php if (session()->has('message')) :  ?>

            <div class="container col-6 py-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session('message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>

        <?php endif ?>

        <?php if (session()->has('error')) :  ?>

            <div class="container col-6 py-2">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>

        <?php endif ?>

        <div class="section-title text-center text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;" data-aos="fade-in ">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;">FYP</p>

        </div>

        <div class="container pt-2 text-justify col-md-10 " data-aos="zoom-in ">
            <h2 class="fw-bold text-center my-3">FYP Milestones and Evaluation Stages</h2>

            <div class="table-responsive-md col-md-8 mx-auto" style="font-family: roboto;">
                <span>The FYP milestones, deliverables, evaluation stages along with their timelines are given below.</span>
                <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top ">
                    <thead class="table-dark text-center align-middle">
                        <tr>
                            <th scope="col">Milestone</th>
                            <th scope="col">Time Line</th>
                        </tr>
                    </thead>
                    <tbody style="font-family: roboto; font-size:17px; font-weight:500">
                        <tr>
                            <td>Ideas Compilation</td>
                            <td>Before Summer</td>
                        </tr>
                        <tr>
                            <td>Idea Selection</td>
                            <td>Before Summer</td>
                        </tr>
                        <tr>
                            <td>Enrollment in Internship Program</td>
                            <td>Summer</td>
                        </tr>
                        <tr>
                            <td>Feasibility Study</td>
                            <td>Fall Semester</td>
                        </tr>
                        <tr>
                            <td>Requirement Engineering/Analysis</td>
                            <td>Fall Semester</td>
                        </tr>
                        <tr>
                            <td>Evaluation 1</td>
                            <td>Mid Fall Semester</td>
                        </tr>
                        <tr>
                            <td>Project Design/Partial Development</td>
                            <td>End Fall Semester</td>
                        </tr>
                        <tr>
                            <td>Evaluation 2/ Initial Demonstration</td>
                            <td>End of Fall Semester</td>

                        </tr>
                        <tr>
                            <td>Complete Development</td>
                            <td>Spring Semester</td>

                        </tr>
                        <tr>
                            <td>Evaluation 3/ Project Demonstration</td>
                            <td>Mid Spring Semester</td>

                        </tr>
                        <tr>
                            <td>Industrial Open House</td>
                            <td>Mid Spring Semester</td>

                        </tr>
                        <tr>
                            <td>Deployment/ KPI fulfill</td>
                            <td>Spring Semester</td>

                        </tr>
                        <tr>
                            <td>Evaluation 4/Project Expo</td>
                            <td>Post Mid Spring Semesterr</td>

                        </tr>
                        <tr>
                            <td>Thesis Submission</td>
                            <td>End of Spring Semester</td>

                        </tr>
                        <tr>
                            <td>Industrial Open House</td>
                            <td>Mid Spring Semester</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" text-center">
                <a href="<?= site_url("Home/fyp") ?>" class="btn btn-secondary" type="button">Complete details <i class="fas fa-arrow-right px-2 "></i> </a>
            </div>

            <hr>
            <h3>Projects Offered</h3>
            <p style="text-indent: 50px;">
                Login in to your FYP or select projects that offered for your selection and currently available to select.
            </p>

            <div class="container py-3 ">


                <div class="row py-2">
                    <div class="text-center ">
                        <?php if (session()->has('fypLogin') ? session('fypLogin') : false) : ?>
                            <a href=" <?= site_url("Student/fypHome") ?> " class="btn btn-success  py-3 " type="button">
                                Login FYP </a>

                        <?php else : ?>
                            <button class="btn btn-success py-3 " type="button" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">
                                Login FYP </button>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                    <?php if (count($data) > 0) : ?>

                        <div class="table-responsive-md">
                            <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top  ">
                                <caption>
                                    FYP Projects
                                </caption>
                                <thead class="table-dark text-center align-middle">
                                    <tr>

                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Supervisor</th>
                                        <th scope="col">Co-Supervisor</th>
                                        <th scope="col">Domain</th>
                                        <th scope="col">Category</th>

                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody class="font-weight-bold">

                                    <?php foreach ($data as $d) : ?>

                                        <tr>
                                            <td><?= $d['FYP_Title'] ?></td>
                                            <!-- <td class="text-truncate"><?= ''; //character_limiter($d['FYP_Description'], 20); 
                                                                            ?></td> -->
                                            <td class="overflowWrapEllipses" style="overflow: auto;"><?= $d['FYP_Description']; ?></td>
                                            <td><?= $d['FYP_Suprvisor'] ?></td>
                                            <td><?= $d['FYP_CoSupervisor'] ?></td>
                                            <td><?= $d['FYP_ProjectId'] ?></td>
                                            <td><?= $d['FYP_Type'] ?></td>

                                            <td> <a class="btn btn-success " style="cursor: pointer;" href="<?= site_url('Student/fypSelect/' . $d['FYP_Id'] . '') ?>">Select</span>
                                                </a>
                                            </td>


                                        </tr>

                                    <?php endforeach; ?>




                                </tbody>
                            </table>
                        </div>


                    <?php else : ?>
                        <div class="container text-center py-2">
                            <h2>No projects are available</h2>
                        </div>

                    <?php endif; ?>
                </div>

            </div>

            <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container" style="box-shadow:1px 1px 4px 2px rgb(116 116 116); background-color: #0E5359;">
                                <div class="row">
                                    <div class="col-md-12">

                                        <?= form_open("Student/fypLogin") ?>

                                        <div class="col-6 py-3 mx-auto" style="padding: 0;">
                                            <h5 class="text-white">Enter Your FYP login Credentials</h5>

                                            <div class="form-floating my-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="fypId">
                                                <label for="floatingInput">FYPID</label>

                                            </div>
                                            <div class="form-floating my-3">

                                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="fypPass">
                                                <label for="floatingPassword">Password</label>
                                            </div>


                                        </div>

                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-outline-warning" data-mdb-dismiss="modal">Close</button> -->
                                            <button class="btn btn-success" type="submit">Login</button>
                                        </div>
                                        </form>

                                    </div>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"> </script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>


<?php $this->endSection();  ?>