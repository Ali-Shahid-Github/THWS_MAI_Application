<?php $this->extend('layouts/default');    ?>

<?php $this->section('headFiles')  ?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


<link rel="stylesheet" href="/assets/vendor/summernote/summernote-bs4.min.css">

<?php $this->endSection();  ?>

<?php $this->section('title')  ?>
Write Blog
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

    <div class="LoginContainer container" style="box-shadow:1px 1px 7px 3px rgb(160, 159, 159);">
        <?= form_open(site_url("Student/saveBlog"), ['enctype' => 'multipart/form-data', "onsubmit" => "return save()"]) ?>
        <h3 class="text-center py-2 text-white">Blog Details</h3>

        <input type="hidden" name="content" id="res">
        <div class="col-md-9 col-10 mx-auto " style="padding: 0;">
            <input type="hidden" class="form-control" name="BL_Id" required value="<?= old('BL_Id', isset($data) ? $data['BL_Id'] : '') ?>">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title" required placeholder="title" value="<?= old('title', isset($data) ? $data['BL_Title'] : '') ?>" onkeypress="return check(event)">
                        <label for="floatingInput">Title</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'BL_Title'); ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingInput2" required name="category" aria-label="Floating label select example">
                            <?php
                            foreach ($blc as $cat) {
                                echo  "<option value=\"" . $cat['BLC_Id'] . "\">" . $cat["BLC_Title"] . "</option> \n\t\t\t\t";
                            }
                            ?>
                        </select>

                        <label for="floatingInput2">Category</label>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'BLC_Id'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-md-12">
                        <div class="form-floating mb-1">
                            <textarea class="form-control" placeholder="Enter details" name="desc" required id="floatingTextarea9" style="height: 80px" oninput="return checkDesc(event)"><?= old('desc', isset($data) ? $data['BL_Description'] : '') ?></textarea>
                            <label for="floatingTextarea9 mb-3">Description</label>
                            <p class="text-danger">
                                <?php echo getErrorMessage('errors', 'BL_Description'); ?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <div class="input-group ">
                            <input type="file" class="form-control  pt-2" id="thumbnail" style="font-size: 16px; height: 42px;" name="thumbnail">
                            <label class="input-group-text text-white " style="background-color: #e46e29; " for="thumbnail">Thumbnail</label>
                        </div>
                        <p class="text-danger">
                            <?php echo getErrorMessage('errors', 'BL_Thumbnail'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <input type="text" name="res" id="summernote">

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
    
    <div type="button" class="" data-toggle="modal" data-target="#staticBackdrop" id="showLoading"></div>

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        
                        Uploading
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Hold On we are uploading data...  <span class="spinner-grow spinner-grow-sm text-primary" role="status" aria-hidden="true"></span><span class="sr-only">Loading...</span>
                </div>

            </div>
        </div>
    </div>


</div>
<?php $this->endSection();  ?>



<?php $this->section('footerScripts')  ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="/assets/vendor/summernote/summernote-bs4.min.js"></script>

<script>
    function save() {

        document.getElementById("showLoading").click();
       
        var markupStr = $('#summernote').summernote('code');
       
        document.getElementById("res").value = markupStr;
        
        return true;
    }

    $(document).ready(function() {
       
        $('#summernote').summernote({
            placeholder: 'Write Your Blog',
            tabsize: 2,
            height: 250,
            fontNames: ['Arial', 'Arial Black', 'Segoe UI', 'Times New Roman', 'Verdana', 'Roboto', 'Segoe UI Emoji', 'Segoe UI Symbol', '', 'Comic Sans MS', 'Courier New', 'Consolas'],

            toolbar: [
                ['style', ['undo', 'redo', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontname', 'fontsizeunit', 'fontsize', 'style']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height', 'fullscreen']],
                ['insert', ['picture', 'link', 'table', 'hr']]
            ],

        });


    });
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