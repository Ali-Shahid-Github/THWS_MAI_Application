<?php $this->extend('layouts/default');    ?>

<?php $this->section('headFiles')  ?>



<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Faculty 
<?php $this->endSection();  ?>

<?php $this->section('styles')  ?>


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

<?php $this->section('content')  ?>


<div id="loginn" class="mt-3 mx-3 mt-3 mb-3">
    <?php if (session()->has('error')) :  ?>

        <div class="container col-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        </div>

    <?php endif ?>

    <div class="container LoginContainer " style="box-shadow:1px 1px 7px 3px rgb(160, 159, 159);">
        <?= form_open("Staff/addFaculty",  ['enctype' => 'multipart/form-data'])  ?>
        <h3 class="text-center py-2 text-white">Faculty Details</h3>


        <div class="col-md-9 col-10 mx-auto " style="padding: 0;">
            <input type="hidden" class="form-control" name="FC_Id" required value="<?= old('FC_Id', isset($data) ? $data['FC_Id'] : '') ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="fc_name" value="<?= old('fc_name', isset($data) ? $data['FC_Name'] : '') ?>">
                        <label for="floatingInput">Full Name</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FC_Name'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="rank">
                                <?php
                                foreach ($ranks as $rank) {
                                    echo  "<option value=\"" . $rank['FR_Id'] . "\">" . $rank['FR_Title'] . "</option> \n\t\t\t\t";
                                }
                                ?>
                            </select>
                            <label for="floatingSelect">Rank</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Office" name="office" value="<?= old('office', isset($data) ? $data['FC_Office'] : '') ?>">
                        <label for="floatingInput">Office</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FC_Office'); ?>
                        </p>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="number" name="contact" value="<?= old('contact', isset($data) ? $data['FC_Phone'] : '') ?>">
                        <label for="floatingInput">Contact</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FC_Phone'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email" value="<?= old('email', isset($data) ? $data['FC_Email'] : '') ?>">
                        <label for="floatingInput">Email</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FC_Email'); ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Hours" name="aHours" value="<?= old('aHours', isset($data) ? $data['FC_AvailableHour'] : '') ?>">
                        <label for="floatingInput">Available Hours</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FC_AvailableHour'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect3" name="domain" aria-label="Floating label select example">

                                <option value="IHCI" selected>IHCI</option>
                                <option value="UX/UI">UX/UI</option>
                                <option value="Programming">Programming</option>
                                <option value="Web Dev">Web Development</option>
                                <option value="Mobile Dev">Mobile Development</option>
                                <option value="Programming">Programming</option>
                                <option value="Database">Database</option>
                                <option value="Soft Eng.">Software Engineering</option>
                                <option value="AI/ML">AI/ML</option>
                            </select>
                            <label for="floatingSelect3">Domain</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-floating">

                <div class="input-group col-md-7 col-12 mx-auto">
                    <input type="file" name="photo" accept="image/png, image/jpeg" class="form-control  pt-2" id="inputGroupFile02" style="font-size: 16px; height: 42px;">
                    <label class="input-group-text text-white " style="background-color: #e46e29; " for="inputGroupFile02">Profile Image</label>

                </div>
                <p class="text-danger">
                    <?php echo getErrorMessage('errors', 'FC_Photo'); ?>
                </p>

            </div>




        </div>
        <div class="text-center ">
            <a href="#" style="color: white; text-decoration: none; font-size: 18px;">
                <button class="submit my-2" type="submit">

                    <i class="fas fa-plus-square "></i>&nbsp;&nbsp;Submit

                </button>
            </a>
        </div>

        </form>


    </div>
</div>

<?php $this->endSection();  ?>



<?php $this->section('footerScripts')  ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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

    checkDesc = (event) => {

        data = event.srcElement.value;
        let res = /^[a-z\d\-_\'\".#$@+=:;\s]+$/i.test(data);
        if (res) {
            event.srcElement.style = "border:1px solid #1266f1;";
            return true;
        } else {
            event.srcElement.style = "border:2px solid red";

            return false;
        }


    }
</script>

<?php $this->endSection();  ?>