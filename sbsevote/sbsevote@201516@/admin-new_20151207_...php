<?php include('check_session.php'); ?>
<?php if($_SESSION['SESS_ADMISNO'] == 741){  ?>

<?php  /*

<?php if(!isset($_SESSION['SESS_MEMBER_ID'])){ die("<h1 align=\"center\">Smart Move But i am Smarter</h1>");} ?>

 */ ?>
 

<?php  /*
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
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
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
  
  
<body class="hold-transition skin-blue sidebar-mini">

 
    
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="i" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SbS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Step by Step </b>E-Vote</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        
      </header>
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="http://stepsys.org/images/stu_pics/741_8.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin Ayan</p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <?php  /*
sidebar starts

 
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
               
          <?php  /*
side bar ends

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            SbS E-Vote Panel admin
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin Votes view</li>
          </ol>
        </section>



        <!-- Main content -->
        
        <section class="content">
 */ ?>
        
          
          
          
           <?php
			  $sql = "SELECT * FROM voting_events";
$result = $conn->query($sql);
$x=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {



#NESTED START

echo '<div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Votes, '.ucwords($row['event_name']).'</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example'.$x.'" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>House</th>
                        <th>Voted For</th>
                        <th>Position</th>
						<th>Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
          ';

			  $houses  = 			  
			  
			  "SELECT mem.Name, mem.Class, mem.Section, mem.House, vo.time,ca.name as cadname, mem.event_identity  
FROM votes_".$row['event_keyword_url']." as vo 
left join cadidates_".$row['event_keyword_url']."
as ca on ca.random_algorithm = vo.candidate_id

left join members as mem on vo.stu_id= mem.stu_id

where mem.event_identity = '".$row['event_keyword_url']."'
";
$finaldatares = $conn->query($houses);


if ($finaldatares->num_rows > 0) {
    // output data of each row
    while($data = $finaldatares->fetch_assoc()) {

echo '<tr>
                        <td>'.$data['Name'].'</td>
                        <td>'.$data['Class'].'- '.$data['Section'].' </td>
                        <td>'.$data['House'].'</td>
                        <td>'.$data['cadname'].'</td>
                        <td>'.$data['event_identity'].'</td>
						<td>'.$data['time'].'</td>
                        
                      </tr>';
		
		
		
		
		
		
		
		}
	
	}






echo '
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->';

                                	




#END NESTED
echo '<script>
      $(function () {
        $("#example'.$x.'").DataTable();
      });
    </script>';
$x++;

								
			
								
					}
} else {
    echo "0 results";
}



###################################################?//////


//////////////////////////////////////////////

#



                                
?>              
         
          
          
          
          
     <?php  /*
   </section>
        <!-- /.content -->
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
    
 */ ?>
    

<?php  /*
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

  </html>
*/
}
?>