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

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Final Year Project | CS UET
<?php $this->endSection();  ?>



<?php $this->section('styles')  ?>


<style>
    body {
        background-color: white;
    }

    .overlayText {

        overflow: overlay;
        text-overflow: none;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<main id="main ">

    <section id="about " class="about pt-5">
        <div class="section-title text-center " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;">FYP Details</p>

        </div>
        <div class="container p-4">
            <span>
                The Final Year Project (FYP) in the Department of Computer Science UET Lahore is the culmination of students’ degree programs. The main purpose of this project is to encourage students to apply the knowledge acquired during their studies and align their
                course of studies with the industry demanded technologies. It allows them to work on a substantial problem for an extended period of time, show how proficient they are in solving real-world problems. It brings them a sound opportunity to demonstrate
                their competence as professionals and to apply what they have learnt in the other components of the degree. Besides, they get a chance to improve their technical skills, communication skills by integrating writing, presentation and learn how to
                work in teams. With a real-world problem at hand, they get to learn professional practice and a variety of non-technical issues such as management, finance, safety, reliability, environment and social impacts. Moreover, it provides an integrated
                assessment of the progress of the students toward the training they went through during their academic tenure at the college. FYP course is different from other courses because it demands independent objective formulation, planning, management
                and self-motivation. It is therefore essential to design fair and comprehensive guidelines for the students, supervisors and the evaluators. A structured manual and lifecycle process is therefore essential in order to help students conform to
                the required quality standards, outline general expectations from the supervisors and sketch assessment criteria for the evaluators. Hence, contribute as a fundamental underpinning to achieve high quality learning outcomes of the projects.
            </span>
            <h2 class="fw-bold text-center my-3">Guidlines for the Selection of Project</h2>
            <h4 class="fw-bold">Project Complexity</h4>
            <span class="fw-bold">Note:</span> All projects should have a significant portion of software coding and this code should be written by the students by themselves. Use of simulators, templates, CMS, libraries (machine learning, speech, vision,
            etc) counted as 0% code participation. You can use all these in your projects but that shall not be the counted toward the final project effort. Minimum number of effort from each student of a team should be 10 working hours per week. So if a
            project team consist of N team members, it should have at least Y=10*N working hour effort. All the tasks done should be logged regularly for the proof.

            <h2 class="fw-bold text-center my-3">Project Categories for FYP </h2>
            <h4 class="fw-bold">Software Application</h4>
            In this category, students can develop the software applications with the following constraints:
            <ul>
                <li>Application will be developed using the latest technologies (Technologies/versions of those technologies that are announced in the last 3 years).</li>
                <li>Use of any CMS e.g. Wordpress, Joomla etc is not allowed</li>
                <li>Standalone android application is not allowed unless data is communicated to the server and it has corresponding admin panel.</li>
                <li>Project should have the complexity to be justified as FYP</li>
                <li>Business Analytics Dashboard is required in this type of application</li>
                <li>UAF: a unique application feature should be mentioned that you want to achieve in comparison of existing application of same domain.</li>
                <li><span class="fw-bold">Plan of commercialization</span> is compulsory in this category so that application should earn the user base and revenue.</li>
            </ul>
            <h4 class="fw-bold">Research Based Applications</h4>
            In this category, project can be further classified into the following subcategories.
            <ul>
                <li>Data Science</li>
                <li>Speech Processing</li>
                <li>Natural Language Processing</li>
                <li>Computer Vision</li>
                <li>Bio-informatics</li>
            </ul>
            Following constraints should be observed in this category
            <ul>
                <li>Students are advised to take at least one relevant course on subcategory.</li>
                <li>Datasets from the local community are preferred. The collection of dataset is not the FYP, it is part of FYP and the collection of local dataset effort shall be counted only 10% to the project. All these dataset should be made public so
                    do not made any collaborations that restrict you to make it available in public space</li>
                <li>In this category, end product will also be developed. (Latest Technologies are not compulsory). A detail comparison report shall be required that explains how the result have been improved than previous one.</li>
                <li>Plan of submission of research paper to any conference or journal is compulsory in this category.
                </li>
                <li>The collecting statistics using the simulations or with existing machine learning tools are not sufficient. For example, finding the rules using decision trees with help of some software shall not be acceptable. Similarly, use of simulators
                    is not enough.</li>
            </ul>
            <h4 class="fw-bold">Hybrid Categories</h4>
            In hybrid category, students can select any research domain from the category 2, and commercialize their research idea using the latest technologies.
            <ul>
                <li>All the constraints will be observed in this matter</li>
                <li>At least one of the KPI from the research or commercialization should be fulfilled.</li>
            </ul>

            <div class="row">
                <?php if (count($data) > 0) : ?>

                    <div class="table-responsive-md">
                        <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top  ">
                            <h4>
                                FYP Projects
                            </h4>
                            <thead class="table-dark text-center align-middle">
                                <tr>

                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Supervisor</th>
                                    <th scope="col">Co-Supervisor</th>
                                    <th scope="col">Domain</th>
                                    <th scope="col">Category</th>

                                </tr>
                            </thead>
                            <tbody class="font-weight-bold ">

                                <?php foreach ($data as $d) : ?>

                                    <tr class="align-middle">
                                        <td><?= $d['FYP_Title'] ?></td>
                                        <!-- <td class="text-truncate"><?= ''; //character_limiter($d['FYP_Description'], 20); 
                                                                        ?></td> -->
                                        <td class="overlayText align-middle" style="max-width: 300px; height: 15vh;"><?= $d['FYP_Description']; ?></td>
                                        <td><?= $d['FYP_Suprvisor'] ?></td>
                                        <td><?= $d['FYP_CoSupervisor'] ?></td>
                                        <td><?= $d['FYP_ProjectId'] ?></td>
                                        <td><?= $d['FYP_Type'] ?></td>
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
    </section>

</main>
<?php $this->endSection();  ?>


<?php $this->section("footerScripts")  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>




<?php $this->endSection();  ?>