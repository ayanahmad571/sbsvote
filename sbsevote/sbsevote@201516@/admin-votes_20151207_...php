<?php include('check_session.php'); ?>
<?php if($_SESSION['SESS_ADMISNO'] == 741){  ?>

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
            SbS E-Vote Panel
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>



        <!-- Main content -->
        <section class="content">
 */ ?>
          <div class="row">
            <div class="col-md-12 ">
          <?php  /*
    

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">'.$row['event name resiults'].'</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:250px"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
 */ ?>
              <?php
			  $sql = "SELECT * FROM voting_events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {



#NESTED START

if(strtolower($row['event_name']) == 'president'){
	#if
	
	
	
	
	
	
	
	
	
	
	
	echo '<div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">President, '.$row['event_name'].' Result</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <canvas id="pieChart'.md5($row['id']).''.sha1('prsdnt').'" style="height:250px"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->';
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		







#klok								
								




  
                                 
                                $eachstuvote = "
									
							
							
							
								SELECT ca.name, ca.stu_id ,count(vo.candidate_id) as stuindividualvotecount FROM  votes_".$row['event_keyword_url']." as vo left join cadidates_".$row['event_keyword_url']." as ca on ca.random_algorithm = vo.candidate_id group by ca.name





								";
								
								
		  
								
                               

                                        echo '
										
										 <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */
        //-------------
        //- PIE CHART -
        //-------------
        var pieChartCanvas = $("#pieChart'.md5($row['id']).''.sha1('prsdnt').'").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
         ';
		  
		   $eachstuvoteresult = $conn->query($eachstuvote);
                                
                                if ($eachstuvoteresult->num_rows > 0) {
                                    // output data of each row
									$coloursarray = array('yellow','red','aqua','green');
                                    $counter = 1;
									while($eachstuvoterow = $eachstuvoteresult->fetch_assoc()) {
										
										
										if($counter ==1){
											echo'';
										}else{
											echo ',';
										}
										// If the history array is empty, re-populate it.
													  
													  // Randomize the array.
													  array_rand($coloursarray);
													
													  // Select the last value from the array.
													  $selected = array_pop($coloursarray);
													
												
														
										echo '{
            value: '.$eachstuvoterow['stuindividualvotecount'].',
            color: "'.$selected.'",
            highlight: "'.$selected.'",
            label: "'.$eachstuvoterow['name'].'"
          }';
										$counter++;
                                    }
                                } 
		  
		  
		  
		  
		   echo'
          
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

    
      });
    </script>
										
										
										
										
										
										';









		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
	
	
	
	#if
	
}else{

			  $houses  = "SELECT * FROM master_houses";
$housesres = $conn->query($houses);


if ($housesres->num_rows > 0) {
    // output data of each row
    while($housesrow = $housesres->fetch_assoc()) {




echo '<div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">'. $housesrow['house'].', '.$row['event_name'].' Result</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <canvas id="pieChart'.md5($row['id']).''.sha1($housesrow['id']).'" style="height:250px"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->';
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		







#klok								
								




  
                                 
                                $eachstuvote = "
									
							
							
							
								SELECT ca.name, ca.stu_id ,count(vo.candidate_id) as stuindividualvotecount , ca.house FROM votes_".$row['event_keyword_url']." as vo left join cadidates_".$row['event_keyword_url']." as ca on ca.random_algorithm = vo.candidate_id WHERE ca.house ='".$housesrow['house']."' group by ca.name





								";
								
								
		  
								
                               

                                        echo '
										
										 <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */
        //-------------
        //- PIE CHART -
        //-------------
        var pieChartCanvas = $("#pieChart'.md5($row['id']).''.sha1($housesrow['id']).'").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
         ';
		  
		   $eachstuvoteresult = $conn->query($eachstuvote);
                                
                                if ($eachstuvoteresult->num_rows > 0) {
                                    // output data of each row
									$coloursarray = array('yellow','red','aqua','green');
                                    $counter = 1;
									while($eachstuvoterow = $eachstuvoteresult->fetch_assoc()) {
										
										
										if($counter ==1){
											echo'';
										}else{
											echo ',';
										}
										// If the history array is empty, re-populate it.
													  
													  // Randomize the array.
													  array_rand($coloursarray);
													
													  // Select the last value from the array.
													  $selected = array_pop($coloursarray);
													
												
														
										echo '{
            value: '.$eachstuvoterow['stuindividualvotecount'].',
            color: "'.$selected.'",
            highlight: "'.$selected.'",
            label: "'.$eachstuvoterow['name'].'"
          }';
										$counter++;
                                    }
                                } 
		  
		  
		  
		  
		   echo'
          
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

    
      });
    </script>
										
										
										
										
										
										';









		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


		}
	
	}










                                	




#END NESTED
								
			
			}					
					}
} else {
    echo "0 results";
}








###################################################?//////


//////////////////////////////////////////////

#



                                
?>              
              
              

            </div><!-- /.col (LEFT) -->
            
          </div><!-- /.row -->
<?php  /*

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

 */ 
}
 ?>