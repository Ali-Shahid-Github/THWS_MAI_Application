<?php $this->extend('layouts/admin');    ?>

<?php $this->section('headFiles')  ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Student
<?php $this->endSection();  ?>

<?php $this->section('styles')  ?>
<style>
    body {
        background: white;
        /* background-image: linear-gradient( 135.9deg, rgba(109, 25, 252, 1) 16.4%, rgba(125, 31, 165, 1) 56.1%); */
        min-height: 100vh;
        overflow-x: hidden;
    }

    .vertical-nav {
        background-color: #122836 !important;
        min-width: 17rem;
        width: 17rem;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.4s;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    .cont {
        color: rgb(255, 255, 255);
        border: 3px solid transparent;
        border-radius: 4px;
        /* box-shadow: 5px 5px 6px #8a8a8a; */
        background-color: rgb(231, 231, 231);
        text-align: justify;
        background-color: #24615C;
    }

    .cont:hover {
        transition: all ease 0.5s;
        border: 3px solid #202222;
        box-shadow: 5px 5px 12px #bbb8b8;
    }

    .page-content {
        width: calc(100% - 17rem);
        margin-left: 17rem;
        transition: all 0.4s;
    }

    #sidebar.active {
        margin-left: -17rem;
    }

    #content.active {
        width: 100%;
        margin: 0;
    }

    .text-uppercase {
        letter-spacing: 0.1em;
    }

    .text-gray {
        color: #aaa;
    }

    .nav-link {
        text-transform: capitalize;
    }

    .nav-link:hover {
        background: #f3f2f2;
    }

    /* .text-primary {
            color: #7579e7 !important;
        } */

    .media img {
        width: 70px;
        height: 70px;
    }

    @media (max-width: 768px) {
        #sidebar {
            margin-left: -17rem;
        }


        #sidebar.active {
            margin-left: 0;
        }

        #content {
            width: 100%;
            margin: 0;
        }

        #content.active {
            margin-left: 10rem;
            width: calc(100% - 10rem);
        }

        .vertical-nav {
            min-width: 10rem;
            width: 10rem;
            height: 100vh;
        }

        .media-body h5 {
            font-size: 12px;
        }

        .media img {
            width: 50px;
            height: 50px;
            margin-left: 10px !important;
        }
    }

    #sidebar .sidebar-header {
        padding: 20px;
        /* background: #005086; */
    }

    #sidebar ul.components {
        padding: 20px 0px;
        /* border-bottom: 1px solid #47748b; */
    }

    #sidebar ul p {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        color: #fff;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        color: white;
        background-color: #122836;
        border: 1px solid transparent;
    }

    #sidebar ul li a:hover {
        transition: all ease 0.4s;
        color: #fff;
        background: #D18F38;
        border: 1px solid black;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #D18F38;
        /* border: 4px solid white; */
    }

    a[data-toggle="collapse"] {
        position: relative;
        /* border: 4px solid white; */
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        border: 4px solid black;
    }

    .page-content {
        padding: 0px 0px;
    }

    .card {
        border-radius: 0.5rem;
    }

    .card:hover {
        box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%);
        border-radius: 0.5rem;
        overflow: hidden;
    }
</style>
<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-1 mb-4 ">
        <div class="media d-flex align-items-center">
            <a href=" <?= site_url("/") ?> "> <img loading="lazy" src="/assets/images/csLogo.png" alt="userAvatar" class="mx-2 "></a>
            <div class="media-body text-white">
                <h5 class=""><?php echo $AdminName ?></h5>
                <!-- <p class="font-weight-normal text-muted mb-0">Web developer</p> -->
            </div>
        </div>
    </div>



    <ul class="list-unstyled components">

        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-home mr-3  fa-fw"></i> Menu
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Blogs</a>
                </li>
                <li>
                    <a href="#">FYP</a>
                </li>
                <li>
                    <a href="#">Alumni Management</a>
                </li>
                <li>
                    <a href="#">Faculty Management</a>
                </li>
                <li>
                    <a href="#">Notice Board</a>
                </li>
                <li>
                    <a href="#">Job Vacancies</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="#"> <i class="fas fa-gear mr-3  fa-fw"></i> Settings</a>
        </li>

        <li>
            <a href="<?= site_url("/logout") ?>"> <i class="fas fa-sign-out-alt  mr-3  fa-fw"></i> Logout</a>
        </li>

    </ul>




</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content " id="content">
    <!-- Toggle button -->


    <div class="container-fluid mb-3 shadow-sm p-2" style="border: 1px solid rgba(145, 145, 145, 0.637);">
        <div class=" d-flex flex-row align-items-center justify-content-between">
            <button id="sidebarCollapse" type="button" class="btn btn-dark shadow-sm"><i class="fa fa-bars mr-2"></i><small></small></button>
            <div class="d-flex flex-row align-items-center  ">
                <!-- <img loading="lazy"  src="/assets/images/chairman.jpeg" alt="..." width="60" height="60" class="  rounded-circle mx-2 "> <span> -->
                <small class="lh-1 fs-4"> <?php echo  $AdminName ?></small>
                </span>

            </div>
        </div>

    </div>



    <div class="container">
        <div class="card-group d-block">
            <div class="row row-cols-1  row-cols-md-3 g-4">
                <div class="col ">
                    <div class="card h-100">

                        <div class="card-body cont ">
                            <h4 class="card-title">Blogs</h4>
                            <p class="card-text">Daily Routine blogs related to CS Community</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= site_url('Student/blogs') ?> "><button class="btn btn-primary" type="button">View Details </button> </a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card h-100">

                        <div class="card-body cont ">
                            <h4 class="card-title">Term Projects</h4>
                            <p class="card-text">Add and View your Term or self pace projects </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= site_url('Student/stdTermProjects') ?> "><button class="btn btn-primary" type="button">View Details </button> </a>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body cont">
                            <h4 class="card-title">FYP</h4>
                            <p class="card-text">View and approve the requests of Alumni</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= site_url('Student/fyp') ?> "><button class="btn btn-primary" type="button">View Details </button> </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body cont">
                            <h5 class="card-title">Notice Board</h5>
                            <p class="card-text">Manges Faculty profiles and add new.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= site_url('Student/notices') ?> "><button class="btn btn-primary" type="button">View Details </button> </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">

                        <div class="card-body cont">
                            <h5 class="card-title">Suggesstions</h5>
                            <p class="card-text">Approve, Add new job vacancies</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?= site_url('Student/suggestion') ?> "><button class="btn btn-primary" type="button">View Details </button> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<?php $this->endSection();  ?>


<?php $this->section('footerScripts')  ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
        });
    });
</script>
<?php $this->endSection();  ?>