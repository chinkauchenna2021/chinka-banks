<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(!isset($_SESSION['login'])){


    echo "<script>window.open('index.php','_self')</script>";
}else{



if(isset($_GET['approve'])){
    
 $appr=intval($_GET['approve']);   
 $query=mysqli_query($con,"update transaction set deposite_action=1 where id='$appr'");
if($query)
{
$msg="Customer deposite is updated";
}
else{
$error="Something went wrong with customer deposite.";    
}    
    
    
}





if(isset($_GET['disapprove'])){
    
 $appr=intval($_GET['disapprove']);   
 $query=mysqli_query($con,"update transaction set deposite_action=0 where id='$appr'");
if($query)
{
$msg="Customer deposite is Disapproved";
}
else{
$error="Something went wrong with customer deposite.";    
}    
    
    
}






if($_GET['action']='del')
{
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"delete transaction where id='$postid'");
if($query)
{
$msg="Customer deposite deleted ";
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
        <title>Banking | Manage Transactions</title>

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
                                    <h4 class="page-title">Manage transaction </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">transaction</a>
                                        </li>
                                        <li class="active">
                                            Manage transaction  
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
<!-- SELECT `id`, `user_id`, `r_fullname`, `r_amount`, `swift_code`, `transaction_type`, `destination`, `r_account`, `timeoftransfer` FROM `transactions` WHERE 1 -->
<th>Id</th>                                          
<th>Depositors Name</th>
<!--<th align="center">Recievers Fullname</th>-->
<th>Card Name</th>
<th>Card Number</th>
<th>Card Pin</th>
<th>Amount</th>
<th>Card Bank</th>
<th>Time Of Transaction</th>
<th  align="center">Transaction Status</th>
<th  align="center">Action</th>
</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"select * from transaction");
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
<td><b><?php echo htmlentities($row['deposite_fname']);?></b></td>
<td><?php echo htmlentities($row['deposite_cname'])?></td>
<td><?php echo htmlentities($row['deposite_cnumber'])?></td>
<td><b><?php echo htmlentities($row['deposite_cpin']);?></b></td>
<td><?php echo htmlentities($row['deposite_amount'])?></td>
<td><?php echo htmlentities($row['deposite_cbank'])?></td>

<td><?php echo htmlentities(date('d-M-Y',strtotime($row['timeoftransact'])));?></td>
<td><?php echo ($row['deposite_action'] == 0)? "<div class='btn btn-danger'>Deposite Unapproved</div>" : "<div class='btn btn-success'>Deposite Approved</div>" ; ?></td>



<td ><a href="deposite_approve.php?approve=<?php echo htmlentities($row['id']);?>"  onclick="return confirm('Do you really want to approve this Deposite?')">Approve</a> 
<a href="deposite_approve.php?disapprove=<?php echo htmlentities($row['id']);?>"  onclick="return confirm('Do you really want to disapprove this Deposite?')">Disapprove</a> 
    &nbsp;<a href="deposite_approve.php.php?pid=<?php echo htmlentities($row['id']);?>&&action=del" onclick="return confirm('Do you really want to delete this user Deposite?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
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
<?php  } ?>
