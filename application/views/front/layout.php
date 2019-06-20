<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>USKT - University Of Sialkot</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
   
    <link href="<?php echo base_url() ?>templates/front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/css-plugin-collections.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>templates/front/css/menuzord-megamenu.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>templates/front/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet">
    
    <link href="<?php echo base_url() ?>templates/front/css/style-main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/utility-classes.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/custom.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/lightbox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>templates/front/css/magnific.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo base_url() ?>templates/front/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>templates/front/js/bootstrap.min.js"></script>
    
    <?php
    if(isset($page_assets) == "home-index"){
?><link href="<?php echo base_url() ?>templates/front/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url() ?>templates/front/js/revolution-slider/css/settings.css"/>
     <link rel="stylesheet" href="<?php echo base_url() ?>templates/front/js/revolution-slider/css/layers.css"/>
     <link rel="stylesheet" href="<?php echo base_url() ?>templates/front/js/revolution-slider/css/navigation.css"/>

     <script src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
     <script src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<?php
    }
    ?>
</head>
<body>
<div id="wrapper" class="clearfix">
<div id="preloader" style="display: none;">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
</div>

<?php
 if(isset($page_assets) == "home-index"){
include('page/header.php');
 }
 else
 {
    include('page/header1.php');   
 }
?>
<div class="main-content">
<?php
  include($page_name.".php");

?>
</div>
<?php
include('page/footer.php');
?>
</div>
<script src="<?php echo base_url() ?>templates/front/js/owl-carousel.js"></script>
<script src="<?php echo base_url() ?>templates/front/js/custom.js"></script>
<script src="<?php echo base_url() ?>templates/front/js/lightbox.js"></script>
<script src="<?php echo base_url() ?>templates/front/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>templates/front/js/magnific.min.js"></script>
<?php
if(isset($form_validation) == "validation"){
    ?>
	<script src="<?php echo base_url() ?>templates/front/js/validations/jquery.validate.js"></script>
    <script src="<?php echo base_url() ?>templates/front/js/validations/custom-validation.js"></script>
    <?php
}
?>
<?php
    if(isset($page_assets) == "home-index"){
?>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>templates/front/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<?php
    }
?>
</body>

</html>