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
    body {
        font-family: "Open Sans", sans-serif;
        color: #2f2f2f;
        /* background: #f1f1f1; */
    }

    .row1 {
        text-align: center;
    }

    h6 {
        font-weight: bold;
    }

    /* p {
                padding: 10px;
            } */

    a:hover,
    a:focus {
        text-decoration: none;
        outline: none;
    }

    .imgFaculty {
        border-radius: 3%;
        object-fit: cover;
        max-width: 50%;
    }

    @media screen and (max-width: 450px) {
        .imgFaculty {
            max-width: 85%;
        }
    }

    @media screen and (min-width: 750px) {
        .imgFaculty {
            max-width: 45%;
        }
    }

    @media screen and (min-width: 762px) {
        .imgFaculty {
            max-width: 95%;
        }
    }

    @media screen and (min-width: 998px) {
        .imgFaculty {
            max-width: 80%;
        }
    }

    * {
        box-sizing: border-box;
    }

    /* Container for flexboxes */

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    /* Create four equal columns */

    .column {
        flex: 25%;
        padding: 20px 10px 20px 20px;
    }

    @media screen and (max-width: 992px) {
        .column {
            flex: 50%;
        }
    }

    @media screen and (max-width: 600px) {
        .row {
            flex-direction: column;
        }
    }

    .cont {
        color: black;
        border: none;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        box-shadow: 5px 5px 8px #2a2c39;
        background-color: rgb(231, 231, 231);
        text-align: justify;
    }

    .cont:hover {
        border: 1px solid #2a2c39;
        box-shadow: 5px 5px 12px #2a2c39;
    }

    .container {
        /* box-shadow: 2px 2px 8px rgb(78, 78, 78); */
        padding: 20px;
        /* background-color: #0E5359; */
        /* color: white; */
    }

    .nav-tabs .nav-link {
        color: orange;
    }

    .card-body {
        padding: 0 !important;
    }

    .card {
        border: 1px solid #d1d5da;
        padding: 0;
        /* max-width: 540px; */
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
        /* height: 100%; */
        background-position: center;
    }
    .size {
        font-size: 16px !important;
    }
