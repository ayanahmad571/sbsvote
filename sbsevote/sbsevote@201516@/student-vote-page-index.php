<?php include('check_session.php'); ?>
<?php if(!isset($_SESSION['SESS_MEMBER_ID'])){ die(

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
SmBISID  </div>
</div>

</body>
</html>


'
);} ?>
<?php  /*
<?php 
if(!isset($_POST['votersredirect'])){
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
#NVTRSRdR  </div>
</div>

</body>
</html>


'
);
}


 */


 /*
if( strlen($_POST['votersredirect']) !== 56){
echo strlen($_POST['votersredirect']);
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
#LError  </div>
</div>

</body>
</html>


'
);}




$votersredirect = substr($_POST['votersredirect'],0,(strlen($_POST['votersredirect'])-24));
 */ 



$whatallnotdone = "select ve.id,ve.event_name,ve.event_keyword_url,ve.event_available
 from voting_events as ve  left join members as me 
on me.event_identity = ve.event_keyword_url and me.stu_id = '".$_SESSION['SESS_ADMISNO']."' WHERE
me.stu_id is NULL";





$whatallnotdone_res = $conn->query($whatallnotdone);

$hexaranarray = array();
if ($whatallnotdone_res->num_rows > 0) {
    // output data of each row
    while($whatallnotdone_row = $whatallnotdone_res->fetch_assoc()) {
        $hexaranarray[] = $whatallnotdone_row['id'];
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
#LErrDR  </div>
</div>

</body>
</html>


'
);
}



$votersredirect = $hexaranarray[0];

$votersredirect = md5($votersredirect);

$getwhichevent = "

SELECT * FROM `voting_events` WHERE md5(id) = 


'".$votersredirect."'
";
#var_dump(
 #get_defined_vars()
#);



	$getwhichevent_res = $conn->query($getwhichevent);

if ($getwhichevent_res->num_rows > 0) {
    // output data of each row
    $getwhichevent_row = $getwhichevent_res->fetch_assoc();
	
       $event_key = $getwhichevent_row['event_keyword_url'];
	   $event_desc = $getwhichevent_row['event_name'];
   
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
Error #VALmSHp  </div>
</div>

</body>
</html>


'
);
}









$checkifvotedforthisidsql = "

SELECT * FROM `members`  WHERE stu_id = ".$_SESSION['SESS_ADMISNO']." and house='".ucwords(strtolower($_SESSION['SESS_HOUSE']))."' and voted=1 and event_identity='".$event_key."'";


	$checkifvotedforthisidres = $conn->query($checkifvotedforthisidsql);

if ($checkifvotedforthisidres->num_rows > 0) {
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
You Have Already Voted for this Position  </div>
</div>

</body>
</html>


'
);
   
} 






?>

<?php 

if(isset($_SESSION['event_name'])){unset($_SESSION['event_name']);}
if(isset($_SESSION['event_keyword_url'])){unset($_SESSION['event_keyword_url']);}
if(isset($_SESSION['votersredirect'])){unset($_SESSION['votersredirect']);}
$_SESSION['event_name'] = $event_desc;
$_SESSION['event_keyword_url'] = $event_key;
$_SESSION['votersredirect'] = $votersredirect;

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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
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
                  <img src="http://stepsys.org/images/stu_pics/<?php echo $_SESSION['SESS_ADMISNO'] ?>_8.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['SESS_NAME'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="http://stepsys.org/images/stu_pics/<?php echo $_SESSION['SESS_ADMISNO'] ?>_8.jpg" class="img-circle" alt="<?php echo $_SESSION['SESS_NAME'] ?>">
                    <p>
                     <?php echo $_SESSION['SESS_HOUSE']  ?></small>
                    </p>
                  </li>
                  
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
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
            <li class="active">Voting Panel</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <?php  /*
<div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Name</span>
                  <span class="info-box-number"><?php echo $_SESSION['SESS_NAME'].'</span>' ?><?php 

?>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div>
 */ ?><!-- /.col -->
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
                  <span class="info-box-number"><strong class="h2"><?php echo $_SESSION['SESS_HOUSE'] ?></strong></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-9 col-sm-6 col-xs-12 ease-in">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-copy-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Voting Position</span>
                  <span class="info-box-number"><strong class="h1" style="vertical-align:middle"><i><?php echo $event_desc; ?></i></strong></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

          </div><!-- /.row -->
<div class="row">
<hr style="border-bottom:solid black 1px" />

<?php 

$userwidget = "SELECT * FROM cadidates_".$event_key." WHERE house='".$_SESSION['SESS_HOUSE']."' order by name ASC";
$userwidgetresult = $conn->query($userwidget);

if ($userwidgetresult->num_rows > 0) {
    // output data of each row
	$numrows = $userwidgetresult->num_rows;
	
	if($numrows == 3){
		$col = 4;
	}if($numrows == 4){
		$col = 3;
	}else{
		$col = 12/ $numrows ;
	}
    while($userwidgetrow = $userwidgetresult->fetch_assoc()) {
        echo '				
		 <div class="col-md-'.$col.' col-lg-'.$col.' col-sm-6 col-xs-12">
             
			  
			  
			  <div class="box box-primary">
                <div class="box-body box-profile">
				  <img style="width:58% 	!important" class=" profile-user-img img-responsive  " src="http://stepsys.org/images/stu_pics/'.$userwidgetrow['stu_id'].'_8.jpg" alt="'.$userwidgetrow['stu_id'].'">
				  
				  
                  <h3 class="profile-username text-center">'.ucwords($userwidgetrow['name']).'</h3>


                  <form action="student-vote-post-get.php" method="post">
						<input type="hidden" name="answer_checker" value="'.$userwidgetrow['random_algorithm'].'" />
						<button style="width:100%" type="submit" onclick="this.disabled=true;this.value=\'Sending, please wait...\';this.form.submit()"; class="btn btn-danger">Click to Vote </button>
					</form>
                </div><!-- /.box-body -->
              </div>
            </div><!-- /.col -->
				
				
				
		
		';
    }
} else {
    echo "0 results";
}

 ?>
            
            
         
            
            
            
</div>
          
          </div><!-- /.row -->
          
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
		$year = $thisYear+1; // use this year as default
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


<?php auto_copyright(2014);  // 2010 - Current ?>  <a href="http://sbs-school.org">Step by Step School Noida</a>.</strong> 
      </footer>

      

    </div><!-- ./wrapper -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/chartjs/Chart.min.js"></script>
   <script>
   $('.ease-in').fadeOut();
   $('.ease-in').fadeIn();
   </script>
  </body>
</html>
