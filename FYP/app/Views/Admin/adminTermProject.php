<?php  $this->extend('layouts/default');    ?>

<?php $this->section('headFiles')  ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <!-- <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
   
<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
Admin Projects
 <?php $this->endSection();  ?>


<?php $this->section('content')  ?>
    <main id="main ">
        <!-- ======= About Section ======= -->
        <section id="about " class="about pt-5">
            <div class="section-title text-white" style="background-color: #2a2c39; padding: 20px; padding-top: 28px;" data-aos="fade-in ">
                 <p style="color: white;">Students Projects</p>
                <h5 style="color: white;">Manage new Term Projects posted by students and approve or remove it</h5>
           

                
                
            </div>

            <div class="container pt-3 " data-aos="fade-in " data-aos-delay="">
                
                <?php if (session()->has('message')):  ?>

                    <div class="container col-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?=  session('message') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    </div>

                <?php endif ?>

                <?php if (session()->has('error')):  ?>

                <div class="container col-6">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?=  session('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                </div>

                <?php endif ?>
            
                <div class="row">
                    
                    <?php if(count($data)>0): ?>

                        <div class="table-responsive-md">
                            <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-lg caption-top  ">
                                <caption>
                                    Projects
                                </caption>
                                <thead class="table-dark text-center align-middle">
                                    <tr>

                                        <th scope="col">Title</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Language</th>
                                        <th scope="col">Full Details</th>
                                        <th scope="col">Accept</th>
                                        <th scope="col">Ignore</th>
                                    </tr>
                                </thead>
                                <tbody class="font-weight-bold">
                                
                                    <?php foreach ($data as $d): ?>

                                        <tr>
                                            <td> <?= $d['TP_Title'] ?> </td>
                                            <td> <?= $d['TPC_Title'] ?> </td>
                                            <td> <?= $d['TP_Domain'] ?> </td>
                                            <td> <?= $d['TP_Lang'] ?> </td>
                                            <td>
                                            <a class="btn btn-outline-dark " 
                                                style="color: black; border: none; text-transform: capitalize; font-size:medium; text-decoration: underline; "
                                                href="<?= site_url('Admin/adminTermProjectView/'.$d['TP_Id'].'/')?>">
                                            
                                            Click Here
                                            
                                            </a></td>

                                            <td><a class="btn btn-success" href="<?= site_url('Admin/approveProject/'.$d['TP_Id'].'/')?>">Approve</a></td>
                                            <td>
                                            
                                            <a class="btn btn-danger" href="<?= site_url('Admin/deleteProject/'.$d['TP_Id'].'/')?>">Delete</a></td>
                                    </td>
                                        </tr>

                                    <?php endforeach; ?>
                                
                                
                                
                                
                                </tbody>
                            </table>
                        </div>
                </div>

                <?php else: ?>
                    <div class="container text-center">
                        <h2> ✅ No projects to be approved</h2>
                    </div>

                <?php endif; ?> 
            </div>

           
            
            <div class="container pt-3 " data-aos="fade-in " data-aos-delay="">
            <hr class="col-10 mx-auto">
                <div class="row">
                    
                    <?php if(count($approved)>0): ?>

                        <div class="table-responsive-md">
                            <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top  ">
                                <caption>
                                   Approved Projects
                                </caption>
                                <thead class="table-dark text-center align-middle">
                                    <tr>

                                        <th scope="col">Title</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Language</th>
                                        <th scope="col">Full Details</th>
                                        <!-- <th scope="col">Accept</th> -->
                                        <!-- <th scope="col">Ignore</th> -->
                                    </tr>
                                </thead>
                                <tbody class="font-weight-bold">
                                
                                    <?php foreach ($approved as $d): ?>

                                        <tr>
                                            <td> <?= $d['TP_Title'] ?> </td>
                                            <td> <?= $d['TPC_Title'] ?> </td>
                                            <td> <?= $d['TP_Domain'] ?> </td>
                                            <td> <?= $d['TP_Lang'] ?> </td>
                                            <td>
                                            <a class="btn btn-info " 
                                               
                                                href="<?= site_url('Admin/adminTermProjectView/'.$d['TP_Id'].'/')?>">
                                            
                                            Click Here
                                            
                                            </a></td>

                                            <!-- <td><a class="btn btn-success" href="<?= site_url('Admin/approveProject/'.$d['TP_Id'].'/')?>">Approve</a></td>
                                            <td>
                                            
                                                <a class="btn btn-danger" href="<?= site_url('Admin/deleteProject/'.$d['TP_Id'].'/')?>">Delete</a></td>
                                            </td> -->
                                        </tr>

                                    <?php endforeach; ?>
                                
                                
                                
                                
                                </tbody>
                            </table>
                        </div>
                </div>

                <?php else: ?>
                    <div class="container text-center">
                        <h2>No projects Available</h2>
                    </div>

                <?php endif; ?> 
            </div>
           
        </section>
    </main>
<?php $this->endSection();  ?>

<?php $this->section('footerScripts')  ?>

<script src="/assets/vendor/aos/aos.js "></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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