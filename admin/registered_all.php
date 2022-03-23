<?php 
session_start();
include('includes/config.php');
error_reporting(0);

if(!isset($_SESSION['login'])){


    echo "<script>window.open('index.php','_self')</script>";
}else{



if(isset($_GET['delete'])){
    
    $del = $_GET['delete'];
    
    $sql = "DELETE FROM `customer_reg` WHERE `id`='$del'";
    $query= mysqli_query($con,$sql);
    if($query){
        
        echo "<script>alert('User Deleted Successfully')</script>";
        // echo "<script>window.open('admin/registered_all.php')</script>";
        
        
    }else{
        
        echo "<script>alert('Woops! something went wrong')</script>";
    }
    
    
    
    
}








if(isset($_GET['status']) && ($_GET['status'] == 0))
{
$postid=$_GET['done'];
$query=mysqli_query($con,"update customer_reg set active=1 where id=$postid");
if($query)
{
$msg="Registered user is now unsuspended";
echo "<script>alert('updated 0')</script>";
}
else{
$error="Something went wrong . Please try again.";   
echo "<script>alert('failed 0')</script>";
} 
}else{
    
   $poster=$_GET['done'];
$query=mysqli_query($con,"update customer_reg set active=0 where id=$poster");
if($query)
{
$msg="Registered user is now suspended";
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
        <title>Banking | Manage Customer</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>


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
                                    <h4 class="page-title">Manage customer</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">customer</a>
                                        </li>
                                        <li class="active">
                                            Manage customer  
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->




                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                         

                                    <div class="table-responsive">
<table class="table table-colored table-centered table-inverse m-0">
<thead>
<tr>
<th>Id</th>                                          
<th>Name</th>
<th align="center">Email</th>
<th>Destination</th>
<th>Nationality</th>
<th>User Status</th>
<th>Account Number</th>

<th>Password</th>
<th>Image</th>
<th>Region</th>
<th>Address</th>


<th>Kin</th>
<th>Phone</th>
<th>Security</th>
<th>Date-of-Registration</th>


<th colspan="2" align="center">Action</th>
</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"select * from customer_reg");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
<tr>
<?php 
} else {
    $cool = 1;
while($row=mysqli_fetch_array($query))
{
    
?>
 <tr>
 <td><b><?php echo $cool;?></b></td>
<td><b><?php echo htmlentities($row['fname']);?></b></td>
<td><?php echo htmlentities($row['email'])?></td>
<td><?php echo htmlentities($row['address'])?></td>
<td><b><?php echo htmlentities($row['country']);?></b></td>
<td><b><?php echo ($row['active'] > 0)? "<h4 class='btn btn-sm btn-invert btn-success'>Active</h4>":"<h4 class='btn btn-sm btn-invert btn-danger'>Not Active</h4>";?></b></td>
<td><?php echo htmlentities($row['acc_number'])?></td>

<td><b><?php echo htmlentities($row['pass']);?></b></td>
<td><img src="../img/<?php echo htmlentities($row['img'])?>" height="150px" width="120px"></td>
<td><?php echo htmlentities($row['region'])?></td>
<td><b><?php echo htmlentities($row['address']);?></b></td>

<td><?php echo htmlentities($row['kin'])?></td>
<td><b><?php echo htmlentities($row['phone']);?></b></td>
<td><?php echo htmlentities($row['security'])?></td>
<td><b><?php echo date('d-M-Y',strtotime($row['dateofreg']));?></b></td>




<td>&nbsp;<a href="registered_all.php?done=<?php echo htmlentities($row['id']);?>&&status=<?php echo htmlentities($row['active']);?>" onclick="return confirm('Do you really want to perform this action ?')"><?php echo ($row['active'] > 0)? 'suspend':'unsuspend'  ?></a>

<a class="btn btn-sm btn-danger mt-2" href="registered_all.php?delete=<?php echo htmlentities($row['id']);?>" onclick="return confirm('Do you really want to delete this user ?')">Delete-user</a>


</td>
 </tr>
<?php $cool++; } }?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



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

        <!-- CounterUp  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Load page level scripts-->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/jvectormap/gdp-data.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


        <!-- Dashboard Init js -->
		<script src="assets/pages/jquery.blog-dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>
