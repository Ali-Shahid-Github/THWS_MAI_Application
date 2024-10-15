<?php  $this->include('layouts/headerFooter');    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="UET Computer Science Department" name="description">
    <meta content="UET CS " name="keywords">
    <link href="/assets/images/csLogo.png" rel="icon">
    <!-- Google Fonts -->


    <?php $this->renderSection('headFiles');  ?>
    <link href="/assets/css/style.css" rel="stylesheet"> 

    <title><?php $this->renderSection('title');  ?></title>
    
    <?php $this->renderSection('styles');  ?>
</head>

 

<body>

<?php $this->renderSection('header');  ?>


<?php $this->renderSection('content');  ?>


<?php $this->renderSection('footer');  ?>


<?php $this->renderSection('footerScripts');  ?>
<script src="/assets/js/main.js "></script>

</body>

</html>