<?php 
session_start();
include('includes/config.php');
error_reporting(0);

if(isset($_POST['update']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$address=$_POST['address'];
$nation=$_POST['nation'];
$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$cardpin=$_POST['cardpin'];
$amount=$_POST['amount'];
$account=$_POST['accountn'];
// $postdetails=$_POST['postdescription'];
// $arr = explode(" ",$posttitle);
// $url=implode("-",$arr);
// $status=1;
// UPDATE `customer_reg` SET `id`='[value-1]',`fname`='[value-2]',`email`='[value-3]',`pass`='[value-4]',`img`='[value-5]',`country`='[value-6]',`region`='[value-7]',`state`='[value-8]',`address`='[value-9]',`kin`='[value-10]',`phone`='[value-11]',`security`='[value-12]',`active`='[value-13]',`timeofreg`='[value-14]',`acc_number`='[value-15]' WHERE 1
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"update customer_reg set fname='$fname',email='$email',country='$nation',acc_number='$account' where id='$postid'");
$querys=mysqli_query($con,"update transaction set deposite_cname='$cardname',deposite_cnumber='$cardnumber',deposite_cpin='$cardpin',deposite_amount='$amount' where user_id='$postid'");
if($query && $querys)
{
$msg="Customers Details updated  ";
}
else{
$error="Something went wrong . Please try again.";    
} 

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Edit  | Customer details</title>

        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
 <script>
function getSubCat(val) {
  $.ajax({
  type: "POST",
  url: "get_subcategory.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
  }
  });
  }
  </script>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Post </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"> Posts </a>
                                        </li>
                                        <li class="active">
                                            Add Post
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if(isset($msg)){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if(isset($error)){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>

<?php
$postid=intval($_GET['pid']);
echo "<script>alert($postid)</script>";
$query=mysqli_query($con,"select customer_reg.*,transaction.* from customer_reg , transaction where customer_reg.id=$postid and transaction.user_id=$postid ");
while($row=mysqli_fetch_array($query))
{
?>






                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="addpost" method="post">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Fullname </label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['fname']);?>" name="fname" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Email</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['email']);?>" name="email" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Address</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['address']);?>" name="address" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Nationality</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['country']);?>" name="nation" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Card Name</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['deposite_cname']);?>" name="cardname" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Card Number</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['deposite_cnumber']);?>" name="cardnumber" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Card Pin</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['deposite_cpin']);?>" name="cardpin" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Card Pin</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['deposite_amount']);?>" name="amount" placeholder="Enter title" required>
</div>
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Card Pin</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['acc_number']);?>" name="accountn" placeholder="Enter title" required>
</div>








         

<?php } ?>

<button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>

                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

           <?php include('includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>



    </body>
</html>
