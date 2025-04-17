<?php 
// Database Connection
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>LMS | Contact Us</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300i,300,400,500,600,700,400i,500%7CPlayfair+Display:400,700,900" rel="stylesheet">
    <!-- owl Carousel assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- hover anmation -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <!-- Nile icon -->
    <link rel="stylesheet" href="assets/css/nile_icons.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color-2.css">
    <!-- Nile Slider -->
    <link rel="stylesheet" href="assets/css/nile-slider.css">
    <!-- elegant icon -->
    <link rel="stylesheet" href="assets/css/elegant_icon.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/css/settings.css">

</head>

<body>
 <?php include_once('includes/header.php');?>

    <div class="nile-page-title">
        <div class="container">
            <h1>Contacts Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contacts Us</li>
            </ul>

        </div>
    </div>

<?php 
$query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
while ($row=mysqli_fetch_array($query)) {
?>


    <div class="padding-tb-100px section-ba-1">
        <div class="container">

            <div class="row">

                <div class="col-lg-4">
                    <div class="icon-text layout-1">
                        <div class="icon"><img src="assets/icons/map-location.svg" alt=" "></div>
                        <h3><?php echo $row['PageDescription'];?></h3>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-text layout-1">
                        <div class="icon"><img src="assets/icons/message.svg" alt=" "></div>
                        <h3><?php echo $row['Email'];?></h3>
                    </div>
                </div>

   

                <div class="col-lg-4">
                    <div class="icon-text layout-1">
                        <div class="icon"><img src="assets/icons/24-hours.svg" alt=" "></div>
                         <h3><?php echo $row['MobileNumber'];?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>







     <?php include_once('includes/footer.php');?>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/nile-slider.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
