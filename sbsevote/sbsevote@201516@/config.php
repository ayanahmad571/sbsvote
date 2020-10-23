<?php 
session_name('sbs_vo1qase45rfvbhju890okjnhy65trfdghyu789iu') ;
session_start();
?>
<?php
date_default_timezone_set('Asia/Kolkata');
?>


<?php
include('auth_dbconf.php');
								

?>

<?php       
if(isset($_SESSION['SESS_NAME'])){                
               $logtext = $_SESSION['SESS_NAME'].' has just Opened the page on '.date('D d - M ,Y (at) @  H:i:s',time());                
			   $using = $_SERVER['HTTP_USER_AGENT']."| ".$_SERVER['REMOTE_ADDR']."| ".basename($_SERVER['PHP_SELF'])."";
          
		  $insertlogs = "INSERT INTO `logs`( `page_name`, `action`, `extra`) VALUES
		   ('".$_SERVER['PHP_SELF']."','".$logtext."','".$conn->escape_string($using)."')";
		  if($conn->query($insertlogs)){
		  }else{
			echo  $conn->error;
			  }
}else{
	
	
	$logtext = 'A user has just Opened the page on '.date('D d - M ,Y (at) @  H:i:s',time());                
			   $using = $_SERVER['HTTP_USER_AGENT']."|".$_SERVER['REMOTE_ADDR']."| ".basename($_SERVER['PHP_SELF'])."";
		  $insertlogs = "INSERT INTO `logs`( `page_name`, `action`, `extra`) VALUES
		   ('".$_SERVER['PHP_SELF']."','".$logtext."','".$conn->escape_string($using)."')";
		  if($conn->query($insertlogs)){
		  }else{
			echo  $conn->error;
			  }
}
?> 
<?php 
foreach($_POST as $key=>$v){
	$_POST[$key] = $conn->escape_string($v);
}
?>
    