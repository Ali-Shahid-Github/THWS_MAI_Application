<?php $this->extend('layouts/default');    ?>

<?php $this->section('headFiles')  ?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Login
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

    img {
        width: 100%;
    }

    .login {
        height: 80vh;
        width: 100%;
        background: white;
        position: relative;
    }

    .login_box {
        width: 80vw;
        height: 100vh;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        border-radius: 10px;
        box-shadow: 2px 6px 26px 2px #0004;
        /* display: flex; */
        overflow: hidden;
    }

    .submit {
        /* border: none; */
        padding: 15px 70px;
        border-radius: 8px;
        display: block;
        margin: auto;
        margin-top: 120px;
        background: #08667e;
        color: #fff !important;
        font-weight: bold;
        -webkit-box-shadow: 0px 9px 15px -11px #39b0d9;
        -moz-box-shadow: 0px 9px 15px -11px #39b0d9;
        box-shadow: 0px 9px 15px -11px #d1d1d1;
        border: 2px solid white;
        transition: all 0.5s;
    }

    .submit:hover {
        background-color: white;
        color: black !important;
        transition: all 0.5s;
        border: 2px solid #08667e;
        /* box-shadow: 1px 1px 8px #d1d1d1; */
    }

    .submit {
        color: white;
        transition: all 0.5s;
    }

    .top_link img {
        width: 28px;
        padding-right: 7px;
        margin-top: -3px;
    }

    .rBox h1 {
        font-size: 32x !important;
        color: white;
    }

    /* @media (min-width:356px) {
        .rBox h1 {
            font-size: 32px;
        }
    } */

    .regular-checkbox:checked {
        background-color: #e46e29;
        border: 1px solid #adb8c0;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05), inset 15px 10px -12px rgba(255, 255, 255, 0.1);
        color: #99a1a7;
    }

    .imgFaculty {
        border-radius: 3%;
        object-fit: cover;
        max-width: 25%;
    }
</style>

<?php $this->endSection();  ?>


<?php $this->section('content')  ?>


<div id="loginn" class="py-2" style="padding-top: 12px; ">


    <?php if (session()->has('errors')) :  ?>

        <div class="container col-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session('errors') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        </div>

    <?php endif ?>


    <div class="container  " style="box-shadow:1px 1px 7px 3px rgb(116 116 116);">
        <div class="row ">
            <div class="col-12 col-md-6 ">
                <div class="text-center mx-auto d-flex flex-row justify-content-center py-3">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Signup</button>
                        </li>

                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">                   
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div>

                            <h3 class="text-center py-2">LOGIN</h3>


                            <div class="col-8 pt-4 mx-auto " style="padding: 0;">
                                <h6>Enter Your Credentials to login</h6>
                                <br>
                                <?= form_open("Home/makeLogin") ?>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                                    <label for="floatingInput">Email address</label>

                                </div>
                                <div class="form-floating mb-3">

                                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input regular-checkbox" type="checkbox" name="isRem" id="autoSizingCheck">
                                        <label class="form-check-label" for="autoSizingCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="submit my-4" type="submit">
                                Login
                            </button>
                            </form>

                        </div>
                    </div>

                    <!-- Section Signup Student -->
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <div>
                            <h3 class="text-center py-2">Sign Up</h3>

                            <div class="col-8 pt-4 mx-auto " style="padding: 0;">
                                <h6>Enter Your Credentials to register yourself</h6>
                                <br>
                                <?= form_open(site_url("Home/signup"), ['enctype' => 'multipart/form-data']) ?>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="cnic" placeholder="name@example.com" required>
                                        <label for="floatingInput">CNIC</label>

                                    </div>
                                    <div class="form-floating mb-3">

                                        <input type="email" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                                        <label for="floatingPassword">Email ID</label>
                                    </div>
                                    <div class="col-md p-0">
                                        <div class="mb-3">
                                            <label for="formFileSm" class="form-label">Student Card Front Side</label>
                                            <input class="form-control " id="formFileSm" type="file">
                                            
                                        </div>
                                        
                                    </div>
                                    <button class="submit mb-4 mt-1" type="submit">Sign up</button>                 
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" d-none col-md-6 rBox  d-md-flex flex-column justify-content-center align-items-center" style="background-color: #08667e; ">
            
                <img src="/assets/images/csLogo.png" alt="logo" class="mx-auto imgFaculty img-fluid ">
                <h3 class="text-white pt-2" id="txt1">Welcome Back!</h3>
                <h5 class="text-white" id="txt2">Login to your Dashboard</h5>

            </div>
        </div>
    </div>
</div>



<?php $this->endSection();  ?>


<?php $this->section('footerScripts')  ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script>
    loginBtn = document.getElementById("login-tab");
    signBtn = document.getElementById("signup-tab");

    loginBtn.addEventListener('click', ()=>{
        document.getElementById("txt1").innerHTML="Welcome Back!";
        document.getElementById("txt2").innerHTML="Login to your Dashboard";
    });
    
    signBtn.addEventListener('click', ()=>{
        document.getElementById("txt1").innerHTML="Dept. Of Computer Science";
        document.getElementById("txt2").innerHTML="SignUp to get your Dashboard";
    });
</script>
<?php $this->endSection();  ?>