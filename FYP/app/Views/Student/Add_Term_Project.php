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
Term Project
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
        <h3 class="text-center py-2 text-white">Term Project Details</h3>


        <div class="col-md-9 col-10 mx-auto " style="padding: 0;">
            <input type="hidden" class="form-control" name="TP_Id" required value="<?= old('TP_Id', isset($data) ? $data['TP_Id'] : '') ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title" required placeholder="title" value="<?= old('title', isset($data) ? $data['TP_Title'] : '') ?>" onkeypress="return check(event)">
                        <label for="floatingInput">Title</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'TP_Title'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-3">

                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingInput2" required name="year" aria-label="Floating label select example">
                            <?php

                            echo  "<option value=\"" . intval(date('Y')) - 0 . "\" selected>  " . intval(date('Y')) - 0 . "</option>\n\t\t\t\t";

                            for ($i = 1; $i < 5; $i++) {

                                echo  "<option value=\"" . intval(date('Y')) - $i . "\">   " . intval(date('Y')) - $i . "  </option> \n\t\t\t\t";
                            }


                            ?>



                        </select>

                        <label for="floatingInput2">Year</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'TP_Year'); ?>
                        </p>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="number" id="semester" class="form-control" name="semester" required min="1" max="8" placeholder="semester" value="<?= old('semester', isset($data) ? $data['TP_Sem'] : '1') ?>">
                        <label for="semester">Semester</label>
                        <?php echo getErrorMessage('errors', 'TP_Sem'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect3" name="category" aria-label="Floating label select example">

                                <option value="IHCI" selected>IHCI</option>
                                <option value="UI/UX">UX/UI</option>
                                <option value="Programming">Programming</option>
                                <option value="Web Dev">Web Development</option>
                                <option value="Mobile Dev">Mobile Development</option>
                                <option value="Programming">Programming</option>
                                <option value="Database">Database</option>
                                <option value="Soft Eng.">Software Engineering</option>
                                <option value="AI/ML">AI/ML</option>
                            </select>
                            <label for="floatingSelect3">Category</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect4" name="type" aria-label="Floating label select example">

                                <option selected value="3">Desktop</option>
                                <option value="2">Web</option>
                                <option value="1">Console</option>
                                <option value="4">Mobile</option>
                            </select>
                            <label for="floatingSelect4">Type</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect5" name="lang" aria-label="Floating label select example" value="<?= old('lang', isset($data) ? $data['TP_Lang'] : '') ?>">

                                <option value="C-C++" selected>C/C++</option>
                                <option value="C#">C#</option>
                                <option value="Python">Python</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="Java">Java</option>
                                <option value="PHP">PHP</option>


                            </select>
                            <label for="floatingSelect5">Language</label>
                            <p class="text-danger">
                                <?php echo getErrorMessage('errors', 'TP_Lang'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect6" name="tbd" aria-label="Floating label select example">
                                <option value="1">Personal</option>
                                <option selected value="2">Term Project</option>
                            </select>
                            <label for="floatingSelect6">TBD</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput7" name="github" required placeholder="github" value="<?= old('github', isset($data) ? $data['TP_Github'] : '') ?>" oninput="return checkURL(event)">
                        <label for="floatingInput7">Github Link</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'TP_Github'); ?>
                        </p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput8" name="youtube" required placeholder="YouTube" value="<?= old('youtube', isset($data) ? $data['TP_Youtube'] : '') ?>" oninput="return checkURL(event)">
                        <label for="floatingInput8">Youtube Link</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'TP_Youtube'); ?>
                        </p>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-floating mb-1">
                        <textarea class="form-control" placeholder="Enter details" name="desc" required id="floatingTextarea9" style="height: 75px" oninput="return checkDesc(event)"><?= old('desc', isset($data) ? $data['TP_Desc'] : '') ?></textarea>
                        <label for="floatingTextarea9 mb-3">Description</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'TP_Desc'); ?>
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

        let res = /(((http:\/\/|https:\/\/)))(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/i.test(data);

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