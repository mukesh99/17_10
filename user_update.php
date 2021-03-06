<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>
 <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
 <style>
  table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 7px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
label {width: 50px;}
.constant_input {width: 35px;}
.const_values_ul{margin:0px; padding:0px;width: 360px; column-count: 3;}
.const_values_ul li{display:inline-block;width: 120px;}
#const_values {background-color: #dff0d8;padding: 10px;border: 1px solid #aFF0a7;border-radius: 15px;}
.mode{float:left;}
.clearboth{clear:both;}

.success {
	color: #fff;
    background: #71ca71;
    border: 1px solid #0cab0c;
    padding: 5px;
    font-weight: bold;
    border-radius: 10px;
}
.filter-row {
	margin: 17px 0;
}
.filter-row select.input-lg {
	padding: 5px;
    height: 30px;
}
.navbar{margin-bottom:0px;}
.navbar {
    border-radius: 0px; height:51px!important;
}
.navbar-brand{height:62px;}

  </style>
  </head>

  <body id="page-top">


 <?php include 'header.php';?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php include 'leftbar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">User Details</li>
          </ol>

         

          

          <!-- DataTables Example -->
           <?php
			include"dbconnect.php";
			$id=$_GET['id'];
			if(count($_POST)>0){
				
				$id=$_GET['id'];
				$dname=$_POST['dname'];

				
				$sql="update user SET dname='$dname' where id=$id";
				print_r($sql);
				
				mysqli_query($conn, $sql);
				
				header("location:user_details.php");
	

}
?>
<div class="container">
  <div class="panel panel-primary">
      <div class="panel-heading text-center"><h1>AUTHORITY FORM</h1></div>
  <form class="form-horizontal" action="" enctype="multipart/form-data" method="POST">

    <div class="form-group">
      <label class="control-label col-sm-2" for="user_permission">User permission:</label>
      <div class="col-sm-10"> 

	  <select class="form-control" id="user_permission" name="user_permission"   value="<?php echo $res['user_permission'] ?>"  placeholder="enter department name">
	  
	  <option value="2">Administrator</option>
	   <option value="3">Paid User</option>
	  </select>
      
      </div>
    </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
	
	
  </form>
</div>
</div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
