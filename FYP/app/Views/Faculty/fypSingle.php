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

    .timeline {
        margin-bottom: 50px;
        position: relative;
    }

    .timeline:before {
        background-color: #dee2e6;
        bottom: 0;
        content: "";
        left: 50%;
        position: absolute;
        top: 30px;
        width: 2px;
        z-index: 0;
    }

    .timeline .time-show {
        margin-bottom: 30px;
        margin-top: 30px;
        position: relative;
    }

    .timeline .timeline-box {
        background: #fff;
        display: block;
        margin: 15px 0;
        position: relative;
        padding: 20px;
    }

    .timeline .timeline-album {
        margin-top: 12px;
    }

    .timeline .timeline-album a {
        display: inline-block;
        margin-right: 5px;
    }

    .timeline .timeline-album img {
        height: 36px;
        width: auto;
        border-radius: 3px;
    }

    @media (min-width: 768px) {
        .timeline .time-show {
            margin-right: -69px;
            text-align: right;
        }

        .timeline .timeline-box {
            margin-left: 45px;
        }

        .timeline .timeline-icon {
            background: #dee2e6;
            border-radius: 50%;
            display: block;
            height: 20px;
            left: -54px;
            margin-top: -10px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 20px;
        }

        .timeline .timeline-icon i {
            color: #98a6ad;
            font-size: 13px;
            position: absolute;
            left: 4px;
        }

        .timeline .timeline-desk {
            display: table-cell;
            vertical-align: top;
            width: 50%;
        }

        .timeline-item {
            display: table-row;
        }

        .timeline-item:before {
            content: "";
            display: block;
            width: 50%;
        }

        .timeline-item .timeline-desk .arrow {
            border-bottom: 12px solid transparent;
            border-right: 12px solid #fff !important;
            border-top: 12px solid transparent;
            display: block;
            height: 0;
            left: -12px;
            margin-top: -12px;
            position: absolute;
            top: 50%;
            width: 0;
        }

        .timeline-item.timeline-item-left:after {
            content: "";
            display: block;
            width: 50%;
        }

        .timeline-item.timeline-item-left .timeline-desk .arrow-alt {
            border-bottom: 12px solid transparent;
            border-left: 12px solid #fff !important;
            border-top: 12px solid transparent;
            display: block;
            height: 0;
            left: auto;
            margin-top: -12px;
            position: absolute;
            right: -12px;
            top: 50%;
            width: 0;
        }

        .timeline-item.timeline-item-left .timeline-desk .album {
            float: right;
            margin-top: 20px;
        }

        .timeline-item.timeline-item-left .timeline-desk .album a {
            float: right;
            margin-left: 5px;
        }

        .timeline-item.timeline-item-left .timeline-icon {
            left: auto;
            right: -56px;
        }

        .timeline-item.timeline-item-left:before {
            display: none;
        }

        .timeline-item.timeline-item-left .timeline-box {
            margin-right: 45px;
            margin-left: 0;
            text-align: right;
        }
    }

    @media (max-width: 767.98px) {
        .timeline .time-show {
            text-align: center;
            position: relative;
        }

        .timeline .timeline-icon {
            display: none;
        }
    }

    .timeline-sm {
        padding-left: 110px;
    }

    .timeline-sm .timeline-sm-item {
        position: relative;
        padding-bottom: 20px;
        padding-left: 40px;
        border-left: 2px solid #dee2e6;
    }

    .timeline-sm .timeline-sm-item:after {
        content: "";
        display: block;
        position: absolute;
        top: 3px;
        left: -7px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #ef6603;
    }

    .timeline-sm .timeline-sm-item .timeline-sm-date {
        position: absolute;
        left: -85px;
    }

    @media (max-width: 420px) {
        .timeline-sm {
            padding-left: 0;
        }

        .timeline-sm .timeline-sm-date {
            position: relative !important;
            display: block;
            left: 0 !important;
            margin-bottom: 10px;
        }
    }
</style>

