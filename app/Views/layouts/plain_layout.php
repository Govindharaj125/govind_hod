<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- ========== Page Title ========== -->
    <title>vending machine</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/png">

    <!-- ========== Start Stylesheet ========== -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/responsive.css">
    <script src="<?php echo base_url(); ?>/public/js/jquery.min.js"></script>
</head>
<body>
     <!-- loader Start -->
     <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader END -->

<!-- 
<div id="content-page" >
    <div class="container-fluid">
       
    </div>
</div> -->
<?php echo $contents; ?>
<?php //$this->renderSection('content') 
?>


<!-- Wrapper END -->
<?php //echo $this->include('layouts/include/footer'); ?>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="<?php echo base_url(); ?>/public/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>/public/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>/public/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/lottie.js"></script>
<!-- Chart Custom JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="<?php echo base_url(); ?>/public/js/custom.js"></script>



</body>

</html>