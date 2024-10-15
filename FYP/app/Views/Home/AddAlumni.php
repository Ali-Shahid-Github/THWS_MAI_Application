<?php $this->extend('layouts/default');    ?>


<?php $this->section('headFiles')  ?>

<title>Add Alumni</title>

<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="assets/css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />


<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Alumni
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
        background: #d85a12;
        color: #fff;
        font-weight: bold;
        /* -webkit-box-shadow: 0px 9px 15px -11px #e46e29;
        -moz-box-shadow: 0px 9px 15px -11px #e46e29;
        box-shadow: 0px 9px 15px -11px #a0a0a0; */
    }

    .submit:hover {
        transition: all ease 0.4s;
        background-color: #e46e29;
        border: 1px solid #d85a12;
        /* box-shadow: 1px 1px 8px #858585; */
    }
    .submit:disabled {
        transition: all ease 0.4s;
        background-color: #8d5535;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 2px 10px 0 rgb(0 0 0 / 10%);
    border: 0;
        
    }

    .top_link img {
        width: 28px;
        padding-right: 7px;
        margin-top: -3px;
    }


    .ConMain {
        border-radius: 8px;
        background-color: #0E5359;
        margin-top: -12px;
        margin-bottom: 12px;
    }
</style>

<?php $this->endSection();  ?>

<?php $this->section('content')  ?>

<div id="loginn">
    <?php if (session()->has('error')) :  ?>

        <div class="container col-6 my-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        </div>

    <?php endif ?>
    <div class="container ConMain my-3 " style="box-shadow:1px 1px 7px 3px rgb(160, 159, 159);">
        <?= form_open("Home/addAlumni", ['enctype'=> 'multipart/form-data']) ?>
        <h3 class="text-center pt-4 text-white">Alumni Details</h3>

        <br>
        <div class="col-8 pt-2 mx-auto " style="padding: 0;">
            <div class="row">
                <div class="col-md- " style=" align-items: center;">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="photo" name="photo" required accept="image/png, image/jpeg">
                        <label class="input-group-text text-white" style="background-color: #e46e29;" for="photo">Upload Image</label>
                        
                        
                    </div>
                    <p class="text-danger">
                            
                            <?php echo getErrorMessage('errors', 'AL_Photo'); ?>
                        </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput2" name="name" placeholder="name" required value="<?= old('name', '') ?>" onkeypress="return check(event)">
                        <label for="floatingInput2">Name</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_Name'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="reg_no" placeholder="reg_no" required value="<?= old('reg_no', '') ?>" onkeypress="return checkReg(event)">
                        <label for="floatingInput">Registration No.</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_RegNo'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="email" required value="<?= old('email', '') ?>">
                        <label for="floatingInput">Email</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_Email'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="designation" placeholder="designation" value="<?= old('designation', '') ?>" onkeypress="return checkDes(event)">
                        <label for="floatingInput">Designation</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_Desgnation'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="company" placeholder="company" value="<?= old('company', '') ?>" onkeypress="return checkDes(event)">
                        <label for="floatingInput">Company</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_Company'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="wb" placeholder="wb" required value="<?= old('wb', '') ?>">

                        <label for="floatingInput">WhatsApp</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_WhatsApp'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row">
              
              <div class="col-md-12">
                  <div class="form-floating mb-3">
                      <textarea class="form-control" id="floatingTextarea2" name="info" placeholder="Your Info" required style="height: 59px" oninput="return checkDesc(event)"><?= old('info', '') ?></textarea>
                      <label for="floatingTextarea2">Description</label>
                      <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_Info'); ?>
                        </p>
                  </div>
              </div>
          </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" name="session" placeholder="session" required value="<?= old('sessoin', '') ?>">
                        <label for="floatingInput">Session</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_Session'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="fb_id" placeholder="fb_id" required value="<?= old('fb_id', '') ?>" oninput="return checkURL(event)">
                        <label for="floatingInput">Facebook ID</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_FB'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="ln" placeholder="ln" required value="<?= old('ln', '') ?>" oninput="return checkURL(event)">
                        <label for="floatingInput">LinkedIn Profile</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'AL_LinkedIn'); ?>
                        </p>

                    </div>
                </div>
            </div>
           



        </div>
       
        <div class="text-center mb-2">
            <button class=" submit  mb-5" style="margin-top: 10px;" type="submit" id="subBtn">
                <span style="color: white; text-decoration: none;">
                    <i class="fas fa-plus-square"></i>&nbsp;&nbsp;Submit
                </span>
            </button>
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
  
    var btn = document.getElementById("subBtn");
    btn.addEventListener('submit', ()=>{
        btn.setAttribute('disabled', true);
    });

    check = (event) => {
        let res = event.charCode === 0 || /^[a-z\s]+$/i.test(String.fromCharCode(event.charCode));
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

    checkDes = (event) => {
        let res = event.charCode === 0 || /^[a-zA-Z.\s]+$/i.test(String.fromCharCode(event.charCode));
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
        let res = /^[a-z\d\-_\'\".#,$@+=:;\s]+$/i.test(data);
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