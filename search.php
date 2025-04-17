<?php 
// Database Connection
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>LRMS | Search Lawyers / Advocates</title>
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
            <h1>Search Lawyers / Advocates</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Search Lawyer / Advocates</li>
            </ul>

        </div>
    </div>


<a name="mainsearch"></a>
    <div class="padding-tb-100px section-ba-1">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
              <form name="search" method="post">
 <p><input type="text" name="searchby" required placeholder="Search Lawyer by Name/ Email / Mobile Number / Practice Area / State / City" class="form-control">   </p>
 <p align="center">
 <input type="submit" name="search" value="search" class="btn-primary" style="cursor:pointer;"></p>

</form>
                </div>
            </div>


<?php 
if(isset($_POST['search'])){ 
$searchby=$_POST['searchby'];
?>
<h3 align="center">Search result againt keyword "<?php echo $searchby;?>"</h3>
<hr />
<?php    
$query=mysqli_query($con,"select * from tbllawyers where LawyerName like '%$searchby%' || LawyerEmail like '%$searchby%' || LawyerMobileNo like '%$searchby%' || PracticeAreas like '%$searchby%' || City like '%$searchby%' || State like '%$searchby%' and IsPublic=1"); 
$row=mysqli_num_rows($query);
if($row>0){
while($result=mysqli_fetch_array($query)){
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
<?php }  } else { ?>
    <h3 style="color:red;" align="center">No record found</h3>
<?php } }?>



        </div>
    </div>








     <?php include_once('includes/footer.php');?>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/nile-slider.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
