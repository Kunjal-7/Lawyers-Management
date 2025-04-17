<?php session_start();
// Database Connection
include('includes/config.php');

// Code for Add New Lawyer and Advocate
if(isset($_POST['submit'])){
//Getting Post Values  
$fname=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobilenumber'];
$officeaddress=$_POST['officeaddress'];
$city=$_POST['city'];
$state=$_POST['state'];
$languagesknown=$_POST['languagesknown'];
$experience=$_POST['experience'];
$practoceaarr=$_POST["practicearea"]; 
$practiceareas=implode(",",$practoceaarr);
$courts=$_POST['courts'];
$website=$_POST['website'];
$description=$_POST['description'];
$ispublic=1;
$addedby="User";
$profilepic=$_FILES["profilepic"]["name"];
// get the image extension
$extension = substr($profilepic,strlen($profilepic)-4,strlen($profilepic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$newprofilepic=md5($profilepic).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"admin/lawyerpic/".$newprofilepic);





$query=mysqli_query($con,"insert into tbllawyers(LawyerName,LawyerEmail,LawyerMobileNo,OfficeAddress,City,State,LanguagesKnown,LawyerExp,PracticeAreas,Courts,Website,Description,AddedBy,IsPublic,ProfilePic) values('$fname','$email','$mobileno','$officeaddress','$city','$state','$languagesknown','$experience','$practiceareas','$courts','$website','$description','$addedby','$ispublic','$newprofilepic')");
if($query){
echo "<script>alert('Lawyer/advocate added successfully.');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else {
echo "<script>alert('Something went wron. Please try again.');</script>";
}
}
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LMS  | Add Lawyer and Advocate</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition">
<div class="wrapper">




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Lawyer and Advocate</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Persoanl Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="addlawyer" method="post" enctype="multipart/form-data">
                <div class="card-body">

<!--  Full Name--->
   <div class="form-group">
                    <label for="exampleInputFullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Lawyer/Advocate Full Name" required>
                  </div>
<!--   Email---->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter email" required>
                  </div>
<!--Number---->
                  <div class="form-group">
                    <label for="text">Mobile Number</label>
                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Enter email" pattern="[0-9]{10}" title="10 numeric characters only" required>
                  </div>

<!---office Address--->
                  <div class="form-group">
                    <label for="exampleInputaddress">Office Address</label>
                    <textarea class="form-control" id="officeaddress" name="officeaddress" placeholder="Office Address" required></textarea>
                  </div>

<!--   City---->
                  <div class="form-group">
                    <label for="exampleInputCity">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
                  </div>
<!--State---->
                  <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" required>
                  </div>


  <!--Languages Known---->
                  <div class="form-group">
                    <label for="text"> Languages known <span style="font-size:12px;">(Langueage should be Seprated by comma(,) Ex: English, Hindi )</span></label>
                    <input type="text" class="form-control" id="languagesknown" name="languagesknown" placeholder="Languages known" required>
                  </div>
  <!--Profile Pic---->
  <div class="form-group">
                    <label for="exampleInputFile">Profile Pic <span style="font-size:12px;color:red;">(Only jpg / jpeg/ png /gif format allowed)</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="profilepic" name="profilepic" required="true">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

      
                </div>
                <!-- /.card-body -->
          
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->

<div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Professional Info</h3>
              </div>
              <div class="card-body">
   <!--Experience --->             
                 <div class="form-group">
                    <label for="text">Experience (in years)</label>
                    <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter Experience" pattern="[0-9]" title="2 numeric characters only" maxlength="2" required>
                  </div>

<!--- Practice Areas-->
         <div class="form-group">
                  <label>Practice Areas</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select Practice Areas" name="practicearea[]" style="width: 100%;">
                    <?php $ret=mysqli_query($con,"select id,PracticeArea from tblpracticearea");
                           while($row=mysqli_fetch_array($ret))
                           {
                    ?>
                    <option value="<?php echo $row['PracticeArea'];?>"><?php echo $row['PracticeArea'];?></option>
<?php } ?>
                  </select>
                </div>



  <!--Courts---->
                  <div class="form-group">
                    <label for="text"> Courts <span style="font-size:12px;">(Should be Seprated by comma(,) Ex: High Court, Supreme Court )</span></label>
                    <input type="text" class="form-control" id="courts" name="courts" placeholder="Courts" required>
                  </div>

                    <!--Website---->
                  <div class="form-group">
                    <label for="text"> Website</span></label>
                    <input type="url" class="form-control" id="website" name="website" placeholder="Website">
                  </div>

  <!--Desciption ---->
                  <div class="form-group">
                    <label for="text"> Description (if Any) </label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description" rows="5" ></textarea>
                  </div>


      <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


     
      `
          </div>

  
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once('admin/includes/footer.php');?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
});
</script>
</body>
</html>

