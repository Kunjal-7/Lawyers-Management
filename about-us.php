<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>LMS | About Us</title>
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


</head>

<body>
 <?php include_once('includes/header.php');?>



    <div class="nile-page-title">
        <div class="container">
            <h1>About Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">About Us</li>
            </ul>

        </div>
    </div>
<?php 
$query=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
while ($row=mysqli_fetch_array($query)) {
?>

    <section class="padding-tb-100px section-ba-1">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="img-in">
             <img src="assets/img/about-us.jpg" alt="about-us">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="padding-tb-10px">
                        <div class="margin-bottom-30px">
                            <h2 class="text-medium-2 font-2 margin-bottom-0px text-main-color"><?php  echo $row['PageTitle'];?></h2>
                        </div>
                        <div class="text-medium margin-bottom-30px"><?php  echo $row['PageDescription'];?>
                        </div>
                        <a href="contact-us.php" class="nile-bottom layout-1">Get In Touch</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php } ?>

    <section class="padding-tb-100px">
        <div class="container">

            <div class="icons-slider owl-carousel owl-theme">

                <!-- item -->
                <div class="icon-text layout-4">
                    <div class="icon">
                        <img src="assets/icons/family-room.svg" alt="">
                    </div>
                    <h3><a href="#" class="link">Family Law</a></h3>
                </div>
                <!-- // item -->


                <!-- item -->
                <div class="icon-text layout-4">
                    <div class="icon">
                        <img src="assets/icons/money.svg" alt="">
                    </div>
                    <h3><a href="#" class="link">Business Law</a></h3>
                </div>
                <!-- // item -->


                <!-- item -->
                <div class="icon-text layout-4">
                    <div class="icon">
                        <img src="assets/icons/agenda.svg" alt="">
                    </div>
                    <h3><a href="#" class="link">Civil Litigation</a></h3>
                </div>
                <!-- // item -->

                <!-- item -->
                <div class="icon-text layout-4">
                    <div class="icon">
                        <img src="assets/icons/family-room.svg" alt="">
                    </div>
                    <h3><a href="#" class="link">Family Law</a></h3>
                </div>
                <!-- // item -->


                <!-- item -->
                <div class="icon-text layout-4">
                    <div class="icon">
                        <img src="assets/icons/money.svg" alt="">
                    </div>
                    <h3><a href="#" class="link">Business Law</a></h3>
                </div>
                <!-- // item -->


                <!-- item -->
                <div class="icon-text layout-4">
                    <div class="icon">
                        <img src="assets/icons/agenda.svg" alt="">
                    </div>
                    <h3><a href="#" class="link">Civil Litigation</a></h3>
                </div>
                <!-- // item -->


            </div>

        </div>
    </section>








    <?php include('includes/footer.php');?>





    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
