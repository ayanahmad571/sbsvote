<?php include('check_session.php'); ?>






                                               
                                <?php 
								
								$personcountvote = "

SELECT count(*) as count FROM `members` WHERE stu_id = ".$_SESSION['SESS_ADMISNO']."";


$personcountvote_res = $conn->query($personcountvote);

if ($personcountvote_res->num_rows > 0) {
    // output data of each row
    while($personcountvote_row = $personcountvote_res->fetch_assoc()) {
        $personmaxvotes = $personcountvote_row['count'];
    }
} else {
die(

'
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ERROR PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Alert</h2>
  <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> 
ERROR SON  </div>
</div>

</body>
</html>


'
);

}






$allvotes ="SELECT COUNT(*) as count FROM voting_events";
$allvotes_res = $conn->query($allvotes);

if ($allvotes_res->num_rows > 0) {
    // output data of each row
    while($allvotes_row = $allvotes_res->fetch_assoc()) {
        $maxvotes = $allvotes_row['count'];
    }
} else {
	
	die(

'
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ERROR PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Alert</h2>
  <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> 
ERROR vn3  </div>
</div>

</body>
</html>


'
);
}



if($maxvotes == $personmaxvotes){
$leftvotes = $maxvotes - $personmaxvotes;
}if($maxvotes > $personmaxvotes){
$leftvotes = $maxvotes - $personmaxvotes;
}if($maxvotes < $personmaxvotes){
	die(

'
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ERROR PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Alert</h2>
  <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> 
Vote Limit Exceded  </div>
</div>

</body>
</html>


'
);
}


								?>
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
    <link rel="shortcut icon" href="http://sbs-school.org/img/works/sbs_noida_logo.jpg" />    

        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
<body class=" fixed hold-transition skin-blue sidebar-mini">

 
    
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
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
                      <small>Date of Birth - <?php echo $_SESSION['SESS_PASSWORD']  ?></small>
                      <small>House - <?php echo $_SESSION['SESS_HOUSE']  ?></small>
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
        
    <?php if(isset($_GET['votesuccess'])){
	  			if(isset($_SESSION['voted_success'])){ 
						if($_SESSION['voted_success'] == 1){
							
							
							echo '
							<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="box box-success box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Success</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  You have succesfully Voted
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
			</div>
    ';
	unset($_SESSION['voted_success']);
}
	}	
		}
    ?>
    
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Name</span>
                  <span class="info-box-number"><?php echo $_SESSION['SESS_NAME'] ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon <?php 
				switch(strtolower($_SESSION['SESS_HOUSE'])){

				case 'tejas':
				echo 'bg-orange';

				break;

				case 'bhanu':
				echo 'bg-red';

				break;

				case 'surya':
				echo 'bg-yellow';

				break;

				case 'bhaskar':
				echo 'bg-lime';

				break;	
					
				}
				
				?>"><i class="ion ion-tshirt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">House</span>
                  <span class="info-box-number"><?php echo $_SESSION['SESS_HOUSE'] ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-sort-numeric-desc"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Class</span>
                  <span class="info-box-number"><?php echo $_SESSION['SESS_CLASS'].' '.$_SESSION['SESS_CLASSSEC'] ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-copy-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Votes Left</span>
                  <span class="info-box-number"><?php 
				  
				  echo $leftvotes;
				  
				  #get dynamically
				  ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          

 <?php 


$sql = "select ve.id,ve.event_name,ve.event_keyword_url,ve.event_available
 from voting_events as ve  left join members as me 