<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
<?= $data['FYP_Title'] ?>
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <section id="about " class="about pt-5">
        <div class="section-title text-center text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;" data-aos="fade-in ">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;"><?= $data['FYP_Title'] ?></p>
            <h4><?= $data['FYP_Session'] ?> | <?= $data['FYP_ProjectId'] ?></h4>

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


                <div class=" col-md-3 order-first pb-4">
                    <div class="card left">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-between align-items-start  ">
                                <div class="">
                                    <span class="font-weight-bold">Supervisor</span>
                                    <h6> • <?= $data['FYP_Suprvisor'] ?> </h6>
                                    <br>

                                    <span class="font-weight-bold">Co Supervisor</span>
                                    <h6> • <?= $data['FYP_CoSupervisor'] ?> </h6>
                                    <br>

                                    <span class="font-weight-bold">Group Members</span>
                                    <ul>
                                        <li>
                                            <h6><?= $data['FYPS_M1'] ?> </h6>
                                        </li>
                                        <li>
                                            <h6><?= $data['FYPS_M2'] ?> </h6>
                                        </li>
                                        <li>
                                            <h6><?= $data['FYPS_M3'] ?> </h6>
                                        </li>
                                        <li>
                                            <h6><?= $data['FYPS_M4'] ?> </h6>
                                        </li>
                                        <?php ($data['FYPS_M5']) ? '<li> <h6><?= $data["FYPS_M5"] ?> </h6 </li> ' : ''
                                        ?>

                                    </ul>

                                    <br>

                                    <span class="font-weight-bold"> Type</span>
                                    <h6> • <?= $data['FYP_Type'] ?> </h6>
                                    <br>
                                    <span class="font-weight-bold"> Current Phase</span>
                                    <h6> • <?= $data['FYPS_CurrentPhase'] ?> </h6>
                                    <br>
                                    <span class="font-weight-bold">Created At</span>
                                    <h6> • <?= date_format(date_create($data['FYP_CreatedAt']), "M jS, Y") ?> </h6>
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
                                    <p class="text-justify"> <?= $data['FYP_Description'] ?> </p>
                                    <hr>

                                    <h4>Student Submissions</h4>
                                    <div class="table-responsive-md col-8 mx-auto">
                                        <table class="table table-hover text-center align-middle  table-striped table-striped table-bordered border-secondary table-lg caption-top  ">
                                            <caption>
                                                Details
                                            </caption>
                                            <thead class="table-dark text-center align-middle">
                                                <td>Projet Phase</td>
                                                <td>Download Link</td>
                                                <td>Date</td>
                                            </thead>
                                            <tbody class="font-weight-bold">
                                                <?php

                                                for ($i = 0; $i < $data["FYPS_CurrentPhase"]; $i++) {
                                                    echo "
                                                    <tr>
                                                    
                                                    <td>" . $i + 1 . "</td>
                                                    <td><a href='#'>Click to download </a></td>
                                                    <td> March 20, 2022</td>
                                                    </tr>";
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="">

                                        <div class="show active" id="">

                                            <h4 class="mb-4 text-uppercase">
                                                Remarks

                                                <div class="d-inline float-end">
                                                    <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success " id="remarksModal"><i style="color:#ffffff;" class="fas fa-plus fa-2x"></i></button>
                                                </div>
                                            </h4>
                                            <ul class="list-unstyled timeline-sm">
                                                <?php if (count($rem) > 0) : ?>
                                                    <?php foreach ($rem as $remarks) : ?>
                                                        <li class="timeline-sm-item" id = "rm_<?= $remarks['RM_Id'] ?>" >
                                                            <!-- <img loading="lazy" src="<?= site_url("") ?>" alt="avatar" width="35" height="35" class="rounded-circle" /> -->
                                                            <span class="timeline-sm-date"><img loading="lazy" src="<?= site_url($remarks['FC_Photo']) ?>" alt="avatar" width="45" height="45" class="rounded-circle" /></span>
                                                            <h5 class="mt-0 mb-3 col-10 d-flex flex-row justify-content-between"><?= $remarks['RM_Title'] ?></h5>
                                                            <span><?= $remarks['FC_Name'] ?></span>
                                                            <span> | <?= date_format(date_create($remarks['RM_Date']), "M jS, Y") ?></span>
                                                            <p class="text-muted mt-3"><?= ($remarks['RM_Detail']) ? ($remarks['RM_Detail']) : 'No detail found' ?></p>
                                                            <?php

                                                            if ($remarks["FC_Id"] == session("user")["FC_Id"]) {
                                                                echo '
                                                                                <a class=" btn btn-info my-2 " onclick="editRemark(' . $remarks['RM_Id'] . ')">Edit</a> 
                                                                                
                                                                                <a class="btn btn-danger mx-md-2 mx-0 my-2 " href="'. site_url("Faculty/delete_remarks/". $remarks['RM_Id'] ) .'">Delete</a>';
                                                            }

                                                            ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <div class="container text-center py-2">
                                                        <h5>No Remarks are available</h5>
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

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Remark</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <?= form_open("Faculty/add_remarks") ?>
                    <div class="modal-body">
                        <input type="hidden" name="rm_fyp" value=<?= $data["FYPS_Id"] ?>> </input>
                        <input type="hidden" name="rm_id" id="rm_id"></input>
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" placeholder=" " id="RM_Title" required name="rm_title" onkeypress="return check(event)"></input>
                            <label for="RM_Title">Title</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" placeholder=" " id="RM_Description" name="rm_desc" ></input>
                            <label for="RM_Description">Description</label>
                        </div>
                        <div class="form-floating my-2">
                            <select class="form-select" id="remar_phase" name="remark_phase">
                                <option value="1" selected>1</option>
                                <?php

                                for ($i = 1; $i < $data["FYPS_CurrentPhase"]; $i++) {
                                    echo "<option value=" . $i + 1 . " selected>" . $i + 1 . "</option>";
                                }

                                ?>
                            </select>
                            <label for="remar_phase">Project Phase</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="modalAdd">Save</button>
                    </div>
                    </form>
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
    check = (event) => {
        let res = event.charCode === 0 || /^[a-z\d\-_\s]+$/i.test(String.fromCharCode(event.charCode));
        if (res) {
            event.srcElement.style = "border:1px solid #1266f1;";
            return true;
        } else {
            event.srcElement.style = "border:2px solid red";

            return false;
        }


    }
</script>

<script>
   

    editRemark = (id)=>{
        a = document.getElementById("rm_" + id);
        a = a.children;
        title = a[1].innerHTML;
        desription = a[4].innerHTML;

        document.getElementById("RM_Title").value = title;
        document.getElementById("RM_Description").value = desription;
        document.getElementById("rm_id").value = id;
        document.getElementById("remarksModal").click();
        

    }
</script>


<?php $this->endSection();  ?>