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
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" /> -->

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Academics | CS UET
<?php $this->endSection();  ?>



<?php $this->section('styles')  ?>


<style>
    body {
        background-color: white;
    }

    .nav-link {
        color: black;
    }

    .nav-link:hover {
        color: #ef6603;
    }

    .nav-pills .nav-link.active {
        background-color: #ef6603;
    }

    tbody{
        font-family: roboto;
    }

    .nav-pills .nav-link {
   
        border: 1px solid #2e2e2e2b;
        border-radius: 5px;
        box-shadow: 0 1px 1px 0 rgb(60 64 67 / 30%), 0 2px 4px 2px rgb(60 64 67 / 15%);
    }
</style>


<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<main id="main ">

    <section id="about " class="about pt-5">
        <div class="section-title text-center " style="background-color: #2a2c39; padding: 40px; padding-top: 28px;">
            <!-- <h2 class="mx-5">About</h2> -->
            <p style="color: white;">CS Department | Academics</p>

        </div>
        <div class="container p-4">
            <div class="row">
               
                    <div class="nav d-flex flex-md-column mx-auto col-md-3 justify-content-md-start justify-content-center  flex-row nav-pills" id="v-pills-tab" role="tablist" >
                        <button class="text-start m-2 nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">BSc. Computer Science</button>
                        <button class="text-start m-2 nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">MSc. Computer Science</button>
                        <button class="text-start m-2 nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ph.D. Computer Science</button>
                    </div>
                    <div class="tab-content col-12 col-md-9 my-2" id="v-pills-tabContent">
                        <!-- BSc. Computer Science -->
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <!-- Overview -->
                            <h2 class="fw-bold text-start">Overview</h2><br> A four years degree program leading towards a B.Sc. (Honours) Computer Science was introduced by the department in 1999. For students enrolling from September 2003 onwards, B.Sc programs have been re-named and
                            modified into four years B.Sc. Computer Science (CS) program.
                            <!-- Eligibilty Criteria --><br><br>
                            <h2 class="fw-bold text-start">General Eligibility Requirements</h2><br> An applicant for admission to any of the bachelor’s degree course offered by the University must fulfill the following requirement:
                            <br><br>
                            <ol>
                                <li>He/She should have earned (or expected to earn) at least 60% marks in Intermediate/ DAE or equivalent foreign qualification examination excluding sports and Hafz-e-Quran marks.</li>
                                <li>He should have appeared in the Entry Test arranged by the University of Engineering and Technology Lahore.</li>
                                <li>His subject combination in the entrance test must be the same as his intermediate (or equivalent) subject combination because he will be considered for admission in the prescribed disciplines relevant to his subject combination
                                    only. This restriction does not apply to DAE qualified candidates.</li>
                                <li>In case the candidate seeks admission based on B.Sc. Engineering Technology or equivalent degree, he should have obtained( or expected to obtain ) at least 60% marks, in case of annual or a CGPA of 2.5 out of 4.0 in case of
                                    semester system.</li>
                                <li>He should have earned(or expected to earn) at least 50% overall adjusted aggregate marks calculated according to the formula given in the Merit calculation section of the UET Lahore website.</li>
                                <li>He should be a bonafide resident of the area from where he seeks admission.</li>
                                <li>He should meet the standards of physique and eyesight laid down in the medical certificate.</li>
                            </ol>
                            <h2 class="fw-bold text-start">Fee Structure</h2><br>
                            <div class="table-responsive-md">
                                <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top ">
                                    <thead class="table-dark text-center align-middle">
                                        <tr>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Subsidized (PKR)</th>
                                            <th scope="col">Partial Subsidize  (PKR)</th>
                                            <th scope="col">Non Subsidize  (PKR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1st Semester</td>
                                            <td>56734.00</td>
                                            <td>167190.00</td>
                                            <td>301,590.00</td>
                                        </tr>
                                        <tr>
                                            <td>2nd Semester</td>
                                            <td>49034.00</td>
                                            <td>148490.00</td>
                                            <td>282890.00</td>
                                        </tr>
                                        <tr>
                                            <td>3rd Semester</td>
                                            <td>61733.68</td>
                                            <td>184124.40</td>
                                            <td>334652.40</td>
                                        </tr>
                                        <tr>
                                            <td>4th Semester</td>
                                            <td>61733.68</td>
                                            <td>184124.40</td>
                                            <td>334652.40</td>
                                        </tr>
                                        <tr>
                                            <td>5th Semester</td>
                                            <td>67333.32</td>
                                            <td>203090.93</td>
                                            <td>371682.29</td>
                                        </tr>
                                        <tr>
                                            <td>6th Semester</td>
                                            <td>73604.92</td>
                                            <td>224333.44</td>
                                            <td>371682.29</td>
                                        </tr>
                                        <tr>
                                            <td>7th Semester</td>
                                            <td>56734.00</td>
                                            <td>167190.00</td>
                                            <td>301,590.00</td>
                                        </tr>
                                        <tr>
                                            <td>8th Semester</td>
                                            <td>73604.92</td>
                                            <td>224333.44</td>
                                            <td>413155.76</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Total (8th semester Program)</td>
                                            <td class="fw-bold">511,111.84</td>
                                            <td class="fw-bold">1,538,777.53</td>
                                            <td class="fw-bold">2823460.90</td>
                                        </tr>
                                        <tr>
                                            <td>9th Semester</td>
                                            <td>80402.52</td>
                                            <td>246992.12</td>
                                            <td>458473.12</td>
                                        </tr>
                                        <tr>
                                            <td>10th Semester</td>
                                            <td>80402.52</td>
                                            <td>246992.12</td>
                                            <td>458473.12</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Total (10th semester Program)</td>
                                            <td class="fw-bold">671916.89</td>
                                            <td class="fw-bold">2032761.77</td>
                                            <td class="fw-bold">3740407.14</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>
                        <!-- MSc. Computer Science -->
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <!-- Overview -->
                            <h2 class="fw-bold text-start">Overview</h2><br> The department launched the MSc Computer Science program in 2003, whereas the Ph.D. program in computer science was launched in 2002. Department of Computer Science offers:
                            <ul class="fw-bold">
                                <li>MSc. Computer Science (Morning)</li>
                                <ul class="fw-light">
                                    <li>Monday to Friday Classes</li>
                                </ul>
                                <li>MSc. Computer Science (Evening)</li>
                                <ul class="fw-light">
                                    <li>Monday to Friday Classes</li>
                                </ul>
                                <li>MSc. Computer Science (Weekend)</li>
                                <ul class="fw-light">
                                    <li>Saturday and Sunday Classes</li>
                                </ul>

                            </ul>
                            The department provides excellent research facilities and services for postgraduate students. Our postgraduate program has been acknowledged internationally and the university has admitted postgraduate students from various parts of the world, who are
                            sponsored by governments, organizations, and industries.

                            <!-- Eligibilty Criteria --><br><br>
                            <h2 class="fw-bold text-start my-3">General Eligibility Requirements</h2><br> An applicant for admission to any of the Master’s degree course offered by the University must fulfill the following requirement:

                            <ol>
                                <li>Only those candidates will be eligible for admission who have passed their undergraduate (16 years equivalent) degree by securing a minimum of 60% raw score under annual system or a CGPA of 2.50 out of a maximum of 4.00 under
                                    semester system. CGPAs on other scales will be translated accordingly. In case CGPA and marks are both recorded on the transcript, then CGPA score would be considered. In addition, the applicant shall have to clear the
                                    Subject Test conducted by the department by securing at least 50% in it.</li>
                            </ol>
                            <h2 class="fw-bold text-start">Fee Structure (Morning & Evening)</h2><br>
                            <div class="table-responsive-md">
                                <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top ">
                                    <thead class="table-dark text-center align-middle">
                                        <tr>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Fee (Rs)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1st Semester</td>
                                            <td>83050.00</td>
                                        </tr>
                                        <tr>
                                            <td>2nd Semester</td>
                                            <td>60000.00</td>
                                        </tr>
                                        <tr>
                                            <td>3rd Semester</td>
                                            <td>60000.00</td>
                                        </tr>
                                        <tr>
                                            <td>4th Semester</td>
                                            <td>60000.00</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Total</td>
                                            <td class="fw-bold">263050.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Fee Structure Weekend -->
                            <h2 class="fw-bold text-start">Fee Structure (Weekend)</h2><br>
                            <div class="table-responsive-md">
                                <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top ">
                                    <thead class="table-dark text-center align-middle">
                                        <tr>
                                            <th scope="col">Semester</th>
                                            <th scope="col">Fee (Rs)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1st Semester</td>
                                            <td>116850.00</td>
                                        </tr>
                                        <tr>
                                            <td>2nd Semester</td>
                                            <td>90000.00</td>
                                        </tr>
                                        <tr>
                                            <td>3rd Semester</td>
                                            <td>90000.00</td>
                                        </tr>
                                        <tr>
                                            <td>4th Semester</td>
                                            <td>90000.00</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">Total</td>
                                            <td class="fw-bold">386850.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Ph.D. Computer Science -->
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <!-- Overview -->
                            <h2 class="fw-bold text-start">Overview</h2><br> The ph.D. program of a university reflects intellectual standing and its overall academic quality. Ph.D. regulations provide the necessary mechanism to meet these goals. The climax of the Ph.D. program is the
                            thesis which is expected to:
                            <ol>
                                <li>Make a distinct contribution to knowledge</li>
                                <li>Show ability on the part of the candidate to conduct original investigations and to test ideas whether his own or of others and to understand the relationship of his investigations with a wider field of knowledge</li>
                            </ol>
                            <span class="fw-bold">Financial Assistance:</span> No Tuition Fee will be charged from full-time Ph.D. Students who may be offered a stipend after approval of their topic. Ph.D. candidates will be eligible for a stipend if their
                            CGPA, in graduate course work, is atleast 3.5/4.0 .

                            <!-- Eligibilty Criteria --><br><br>
                            <h2 class="fw-bold text-start my-3">General Eligibility Requirements</h2><br> An applicant for admission to any of the Ph.D. degree course offered by the University must fulfill the following requirement:

                            <ol>
                                <li>Eligibility requirements for admission into Ph.D. program is that the candidate must have earned a Masters/ M.Sc./ M.Phil.) or equivalent degree in the relevant discipline in first division or with a CGPA of 3.0 out of a maximum
                                    of 4.0 (in case, applicant’s transcript shows percentage as well as CGPA, CGPA would be considered for eligibility. CGPAs on a scale other than 4.00 would be translated accordingly).</li>
                                <li>Candidates should meet HEC’s admission test criterion.</li>
                                <li>Merit of candidates will be computed as under:
                                    <ol class="fw-bold">
                                        <li>16 years UG score: 20%</li>
                                        <li>Masters/ M.Sc./ M.Phil. score: 20%</li>
                                        <li>Subject Test score: 30%</li>
                                        <li>Statement of Purpose: 10%</li>
                                        <li>Interview: 20%</li>
                                    </ol>
                                </li>
                                <li>Ph.D. Admissions Subject Test will be arranged and conducted by UET. The minimum qualifying score is 70% in the subject test.</li>
                                <li>Minimum overall merit should be 70% to be eligible for consideration.</li>
                            </ol>
                            <!-- Fee  -->
                            <h2 class="fw-bold text-start">Fee Structure</h2><br>
                            <span class="fw-bold"> No fee for full-time Ph.D. candidates.</span>

                            <!-- Medium  -->
                            <h2 class="fw-bold text-start my-3">Medium Of Instruction</h2><br> The medium of instruction, writing thesis and examination shall be English with the exception of Islamic Studies where the medium of instruction, writing thesis and examination may be Urdu, Arabic
                            or English.
                            <!-- Process -->
                            <h2 class="fw-bold text-start my-3">Ph.D. Application Process</h2><br>
                            <ul>
                                <li>Every candidate for the Degree of PhD shall apply for admission to the concerned Teaching Department of the University defining the area of research and proposed supervisor</li>
                                <li>Post Graduate Research Committee (PGRC) of the concerned department shall evaluate the application on merit and in case of acceptance of the application, recommend area of research, supervisor, co-supervisor (optional) and
                                    a three members Advisory Committee. Co-supervisor will constitute the fourth member, if appointed. The supervisor will be the chairman of the committee and one member from remaining two being appointed from outside the
                                    department/ university. Accepted applications would be forwarded to the Convenor Admission Committee (CAC), through the concerned Dean, for further processing.</li>
                            </ul>

                            <h2 class="fw-bold text-start">Ph.D. Thesis</h2><br>
                            <div class="table-responsive">
                                <table class="table table-hover text-center align-middle table-striped table-bordered border-secondary table-sm caption-top ">
                                    <thead class="table-dark text-center align-middle">
                                        <tr>
                                            <th scope="col">Thesis Title</th>
                                            <th scope="col">Supervisor Name</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-start">
                                        <tr>
                                            <td>Capturing 2D Objects with Automation</td>
                                            <td>Prof. Dr. Shaiq A. Haq</td>
                                        </tr>
                                        <tr>
                                            <td>Visualization of Positive Data using Modified Quadratic Shepard Method:An Optimum Solution</td>
                                            <td>Prof. Dr. Abad Ali Shah</td>
                                        </tr>
                                        <tr>
                                            <td>Similarity Identification and Measurement between two Web Ontologies</td>
                                            <td>Prof. Dr. Abad Ali Shah</td>
                                        </tr>
                                        <tr>
                                            <td>Reconstruction of 3D Drawings for Engineering Objects from 2D Camera Perspectives</td>
                                            <td> Prof. Dr. Abad Ali Shah</td>
                                        </tr>
                                        <tr>
                                            <td>Spatio-Temporal Data Mining Framework for Natural Resource Exploration</td>
                                            <td>Dr. Muhammad Shahbaz</td>
                                        </tr>
                                        <tr>
                                            <td>Design Quality Metrics for Real Time Environment Applications</td>
                                            <td>Prof. Dr. Muhammad Shoaib</td>
                                        </tr>
                                        <tr>
                                            <td>Automatic Detection and Estimation of ECG Repolarization(T-Wave) Alternans</td>
                                            <td>Prof. Dr. M.A. Maud</td>
                                        </tr>
                                        <tr>
                                            <td>Context-A Ware Ubiquitous Data Mining Framework</td>
                                            <td>Prof. Dr. Muhammad Shahbaz</td>
                                        </tr>
                                        <tr>
                                            <td>Abstractive Summarization of Video Sequences</td>
                                            <td>Dr. M. Usman Ghani Khan</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>

</main>
<?php $this->endSection();  ?>


<?php $this->section("footerScripts")  ?>

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
 <script>
        (function() {
            'use strict'
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            tooltipTriggerList.forEach(function(tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl)
            })
        })()
    </script>



<?php $this->endSection();  ?>