on me.event_identity = ve.event_keyword_url and me.stu_id = '".$_SESSION['SESS_ADMISNO']."' WHERE
me.stu_id is NULL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$xx =1;
	$vartoechoonce = 1;
	
	
									// output data of each row
									$numrows = $result->num_rows;
									
									if($numrows == 1){
										$col = 12;
									}if($numrows == 2){
										$col = 6;
									}if($numrows == 3){
										$col = 4;
									}else{
										$col = 3 ;
									}
	
    // output data of each row
	echo '<h3 align="center">Click to Vote </h3>
	<div class="row">';
    while($row = $result->fetch_assoc()) {
		
		
		$userwidget = "SELECT * FROM votes_".$row['event_keyword_url']." WHERE stu_id='".$_SESSION['SESS_ADMISNO']."' ";
								$userwidgetresult = $conn->query($userwidget);
								
								if ($userwidgetresult->num_rows > 0) {
									
										echo '
										 
										  
							 <div  data-toggle="tooltip" data-placement="bottom" title="You have Voted" class="col-lg-'.$col.' col-md-'.$col.' col-xs-12 col-sm-12 ">
									  <!-- small box -->
									  <div class="small-box bg-yellow">
										<div class="inner">
										  <h3>'.$row['event_name'].'</h3>
										  <p><br></p>
										</div>
										<div class="icon">
										  <i class="fa fa-check"></i>
										</div>
										<div href="#" class="small-box-footer">
										
										  Voted
										</div>
									  </div>
									</div><!-- ./col -->

									
									
									';	
							
									
								}else{
									if($vartoechoonce == 1){
									
									
										echo '<form id="'.md5($row['event_keyword_url']).'" action="student-vote-page-index.php" method="post">
										  <input type="hidden" name="votersredirect" value="'.md5($row['id']).rand(1,9).rand(1,9).'4hc69rse69b5h8635re1bd" />
										 
										  
							 <div  data-toggle="tooltip" data-placement="bottom" title="Click This box to Vote" style="cursor:pointer" class="col-lg-12 col-md-12 col-xs-12 col-sm-12  '.md5($row['event_keyword_url'].$row['id']).' ">
									  <!-- small box -->
									  <div class="small-box bg-green">
										<div class="inner">
										  <h3>Begin Voting .</h3>
										  <p><br></p>
										</div>
										<div class="icon">
										  <i class="ion ion-stats-bars"></i>
										</div>
										<div href="#" class="small-box-footer">
										
										  Click To Start Voting <i class="fa fa-arrow-circle-right"></i>
										</div>
									  </div>
									</div><!-- ./col -->
<script>

window.location = "student-vote-page-index.php";
</script>
									<script>
								  $(".'.md5($row['event_keyword_url'].$row['id']).'").click(function(){
										   $("#'.md5($row['event_keyword_url']).'").submit();
									});
									</script>
									</form>
									';	
								}
							}
								
								
								
		

						
					$xx++;	
					$vartoechoonce++;		
					}
					echo '</div>';
} else {
    
	#0 res2
	
	
	
	
	
	
	$sql = "select * from voting_events order by event_name asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$xx =1;
	
	
	
									// output data of each row
									$numrows = $result->num_rows;
									
									if($numrows == 1){
										$col = 12;
									}if($numrows == 2){
										$col = 6;
									}if($numrows == 3){
										$col = 4;
									}if($numrows == 4){
										$col = 3;
									}if($numrows == 5){
										$col = 6;
									}else{
										$col = 12/ $numrows ;
									}
	
    // output data of each row
	echo '<h3 align="center">Thank You for Voting, Each Vote Counts! </h3>
	<div class="row">';
    while($row = $result->fetch_assoc()) {
		
		
		$userwidget = "SELECT * FROM votes_".$row['event_keyword_url']." WHERE stu_id='".$_SESSION['SESS_ADMISNO']."' ";
								$userwidgetresult = $conn->query($userwidget);
								
								if ($userwidgetresult->num_rows > 0) {
									
										echo '
										 
										  
							 <div  data-toggle="tooltip" data-placement="bottom" title="You have Voted" class="col-lg-'.$col.' col-md-'.$col.' col-xs-12 col-sm-12 ">
									  <!-- small box -->
									  <div class="small-box bg-yellow">
										<div class="inner">
										  <h3>'.$row['event_name'].'</h3>
										  <p><br></p>
										</div>
										<div class="icon">
										  <i class="fa fa-check"></i>
										</div>
										<div href="#" class="small-box-footer">
										
										  Voted
										</div>
									  </div>
									</div><!-- ./col -->
									
									</form>
									';	
							
									
								}
								
								
								
		

						
					$xx++;			
					}
					echo '</div>';
} else {
    echo "0 resss";
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	#0 res/
}



 ?>
      
   
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Website designed by- Ayan Ahmad
        </div>
        <strong>Copyright  <?php 
// No argument required for current year.
// Otherwise, pass start year as a 4-digit value.
function auto_copyright($startYear = null) {
	$thisYear = date('Y');  // get this year as 4-digit value
    if (!is_numeric($startYear)) {
		$year = $thisYear; // use this year as default
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) { // $year cannot be greater than this year - if it is then echo only current year
		echo "&copy; $thisYear"; // display single year
	} else {
		echo "&copy; $year&ndash;$thisYear"; // display range of years
	}   
 } 
 ?>


<?php auto_copyright(2014);  // 2010 - Current ?>  <a href="http://stepbystep.school">Step by Step School Noida</a>.</strong> 
      </footer>

      

    </div><!-- ./wrapper -->
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/chartjs/Chart.min.js"></script>
    
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
  </body>
</html>


<?php  /*
TRUNCATE members;
TRUNCATE votes_vicehousecaptain;
TRUNCATE votes_housecaptain;
TRUNCATE votes_prsdnt;
TRUNCATE `logs`;
 */ ?>