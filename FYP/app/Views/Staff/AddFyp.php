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
FYP
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
        <?= form_open("Staff/addFyp") ?>
        <h3 class="text-center py-2 text-white">FYP Project Details</h3>


        <div class="col-md-9 col-10 mx-auto " style="padding: 0;">
            <input type="hidden" class="form-control" name="FYP_Id" required value="<?= old('FYP_Id', isset($data) ? $data['FYP_Id'] : '') ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="title" name="title" required onkeypress="return check(event)">
                        <label for="floatingInput">Title</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FYP_Title'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">

                        <select class="form-select" id="sup" aria-label="Floating label select example" name="sup" required>
                            <?php
                            foreach ($faculty as $fac) {
                                echo  "<option value=\"" . $fac['id'] . "\">" . $fac["rank"]['value'] . ' ' . $fac['name'] . "</option> \n\t\t\t\t";
                            }
                            ?>
                        </select>
                        <label for="floatingSelect">Supervisor</label>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="coSup" aria-label="Floating label select example" name="coSup" required>
                            <?php
                            foreach ($faculty as $fac) {
                                echo  "<option value=\"" . $fac['id'] . "\">" . $fac["rank"]['value'] . ' ' . $fac['name'] . "</option> \n\t\t\t\t";
                            }
                            ?>
                        </select>
                        <label for="floatingSelect">Co-Supervisor</label>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">

                        <select class="form-select" id="cate" aria-label="Floating label select example" name="category" required>
                            <?php
                            foreach ($cat as $category) {
                                echo  "<option value=\"" . $category['id'] . "\">" . $category['value'] . "</option> \n\t\t\t\t";
                            }
                            ?>
                        </select>

                        <label for="floatingSelect">Domain</label>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">

                        <input type="number" class="form-control" id="floatingInput" placeholder="session" name="session" value="2018" required>
                        <label for="floatingInput">Session</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="type">
                            <option value="Development" selected>Development</option>
                            <option value="Research">Research</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                        <label for="floatingSelect">Category</label>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-floating mb-1">
                        <textarea class="form-control" placeholder="Enter details" id="floatingTextarea2" style="height: 100px" name="desc" oninput="return checkDesc(event)"></textarea>
                        <label for="floatingTextarea2">Description</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'FYP_Description'); ?>
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

        </form>


    </div>
</div>

<?php $this->endSection();  ?>



<?php $this->section('footerScripts')  ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

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