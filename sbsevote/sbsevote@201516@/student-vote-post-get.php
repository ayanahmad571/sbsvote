<?php 	
	//Include database connection details
	require_once('check_session.php'); ?>
<?php if(!isset($_POST['answer_checker'])){die(

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
Error 2  </div>
</div>

</body>
</html>


'
);} ?>
<?php 

if(!isset($_SESSION['event_name'])){ die(

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
No emnatevnt  </div>
</div>

</body>
</html>


'
);}#name or desc
if(!isset($_SESSION['event_keyword_url'])){die(

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
No lrukwotdey  </div>
</div>

</body>
</html>


'
);}#candidateorvotes_{this}
if(!isset($_SESSION['votersredirect'])){die(

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
No vir  </div>
</div>

</body>
</html>


'
);}#table voting_events
var_dump($_SESSION);


?>
<?php


	
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
	
	$housefor = $_SESSION['SESS_HOUSE'] ;
	$votefor = $_POST['answer_checker'] ;
	$ip = $_SERVER['REMOTE_ADDR'];
	$dnt = date('D d -M m- Y @ H:i:s', strtotime('+ 5 hours + 30 minutes'));
	$timev = date('Dd-Mm-y') ;
	$admisno = $_SESSION['SESS_ADMISNO'];
	$dob = $_SESSION['SESS_PASSWORD'];
	$classi = $_SESSION['SESS_CLASS'];
	$classsec = $_SESSION['SESS_CLASSSEC'];
	$class = $classi.$classsec;
	$name = $_SESSION['SESS_NAME'];
	$house = $_SESSION['SESS_HOUSE'];
	
	
	











$sqle = "SELECT * FROM cadidates_".$_SESSION['event_keyword_url']." WHERE `random_algorithm`='".$votefor."'
 AND `house` = '".strtoupper($_SESSION['SESS_HOUSE'])."';";
$result = $conn->query($sqle);

if ($result->num_rows <> 1) {
    // output data of each row
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
The Id\'s of the houses are not equal<a href="index.php">Back</a>  </div>
</div>

</body>
</html>


'
);

} 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $connselect->connect_error);
} 
#Final SQL
$sqlselect = "SELECT * FROM members WHERE stu_id =".$admisno." AND voted ='1' AND event_identity = '".$_SESSION['event_keyword_url']."'";
#Testing SQL
#$sqlselect = "SELECT * FROM members WHERE stu_id =".$admisno." AND voted ='5' AND event_identity = '".$_SESSION['event_keyword_url']."'";


$resultselect = $conn->query($sqlselect);

if ($resultselect->num_rows > 0) {
    // Say no
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
Already voted <a href="logout.php"><button>Logout</button></a>  </div>
</div>

</body>
</html>


'
);
} 	else {
	
	

							$sql = "INSERT INTO votes_".$_SESSION['event_keyword_url']." (`stu_id`, `candidate_id`, `ipaddr`, `time`, `dnt`)
							VALUES ('".$admisno."', '".$votefor."', '".$ip."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
							
							if ($conn->query($sql) === TRUE) {
								
																	$sqlavi = "INSERT INTO members (`stu_id`, `voted`, `DOB`, `Name`, `Class`, `Section`, `House`,`event_identity`)
							VALUES ('".$admisno."', '1', '".$dob."', '".$name."', '".$classi."', '".$classsec."', '".$house."','".$_SESSION['event_keyword_url']."')";
														  if($conn->query($sqlavi) === TRUE){ echo "All Done"; 
														  $_SESSION['voted_success'] = $_SESSION['event_name'];
														  
													        if(isset($_SESSION['event_name'])){unset($_SESSION['event_name']);}
															if(isset($_SESSION['event_keyword_url'])){unset($_SESSION['event_keyword_url']);}
															if(isset($_SESSION['votersredirect'])){unset($_SESSION['votersredirect']);}
															
															
															
															
															
															
															
															
															
															
															
															
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

															
														
															
															
															
															
															
															
															
															
		if($leftvotes == 0){	
header('Location: logout.php?yeahvtdlst'); 
		}		else{
	header('Location: student-vote-page-index.php?votesuccess'); 
	}														
															
															
															
															
															
															
															
															
					  }else {echo "Error";}
																
								
								
								
								
								
							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
							
							
							
							
							
							
							
							
							
							
							
							
} #else ends
						
			?>