</style>
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
<?= session('user')['FC_Name'] ?> | Profile
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <section id="about " class="about pt-5">
        <div class="section-title " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">

            <p style="color: white;">Profile</p>
            <h5 style="color: white;">Manage Your Public Profile</h5>
        </div>

        <div class="container py-3 ">
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

                <?php if (session()->has('errors')) :  ?>

                    <div class="container col-6 my-2">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php
                            foreach (session('errors') as $key => $val) {
                                echo preg_replace('/FE_/', '', $key) . ': ' . $val;
                                echo "<br>";
                            }
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>


                <?php endif ?>

                <div class="container">
                    <div class="card mb-3 mx-2">
                        <div class="row g-0 ">
                            <div class="col-md-5 hover-overlay ripple d-flex align-items-center justify-content-center p-3" data-mdb-ripple-color="light">
                                <img src="<?= site_url(session('user')['FC_Photo']) ?>" alt=" <?= session('user')['FC_Name'] ?>" class="mx-auto my-auto imgFaculty img-fluid ">
                            </div>
                            <!-- <div class="col-5 facultyImage hover-overlay ripple" style="background-image: url();" data-mdb-ripple-color="light"> </div> -->
                            <div class="col-md-7 px-4 pt-3">
                                <div class="card-body mx-auto text-black">
                                    <h6 class="text-black">
                                        <?= $facRank ?>
                                    </h6>

                                    <h4 class="fw-bold text-truncate">
                                        <?= session('user')['FC_Name'] ?>
                                    </h4>

                                    <hr>

                                    <p class="card-text"><?= session('user')['FC_Domain'] ?></p>
                                    <p class="text-black ">
                                        <a class="bi bi-geo-alt-fill"> </a>
                                        <?= session('user')['FC_Office'] ?>
                                    </p>
                                    <p class="text-black ">
                                        <a class="bi bi-telephone"> </a>
                                        <?= session('user')['FC_Phone'] ?>
                                    </p>
                                    <p class="text-black ">
                                        <a class="bi bi-envelope"> </a>
                                        <?= session('user')['FC_Email'] ?>
                                    </p>
                                    <hr>

                                    <p class="text-black ">
                                        <a class="fas fa-people-arrows"> </a>
                                        <?= session('user')['FC_AvailableHour'] ?>
                                    </p>

                                </div>
                            </div>
                            <div class="px-4 my-4">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link size  active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                            Biblography
                                        </button>

                                        <button class="nav-link size" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                            Area of Interest
                                        </button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">                                 
                                        <div class="container">
                                        <div class="text-start">
                                            <button data-bs-toggle="modal" data-bs-target="#educationDataModal" class="btn btn-success my-3" id="educationModal"><i style="color:#ffffff;" class="fas fa-plus fa-2x"></i></button>
                                        </div>
                                            <?php if (count($edu) > 0) : ?>
                                                <?php foreach ($edu as $data) : ?>
                                                    <hr>
                                                    <div class="" id="ed_<?= $data['FE_Id'] ?>">
                                                        <span><?= ($data['FE_Title']) ?></span> , <span><?= ($data['FE_Year']) ?></span>
                                                        <br>
                                                        <span><?= ($data['FE_Uni']) ?></span> <span>(</span> <span><?= ($data['FE_Loc']) ?></span> <span> )</span>
                                                        <br>
                                                        <?php

                                                        if ($data["FC_Id"] == session("user")["FC_Id"]) {
                                                            echo '
                                                                                <a class=" btn btn-info my-2" onclick="editEdu(' . $data['FE_Id'] . ')">Edit</a> 
                                                                                
                                                                                <a class="btn btn-danger mx-md-2 mx-0 my-2" href="' . site_url("Faculty/delete_education/" . $data['FE_Id']) . '">Delete</a>';
                                                        }

                                                        ?>
                                                    </div>

                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <div class="container text-center py-2">
                                                    <h5>No Education details are available</h5>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="container text-black">
                                            <div class="text-start">
                                                <button data-bs-toggle="modal" data-bs-target="#areaOfInterestDataModal" class="btn btn-success my-3" id="AreaInterestModal"><i style="color:#ffffff;" class="fas fa-plus fa-2x"></i></button>
                                            </div>
                                            <hr>
                                            <h4>Area of Interests</h4>

                                            <div class="container">
                                                <ul>
                                                    <?php if (count($fai) > 0) : ?>
                                                        <?php foreach ($fai as $data) : ?>

                                                            <div id="interestArea_<?= $data['FAI_Id'] ?>">

                                                                <li><?= $data['AI_Item'] ?></li>

                                                                <?php

                                                                if ($data["FC_Id"] == session("user")["FC_Id"]) {
                                                                    echo '
                                                                                        <a class="btn btn-info my-2" onclick="editAI(' . $data['FAI_Id'] . ')">Edit</a> 
                                                                                        
                                                                                        <a class="btn btn-danger mx-md-2 mx-0 my-2" href="' . site_url("Faculty/delete_interest/" . $data['FAI_Id']) . '">Delete</a>';
                                                                }

                                                                ?>
                                                            </div>

                                                        <?php endforeach; ?>
                                                    <?php else : ?>
                                                        <div class="container text-center py-2">
                                                            <h5>No Area of Interests are available</h5>
                                                        </div>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="modal fade" id="educationDataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="educationDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="educationDataModalLabel">Add Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?= form_open("Faculty/add_education") ?>
                <div class="modal-body">

                    <input type="hidden" name="fe_id" id="fe_id"></input>
                    <div class="form-floating my-2">
                        <input type="text" class="form-control" placeholder="B.S. (Computer Science)" id="FE_Title" required name="fe_title" onkeypress="return check(event)" value="B.S. (Computer Science)"></input>
                        <label for="FE_Title">Title</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="text" class="form-control" placeholder=" " id="FE_Uni" required name="fe_uni" onkeypress="return check(event)" value="University of Engineering and Technology"></input>
                        <label for="FE_Uni">University</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="text" class="form-control" placeholder=" " id="FE_Loc" name="fe_loc" onkeypress="return checkLoc(event)" value="Lahore, Pakistan"></input>
                        <label for="FE_Loc">Location</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="number" class="form-control" id="FE_Year" name="year" required placeholder=" " onkeypress="return checkDate(event)" value="2015">
                        <label for="fe_year">Year</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FE_Year'); ?>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="modalAdd">Save</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <div class="modal fade" id="areaOfInterestDataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="areaOfInterestDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areaOfInterestDataModalLabel">Add Area of Interest</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?= form_open("Faculty/add_interest") ?>
                <div class="modal-body">
                    <input type="hidden" name="fai_id" id="fai_id"></input>
                    <div class="form-floating my-2">
                        <input type="text" class="form-control" placeholder="Big Data" id="AI_Item" required name="ai_item" onkeypress="return check(event)" value="Big Data"></input>
                        <label for="FE_Title">Area Of Interest</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="modalAddInterest">Save</button>
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
        document.getElementById("educationModal").click();

    }


    check = (event) => {
        let res = event.charCode === 0 || /^[A-Za-z0-9-_.,:\(\)\\\/ ]+$/i.test(String.fromCharCode(event.charCode));
        if (res) {
            event.srcElement.style = "border:1px solid #1266f1;";
            return true;
        } else {
            event.srcElement.style = "border:2px solid red";

            return false;
        }


    }
    checkLoc = (event) => {
        let res = event.charCode === 0 || /^[A-Za-z0-9-_., ]+$/i.test(String.fromCharCode(event.charCode));
        if (res) {
            event.srcElement.style = "border:1px solid #1266f1;";
            return true;
        } else {
            event.srcElement.style = "border:2px solid red";

            return false;
        }
    }

   

    checkDate = (event) => {

        let res = event.charCode === 0 || /^[\d]+$/i.test(String.fromCharCode(event.charCode));
        if (res) {
            event.srcElement.style = "border:1px solid #1266f1;";
            return true;
        } else {
            event.srcElement.style = "border:2px solid red";

            return false;
        }


    }

    editEdu = (id) => {
        a = document.getElementById("ed_" + id);
        a = a.children;
        title = a[0].innerHTML;
        year = a[1].innerHTML;
        Uni = a[3].innerHTML;
        loc = a[5].innerHTML;

        document.getElementById("FE_Title").value = title;
        document.getElementById("FE_Year").value = year;
        document.getElementById("FE_Loc").value = loc;
        document.getElementById("FE_Uni").value = Uni;
        document.getElementById("fe_id").value = id;
        document.getElementById("educationModal").click();


    }

    editAI = (id) => {
        a = document.getElementById("interestArea_" + id);
        a = a.children;
        title = a[0].innerHTML;
       
        document.getElementById("AI_Item").value = title;
        document.getElementById("fai_id").value = id;
        document.getElementById("AreaInterestModal").click();
    }
</script>
<?php $this->endSection();  ?>