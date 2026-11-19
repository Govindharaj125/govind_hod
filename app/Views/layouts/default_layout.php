<!DOCTYPE html>
<html lang="en">

<head>
    
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="CharityPress - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />



        <title>CSI St Mark's Church</title>
        <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">


<!-- Stylesheet -->
<link href="<?php echo base_url(); ?>/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/frontend/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/frontend/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/frontend/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php echo base_url(); ?>/frontend/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo base_url(); ?>/frontend/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo base_url(); ?>/frontend/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo base_url(); ?>/frontend/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo base_url(); ?>/frontend/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="<?php echo base_url(); ?>/frontend/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo base_url(); ?>/frontend/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url(); ?>/frontend/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url(); ?>/frontend/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php echo base_url(); ?>/frontend/css/colors/theme-skin-blue-gary.css" rel="stylesheet" type="text/css">

<!-- Success Alert CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Yellowtail&display=swap" rel="stylesheet">
	


<!-- external javascripts -->
<script src="<?php echo base_url(); ?>/frontend/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url(); ?>/frontend/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>/frontend/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo base_url(); ?>/frontend/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- loader Start -->
    <!-- <div id="loading">
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
    </div> -->
    <!-- loader END -->


    <!-- Wrapper Start -->
    <div id="wrapper" class="clearfix">


        <?php echo $this->include('layouts/include/menu'); ?>


        <?php // $this->include('layouts/include/banner');
        ?>
         
  <!-- Start main-content -->
  
                <?php echo $contents; ?>
            
  
        <?php //$this->renderSection('content')
        ?>

    </div>
    <!-- Wrapper END -->
    <?php echo $this->include('layouts/include/footer'); ?>




   
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url(); ?>/frontend/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).ready(function() {
            <?php if(session()->getFlashdata('status')) { ?>
            alertify.set('notifier','position', 'top-right', 'text-white');
            alertify.success("<?= session()->getFlashdata('status') ?>");
            <?php } ?>
        })
    </script>

    <script>
        // $(function() {
        //     $('[type="date"]').prop('max', function() {
        //         return new Date().toJSON().split('T')[0];
        //     });
        // });
    </script>

</body>

</html>