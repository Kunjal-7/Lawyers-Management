<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>LMS | Lawyer Management System</title>
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


    <div id="slider-output" class="pull-top-30px">
        <!-- REVOLUTION SLIDER -->
        <div id="rev_slider_22_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="soma-law-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
            <div id="rev_slider_22_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-27" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/img/banner.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme" id="slide-27-layer-1" data-x="['left','left','center','center']" data-hoffset="['451','239','-5','0']" data-y="['top','top','top','top']" data-voffset="['328','287','299','255']" data-fontsize="['45','45','45','30']" data-width="['463','463','419','281']" data-height="['54','54','55','none']" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":0,"split":"words","splitdelay":0.1,"speed":300,"split_direction":"forward","frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 463px; max-width: 463px; max-width: 54px; max-width: 54px; white-space: nowrap; font-size: 45px; line-height: 50px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">LMS </div>

  

                 
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>


    <section class="padding-tb-100px section-ba-1">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="img-in">
                        <img src="assets/img/about-us.jpg" alt="about-us">
                    </div>
                </div>
<?php 
$query=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
while ($row=mysqli_fetch_array($query)) {
?>
                <div class="col-lg-6">
                    <div class="padding-tb-10px sm-padding-tb-15px">
                        <div class="margin-bottom-30px">
                            <h2 class="text-medium-2 font-2 margin-bottom-0px text-main-color"><?php  echo $row['PageTitle'];?></h2>
                        </div>
                        <div class="text-medium margin-bottom-30px"><?php  echo substr($row['PageDescription'],0,500);?>
                        </div>
                        <a href="about-us.php" class="nile-bottom layout-1">More info...</a>
                    </div>
                </div>
<?php } ?>

            </div>
        </div>
    </section>


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


    


    


    <section class="padding-top-100px padding-bottom-20px clearfix">
        <div class="container">

            <div class="section-title layout-1">
                             <div class="title">
                    <h2>Meet Lawyers/Advocates<span>Meet Lawyers/Advocates</span></h2>
                </div>
            </div>

            <div class="row">
<?php $ret=mysqli_query($con,"select * from tbllawyers limit 8");
while ($result=mysqli_fetch_array($ret)) {
?>
                <!-- team -->
                <div class="col-lg-3 col-md-6">
                    <div class="team layout-1">
                        <div class="img-out">
                            <img src="admin/lawyerpic/<?php echo $result['ProfilePic'];?>" alt="Profile Pic">
                      

                        </div>
                        <h2 class="name"><a href="lawyer-advocate-details.php?lid=<?php echo $result['id'];?>"><?php echo $result['LawyerName'];?></a></h2>
                        <div class="dis"><?php echo $result['PracticeAreas'];?></div>
                    </div>
                </div>
                <!-- // team -->
<?php } ?>
             




            </div>

            <div align="center">   <a href="lawyers-advocates.php" class="nile-bottom layout-1">View All</a></div>   
        </div>
    </section>


    

  


    <?php include_once('includes/footer.php');?>


   


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/nile-slider.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <!-- <script src="assets/js/owl.carousel.min.js"></script> -->
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
