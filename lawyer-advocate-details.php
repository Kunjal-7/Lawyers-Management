<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>LRMS |  Lawyers & Advocate Details</title>
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
<style type="text/css">
.heading{
text-decoration:underline; 
text-decoration-color: #ccc; 
margin-bottom: 30px; 
font-size:24px;     
font-family:Playfair Display serif;"

    }
</style>
</head>

<body>
 <?php include_once('includes/header.php');?>
    <!-- // Search  -->
<?php
$lawyerid=intval($_GET['lid']);
$query=mysqli_query($con,"select * from tbllawyers where id='$lawyerid' and  IsPublic=1");
while ($result=mysqli_fetch_array($query)) {
?>
    <div class="nile-page-title">
        <div class="container">
            <h1><?php echo $result['LawyerName'];?></h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Lawyer / Advocates</a></li>
                <li class="active"><?php echo $result['LawyerName'];?></li>
            </ul>

        </div>
    </div>

    <div class="padding-tb-100px attorney-detail">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-lg-5">
                            <img src="admin/lawyerpic/<?php echo $result['ProfilePic'];?>" alt="Profile Pic">
                        </div>
                        <div class="col-lg-7">
                            <div class="attorney-content">
                                <div class="margin-bottom-40px">

                                    <h5>Personal Details</h5>
                                    <ul class="details">
                                        <li><strong>Email:</strong> <?php echo $result['LawyerEmail'];?></li>
                                        <li><strong>Mobile:</strong> <?php echo $result['LawyerMobileNo'];?></li>
                                        <li><strong>Office Adress:</strong><?php echo $result['OfficeAddress'];?></li>
                                        <li><strong>City:</strong> <?php echo $result['City'];?></li>
                                        <li><strong>State:</strong> <?php echo $result['State'];?></li>

                                    </ul>
                           
                                </div>


                            </div>
                        </div>
                    </div>

                    <hr class="margin-tb-30px">
      <h5 class="heading">Languages Known</h5>
<p><?php echo $result['LanguagesKnown'];?></p>
<h5 class="heading">Work Experience</h5>
<p><?php echo $result['LawyerExp'];?> Years</p>
<h5 class="heading">Practice Areas</h5>
<p><?php echo $result['PracticeAreas'];?></p>
<h5 class="heading">Courts</h5>
<p><?php echo $result['Courts'];?></p>
<h5 class="heading">Website</h5>
<p><?php echo $result['Website'];?></p>
<h5 class="heading">Description</h5>
<p><?php echo $result['Description'];?></p>
<h5 class="heading">Profile Registration Date</h5>
<p><?php echo $result['RegDate'];?></p>

           

                </div>
                <!-- // Content -->

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="services-sidebar">

                        <div class="block">
                            <div class="title">Our Attorneys</div>
                            <ul class="services-menu">
                <?php  $ret=mysqli_query($con,"select * from tbllawyers where  IsPublic=1 limit 10");
                while($row=mysqli_fetch_array($ret))
                {
                ?>
                                <li><a href="lawyer-advocate-details.php?lid=<?php echo $row['id'];?>"><?php echo $row['LawyerName'];?></a></li>
    <?php } ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- // Sidebar -->


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
