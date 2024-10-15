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
Add Research
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
        <?= form_open(site_url("Faculty/addResearch")) ?>
        <h3 class="text-center py-2 text-white">Research Content</h3>


        <div class="col-md-9 col-10 mx-auto " style="padding: 0;">
            <input type="hidden" class="form-control" name="RS_Id" required value="<?= old('RS_Id', isset($data) ? $data['RS_Id'] : '') ?>">
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title" required placeholder="title" value="<?= old('title', isset($data) ? $data['RS_Title'] : '') ?>" onkeypress="return check(event)">
                        <label for="floatingInput">Title</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'RS_Title'); ?>
                        </p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="journal" name="journal" required placeholder="journal" value="<?= old('journal', isset($data) ? $data['RS_Journal'] : '') ?>" onkeypress="return check(event)">
                        <label for="journal">Journal</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'RS_Journal'); ?>
                        </p>

                    </div>
                </div>
              
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInputAuthor" name="author" required placeholder="author" value="<?= old('author', isset($data) ? $data['RS_Authors'] : '') ?>">
                        <label for="floatingInputAuthor">Authors</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'RS_Authors'); ?>
                        </p>

                    </div>
                </div>
            </div>           


            <div class="row">
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rs_year" name="year" required placeholder="year" value="<?= old('year', isset($data) ? $data['RS_Year'] : '') ?>" onkeypress="return checkDate(event)">
                        <label for="rs_year">Year</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'RS_Year'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect3" name="category" aria-label="Floating label select example">
                            <option value="IHCI" selected>IHCI</option>
                            <option value="AI/ML">AI/ML</option>
                            <option value="IoT">IoT</option>
                            <option value="Information Systems">Information Systems</option>
                            <option value="Health">Health</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Networking">Networking</option>
                            <option value="Signal Processing">Signal Processing</option>
                            <option value="Computer Vision">Computer Vision</option>
                            <option value="Database">Database</option>
                        </select>
                        <label for="floatingSelect3">Category</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInputDOI" name="doi" required placeholder="doi" value="<?= old('doi', isset($data) ? $data['RS_DOI'] : '') ?>">
                        <label for="floatingInputDOI">DOI</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'RS_DOI'); ?>
                        </p>

                    </div>
                </div>


            </div>


         
            <div class="row">

                <div class="col-12">
                <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Enter details" name="desc" required id="floatingTextarea9" style="height: 150px" ><?= old('desc', isset($data) ? $data['RS_Desc'] : '') ?></textarea>
                            <label for="floatingTextarea9 mb-3">Description</label>
                            <p class="text-danger">
                                <?php echo getErrorMessage('errors', 'RS_Desc'); ?>
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

    checkDate = (event) => {

        let res = event.charCode === 0 || /^[\d]+$/i.test(String.fromCharCode(event.charCode));
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