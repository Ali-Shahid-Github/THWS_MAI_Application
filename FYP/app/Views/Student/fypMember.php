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
    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Open Sans", sans-serif;
        color: #444444;
    }

    .submit {
        border: 1px solid transparent;
        padding: 12px 70px;
        border-radius: 8px;
        margin: auto;
        background: #e46e29;
        color: #fff;
        font-weight: bold;
        /* -webkit-box-shadow: 0px 9px 15px -11px #e46e29;
        -moz-box-shadow: 0px 9px 15px -11px #e46e29;
        box-shadow: 0px 9px 15px -11px #a0a0a0; */
    }

    .submit:hover {
        transition: all ease 0.4s;
        background-color: #d85a12;
        border: 1px solid #d85a12;
        /* box-shadow: 1px 1px 8px #858585; */
    }

    .LoginContainer {
        border-radius: 8px;
        background-color: #0E5359;
        margin-top: 0px;
        margin-bottom: 0px;
    }
</style>

<?php $this->endSection();  ?>


<?php $this->section('title')  ?>
FYP
<?php $this->endSection();  ?>


<?php $this->section('content')  ?>
<main id="main ">
    <!-- ======= About Section ======= -->
    <?php if (session()->has('error')) :  ?>

        <div class="container col-6 pt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        </div>

    <?php endif ?>
    <section id="about " class="about pt-5">

        <div class="container  LoginContainer" style="box-shadow:1px 1px 7px 3px rgb(160, 159, 159);">
            <?= form_open("Student/saveFypMember/" . $id . "") ?>
            <h3 class="text-center pt-3 text-white">FYP Member Details</h3>
            <p class="text-center text-white">Enter Registration Number in 2018-CS-ABC format </p>


            <div class="col-md-6 col-10 py-3  mx-auto " style="padding: 0;">
                <div class="form-floating mb-3">
                    <input type="text" disabled class="form-control" id="floatingInput" placeholder="Project Title">
                    <label for="floatingInput"><?= $title ?></label>
                    

                </div>
                <hr class="text-white col-8 mx-auto" style=" height: 4px; opacity: 1; border-radius: 50%;">
                <div class=" py-2 text-end">
                    <div class=" text-end mx-auto">
                        <button id="addBtn" class="btn btn-success rounded-left " type="button"> <span><i class="fas fa-plus fa-2x"></i></span> </button>
                    </div>
                </div>
                <div class="form-floating  mb-3">

                    <div class="form-floating ">
                        <input type="text" class="form-control" id="Reg_1" name="Reg_1" placeholder="Reg Number" required value="<?= old('Reg_1', '') ?>" onkeypress="return checkReg(event)">
                        <label for="Reg_1">Registration Number of Leader</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FYPS_M1'); ?>
                        </p>
                    </div>

                </div>

                <div class="form-floating  mb-3">

                    <div class="form-floating ">
                        <input type="text" class="form-control" id="Reg_2" name="Reg_2" placeholder="Reg Number" required value="<?= old('Reg_2', '') ?>" onkeypress="return checkReg(event)">
                        <label for="Reg_2">Registration Number 2</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FYPS_M2'); ?>
                        </p>
                    </div>

                </div>
                <div class="form-floating  mb-3">

                    <div class="form-floating ">
                        <input type="text" class="form-control" id="Reg_3" name="Reg_3" placeholder="Reg Number" required value="<?= old('Reg_3', '') ?>" onkeypress="return checkReg(event)">
                        <label for="Reg_3">Registration Number 3</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FYPS_M3'); ?>
                        </p>
                    </div>

                </div>
                <div class="form-floating  mb-3" id="regContainer">

                    <div class="form-floating ">
                        <input type="text" class="form-control" id="Reg_4" name="Reg_4" placeholder="Reg Number" required value="<?= old('Reg_4', '') ?>" onkeypress="return checkReg(event)">
                        <label for="Reg_4">Registration Number 4</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FYPS_M4'); ?>
                        </p>
                    </div>

                </div>


            </div>
            <div class="text-center ">
                <button class="submit my-3" type="submit">
                    <a style="color: white; text-decoration: none; font-size: 22px;">
                        <i class="fas fa-plus-square "></i>&nbsp;&nbsp;Submit
                    </a>
                </button>
            </div>

            </form>


        </div>




    </section>

</main>
<?php $this->endSection();  ?>

<?php $this->section('footerScripts')  ?>

<!-- <script src="/assets/vendor/aos/aos.js "></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>


<script>


checkReg = (event) => {
        let res = event.charCode === 0 || /^[a-zA-Z\d-\s]+$/i.test(String.fromCharCode(event.charCode));
        if (res) {
            event.srcElement.style = "border:1px solid #1266f1;";
            return true;
        } else {
            event.srcElement.style = "border:2px solid red";

            return false;
        }


    }

    var addbutton = document.getElementById("addBtn");
    var registrationContainer = document.getElementById("regContainer");

    var registrationNumberCount = 4;

    addbutton.addEventListener('click', (e) => {
        registrationNumberCount++;
        if (registrationNumberCount <= 5) {

            let _div = document.createElement("div");
            _div.innerHTML =
                `
                        <input type="text" class="form-control" id="Reg_${registrationNumberCount}" name="Reg_${registrationNumberCount}"   placeholder="Reg Number">
                        <label for="Reg_${registrationNumberCount}">Registration Number ${registrationNumberCount}</label>
                        
                        `;

            _div.classList.add("form-floating");
            _div.classList.add("my-2");

            registrationContainer.appendChild(_div);
            console.log(_div);
        } else {
            addbutton.setAttribute("disabled", "true");

        }

    });
</script>


<?php $this->endSection();  ?>