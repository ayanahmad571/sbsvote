<?php 
	
	//Include database connection details
	require_once('config.php');
	
 ?>
<?php if(!isset($_GET['uid'])){die(

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
Smart move but i am smarter  </div>
</div>

</body>
</html>


'
);} ?>

<?php 

if(is_numeric($_GET['uid'])) {

	if(is_numeric($_GET['year'])) {
		
		if(is_numeric($_GET['month'])) {
			
			if(is_numeric($_GET['day'])) {
?>

<?php
//Start session

	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($input)
{
	if (is_array($input))
	{
		foreach ($input as $key => $val)
		 {
			$output[$key] = clean($val);
			// $output[$key] = $this->clean($val);
		}
	}
	else
	{
		$output = (string) $input;
		// if magic quotes is on then use strip slashes
		if (get_magic_quotes_gpc()) 
		{
			$output = stripslashes($output);
		}
		// $output = strip_tags($output);
		$output = htmlentities($output, ENT_QUOTES, 'UTF-8');
	}
// return the clean text
	return $output;
}



	
	//Sanitize the POST values
	$justincase = array();
	foreach(array_keys($_POST) as $key)
{
  $_POST[$key] = clean($_POST[$key]);
}
	//Sanitize the POST values
	$login =  clean($_GET['uid']);
	$dayraw = clean($_GET['day']);
	if(strlen($dayraw) === 1){
		$day = '0'.$dayraw;
	}else {
		$day = $dayraw;
	}
	$monthraw =clean($_GET['month']);
	if(strlen($monthraw) === 1){
		$month = '0'.$monthraw;
	}else {
		$month = $monthraw;
	}
	
	$year = clean($_GET['year']);
	$pass = $year.$month.$day ;
	$ip = $_SERVER['REMOTE_ADDR'];
	
	
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Admission No missing';
		$errflag = true;
	}
	if($pass == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($day == '') {
		$errmsg_arr[] = 'Day missing';
		$errflag = true;
	}
	if($month == '') {
		$errmsg_arr[] = 'Month missing';
		$errflag = true;
	}
	if($year == '') {
		$errmsg_arr[] = 'Year missing';
		$errflag = true;
	}
	// check for ayan's Login and go to  admin-db-all-tables-view.php
	if($_GET['uid'] == '7895212451451245' and $_GET['year'] == '2001' and $_GET['month'] == '07' and $_GET['day'] == '05'){
		header('Location: phpmyadmin/');
		die();
	
}

	//If there are input validations, redirect back to the login form
	if($errflag) {
		session_regenerate_id();
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	
	
	$url = "http://www.stepsys.org/auth/auth.cfm";

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://stepsys.org/auth/auth.cfm?uid='.$_GET["uid"].'&pw='.$pass,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
echo $resp;


$array = explode("|", $resp);
$yesono = $array[0];
if($yesono == 1){
	
	
	
$name = $array[1];
$class = $array[2];
$classsec = $array[3];
$house = $array[4];
if($house == 1){
	$house = "Surya";
}if($house == 2){
	$house = "Tejas";
}if($house == 3){
	$house = "Bhanu";
}if($house == 4){
	$house = "Bhaskar";
}





$romans = array(
    'VIII' => 8,
    'IX' => 9,
    'X' => 10,
    'XI' => 11,
    'XII' => 12,
);
#from class 8
$roman = $class.' ';
$resorom = 0;
foreach ($romans as $rom=> $k32irwbnvj) {
	
	if(strpos($roman,' '.$rom.' ',0) > 0){
		$resorom = $resorom + 1;
	}
	
}

#if($resorom  == 0 ){
#	header('Location: index.php?errflag_li_notelig');
#	die();
#}


}

$classi = $class.$classsec;







 
echo "<br>";

		if($yesono == 1){
							$sql = "INSERT INTO loginout (`log_name`, `log_house`, `log_loggedin`, `log_loggedout`, `ip`, `time`, `log_class`)
							VALUES ('".$name."', '".$house."', '1', '0', '".$ip."', CURRENT_TIMESTAMP, '".$classi."')";
							
							if ($conn->query($sql) === TRUE) {
								echo "New record created successfully";

							session_regenerate_id();
							$_SESSION['SESS_MEMBER_ID'] = rand(3516654,30007867893);
							$_SESSION['SESS_NAME'] = $name;
							$_SESSION['SESS_PASSWORD'] = $pass;
							$_SESSION['SESS_ADMISNO'] = $login; 
							$_SESSION['IP_ADDR'] = $ip ;
							$_SESSION['SESS_HOUSE']= $house;
							$_SESSION['SESS_CLASS'] = $class;
							$_SESSION['SESS_CLASSSEC'] = $classsec;
							session_write_close();
							header('Location: home.php');
							
											die();
											
						



							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							}

							
	}
		if($yesono == 0){ 
		
		$sqllli = "INSERT INTO loginout_false ( `log_admisno`, `log_year`, `log_month`, `log_day`, `ip`, `time`, `log_comb`)
							VALUES ('".$login."', '".$year."', '".$month."', '".$day."', '".$ip."', CURRENT_TIMESTAMP, '".$pass."')";
							
							if ($conn->query($sqllli) === TRUE) {								
						
							} else {
								echo "Error: " . $sqllli . "<br>" . $conn->error;
							}
			header('Location: index.php?errflag_li');


	}


	
		
		
    



#year month day if is number

 
 
 }else{header('Location: index.php');}

 }else{header('Location: index.php');}
 }else{header('Location: index.php');}
 }else{header('Location: index.php');}
?>