<?php include('check_session.php'); ?>
<?php if($_SESSION['SESS_ADMISNO'] == 741){  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Step by Step E-Voting <?php echo date('Y'); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="shortcut icon" href="http://sbs-school.org/img/works/sbs_noida_logo.jpg" />    

    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="shortcut icon" href="http://sbs-school.org/img/works/sbs_noida_logo.jpg" />    

    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- page script -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
<body class="fixed hold-transition skin-blue sidebar-mini">

 
    
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="home.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SbS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Step by Step </b>E-Vote</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="http://stepsys.org/images/stu_pics/<?php echo $_SESSION['SESS_ADMISNO'] ?>_8.jpg" class="user-image" alt="<?php echo $_SESSION['SESS_NAME'] ?>">
                  <span class="hidden-xs"><?php echo $_SESSION['SESS_NAME'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="http://stepsys.org/images/stu_pics/<?php echo $_SESSION['SESS_ADMISNO'] ?>_8.jpg" class="img-circle" alt="<?php echo $_SESSION['SESS_NAME'] ?>">
                    <p>
                     <?php echo $_SESSION['SESS_NAME'] ?> - Student
                      <small>Reload All - <button class="bssb_evt43jf20j49jrnb0806u802f_clk_ev btn btn-danger"><i class="fa fa-circle-o-notch"></i></button></small>
                    </p>
                  </li>
                  
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
              	<a href="logout.php"><i class="fa fa-sign-out"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="http://stepsys.org/images/stu_pics/<?php echo $_SESSION['SESS_ADMISNO'] ?>_8.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['SESS_NAME'] ?></p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <?php  /*
sidebar starts

 */ ?>
          <ul class="sidebar-menu">
            
            <li>
              <a href="home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="report.php">
                <i class="fa fa-bug"></i> <span>Report a Bug</span>
              </a>
            </li>
            
            <?php 
			if($_SESSION['SESS_ADMISNO'] == '741'){
				echo '<li>
              <a href="admin.php">
                <i class="fa  fa-lock "></i> <span>Admin Panel</span>
              </a>
            </li>';
			}
			?>
               
          <?php  /*
side bar ends
 */ ?>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            SbS E-Vote Panel
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
          
        </section>


        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-1 pull-right">
        	<button class="bssb_evt43jf20j49jrnb0806u802f_clk_ev btn btn-primary"><i class="fa fa-circle-o-notch"></i></button>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="onlyhead" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name of the Event</th>
                        <th>Keyword for the Event</th>
                        <th>Class Available</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                    <tbody>
                     
                      <?php
					  $insertsql = "SELECT * FROM voting_events";
						$insertsqlres = $conn->query($insertsql);
						
						if ($insertsqlres->num_rows > 0) {
							// output data of each row
							while($insertsqlrow = $insertsqlres->fetch_assoc()) {
								echo '
                    
								<tr>
								<form id="'.sha1($insertsqlrow['id']).'"  action="admin-new-exec.php" method="post" class="form-horizontal" role="form">
									<td>'.$insertsqlrow['id'].'</td>
									<td>'.$insertsqlrow['event_name'].'</td>
									<td>'.$insertsqlrow['event_keyword_url'].'</td>
									<td>'.$insertsqlrow['event_available'].'</td>
									<td><input type="hidden" name="event_id" value="H7'.md5($insertsqlrow['id']).'01oq9" /> <input class="btn btn-danger '.sha1(md5($insertsqlrow['id'])).'" name="event_all_submittodel" type="submit" value="Delete"> </td>
								</form>
								<script>
								$(function() {
   $("input.'.sha1(md5($insertsqlrow['id'])).'").click(function(){
      if (confirm("There is no going back now it has to get deleted, until you close this tab and open it again")){
         $(\'form.'.sha1($insertsqlrow['id']).'\').submit();
      }
	  
   });
});
								</script>
								
								</tr>
								
								';
								$lastidcont = $insertsqlrow['id'];
							}
						} else {
							echo "0 results";
						}
					  ?>
                      
                    
                    <tr>
                    <form action="admin-new-exec.php" method="post" class="form-horizontal" role="form">
                    
                    <td>
       <?php echo ($lastidcont + 1) ?>
        
                    </td>
                    <td>
        <input required name="event_name" type="text" class="form-control" id="EvnTNme" placeholder="Event Name">
        
                    </td>
                    <td>
        <input required name="event_keyname" type="text" class="form-control" id="EvnTNme" placeholder="Event in one Word">
        
                    </td>
                    <td>
        <input required name="event_classes_avl" type="text" class="form-control" id="EvnTNme" placeholder="Class's Available">
        
                    </td>
                    <td>
        <input required class="btn btn-default" name="event_all_submit" type="submit" value="Add">
        
                    </td>
                  
                    
                     </form>
                    </tr>
                   
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div>
        
        <script>
		$('#onlyhead').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
    </script>
        </div>
        
        
        </div>
          <div class="loadthe1">
          </div>
          
          <div class="loadthe2">
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Ahmad</b> Anonymous
        </div>
        <strong>Copyright &copy; 2014-2015 AhmadAnonymous. to Step by Step School noida.
      </strong>
      </footer>

      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    
    <!-- page script -->
</html>

<script>
$('document').ready(function() {
  $('.bssb_evt43jf20j49jrnb0806u802f_clk_ev').click(function(e) {
     $('div.loadthe1').load('admin-new.php'); 
	
    $('div.loadthe2').load('admin-votes.php');
});
    
});
</script>

<?php } ?>