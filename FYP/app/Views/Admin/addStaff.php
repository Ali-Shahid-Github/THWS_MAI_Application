<?php $this->extend('layouts/default');    ?>

<?php $this->section('headFiles')  ?>



<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="assets/css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Staff Details
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
        <?= form_open("$url") ?>
        <h3 class="text-center py-2 text-white">Staff Member Details</h3>


        <div class="col-md-9 col-10 mx-auto " style="padding: 0;">
            <input type="hidden" class="form-control" name="SF_Id" required value="<?= old('SF_Id', isset($data) ? $data['SF_Id'] : '') ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="name" required placeholder="Name" value="<?= old('name', isset($data) ? $data['SF_Name'] : '') ?>" onkeypress="return check(event)">
                        <label for="floatingInput">Name</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'SF_Name'); ?>
                        </p>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" id="email" class="form-control" name="email" required placeholder="email" value="<?= old('email', isset($data) ? $data['SF_Email'] : '') ?>">
                        <label for="email">Email</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'SF_Email'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingInput2" required name="rank" aria-label="Floating label select example">
                            <?php
                            foreach ($ranks as $rank) {
                                echo  "<option value=\"" . $rank['SR_ID'] . "\">   " . $rank['SR_Title'] . "  </option> \n\t\t\t\t";
                            }
                            ?>
                        </select>

                        <label for="floatingInput2">Rank</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'SR_Title'); ?>
                        </p>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" id="office" class="form-control" name="office" placeholder="Office" value="<?= old('office', isset($data) ? $data['SF_Office'] : '') ?>" onkeypress="return checkOffice(event)">
                        <label for="office">Office</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'SF_Office'); ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="form-floating mb-3">
                        <input type="text" id="phone" class="form-control" name="phone" required placeholder="phone" value="<?= old('phone', isset($data) ? $data['SF_Phone'] : '') ?>">
                        <label for="phone">Phone</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'SF_Phone'); ?>
                        </p>
                    </div>

                </div>
            </div>


        </div>

        <div class="text-center ">
            <a href="#" style="color: white; text-decoration: none; font-size: 18px;">
                <button class="submit my-2" type="submit">

                    <i class="fas fa-plus-square "></i>&nbsp;&nbsp;Submit

                </button>
            </a>
        </div>

    </div>


    </form>


</div>
</div>

<?php $this->endSection();  ?>



<?php $this->section('footerScripts')  ?>

<script src="assets/vendor/aos/aos.js "></script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script>
    check = (event) => {
        let res = event.charCode === 0 || /^[a-z\ \s]+$/i.test(String.fromCharCode(event.charCode));
        if (res) {
            event.srcElement.style = "border:1px solid #1266f1;";
            return true;
        } else {
            event.srcElement.style = "border:2px solid red";

            return false;
        }



    }
    checkOffice = (event) => {
        let res = event.charCode === 0 || /^[A-Za-z0-9-_ ]+$/is.test(String.fromCharCode(event.charCode));
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