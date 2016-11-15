<!doctype html>

<html lang="en" class="no-js">


<head>
    <meta charset="UTF-8">
    <title>Vidyanusa - Playable Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/core/resources/assets/img/shorcut-icon.png">

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/core/resources/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/core/resources/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/core/resources/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/core/resources/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/core/resources/assets/css/settings.css">

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/core/resources/assets/css/freeze.css">

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/core/resources/assets/semantic/dist/semantic.css">

    <style>
        <?php echo $__env->yieldContent('css'); ?>
    </style>
    <script type="text/javascript" src="<?php echo e(url('/')); ?>/core/resources/assets/js/modernizr.custom.32033.js"></script>
    <script type="text/javascript">

    </script>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>

<body>

<div class="pre-loader">
    <div class="load-con">
        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/freeze/logo.png" class="animated fadeInDown" alt="">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
<div class="wrapper">
    <br/>
    <?php echo $__env->yieldContent('main-content'); ?>
    <br/>
    <footer>
        <div class="container">
            <a href="<?php echo e(url('/')); ?>" class="scrollpoint sp-effect3">
                <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/freeze/logo.png" alt="" class="logo">
            </a>
            <div class="social">
                <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="https://plus.google.com/u/0/103316261532547269831/posts" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                <a href="https://www.facebook.com/vidyanusa" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
            </div>
            <div class="rights">
                <p>&copy; 2016 Institut Teknologi Bandung</p>
                <?php /*<p>Template by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a></p>*/ ?>
            </div>
        </div>
    </footer>
</div>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/bootstrap.min.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/slick.min.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/placeholdem.min.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/waypoints.min.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets/js/scripts.js"></script>
<script src="<?php echo e(url('/')); ?>/core/resources/assets//semantic/dist/semantic.min.js"></script>


<script>
    $(document).ready(function() {
        appMaster.preLoader();

        /*setInterval(function(){
         $.ajax({
         url : BASE_URL + 'main/count_online',
         dataType: 'text',
         success: function (data) {
         $("#cnt_ol").html(data);
         }
         });
         },5000);*/

    });
    $('select.dropdown')
            .dropdown()
    ;
</script>

</body>

</html>
