<?php $this->extend('layouts/default');    ?>

<?php $this->section('headFiles')  ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Add Suggestion
<?php $this->endSection();  ?>

<?php $this->section('styles')  ?>


<style>
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


<div class="my-3 mx-3">
    <?php if (session()->has('error')) :  ?>

        <div class="container col-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        </div>

    <?php endif ?>

    <?php if (session()->has('message')) :  ?>

        <div class="container col-6">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?= session('message') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        </div>

    <?php endif ?>

    <div class="LoginContainer container " style="box-shadow:1px 1px 7px 3px rgb(160, 159, 159);">
        <?= form_open(site_url("Student/addSuggestion")) ?>
        <h3 class="text-center py-2 text-white">Suggestion Content</h3>


        <div class="col-md-9 col-10 mx-auto " style="padding: 0;">
            <input type="hidden" class="form-control" name="SG_Id" required value="<?= old('SG_Id', isset($data) ? $data['SG_Id'] : '') ?>">
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title" required placeholder="title" value="<?= old('title', isset($data) ? $data['SG_Title'] : '') ?>" onkeypress="return check(event)">
                        <label for="floatingInput">Title</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'SG_Title'); ?>
                        </p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingInput2" required name="type" aria-label="Floating label select example">
                            <?php
                            foreach ($sgt as $t) {
                                echo  "<option value=\"" . $t['SGT_Id'] . "\">" . $t["SGT_Title"] . "</option> \n\t\t\t\t";
                            }
                            ?>
                        </select>
                        <label for="floatingInput2">Type</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingInput3" required name="severity" aria-label="Floating label select example">

                            <option value="High" selected>High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>

                        </select>
                        <label for="floatingInput3">Type</label>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Enter details" name="desc" required id="floatingTextarea9" style="height: 80px" oninput="return checkDesc(event)"><?= old('desc', isset($data) ? $data['SG_Desc'] : '') ?></textarea>
                        <label for="floatingTextarea9 mb-3">Description</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'SG_Desc'); ?>
                        </p>

                    </div>
                </div>

            </div>
            <div class="text-center">
                <a href="#" style="color: white; text-decoration: none; font-size: 18px;">
                    <button class="submit my-3 mb-4" type="submit">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

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

    checkURL = (event) => {

        data = event.srcElement.value;

        let res = /(((http:\/\/|https:\/\/)))(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/i.test(
            data);

        console.log(data);
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