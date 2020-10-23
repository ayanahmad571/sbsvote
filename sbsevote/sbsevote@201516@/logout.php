<?php require_once('config.php');
?>
<?php if(!isset($_SESSION['SESS_MEMBER_ID'])){echo "<h1 align=\"center\">Smart Move But i am Smarter</h1>";} ?>
<?php


$house = $_SESSION['SESS_HOUSE'];
$name = $_SESSION['SESS_NAME'];

$sql = "UPDATE loginout SET `log_loggedout`='1' WHERE `log_name` = '".$name."' AND `log_house` = '".$house."'";

if ($conn->query($sql) === TRUE) {
    echo "RES";
} else {
    echo "EUR" . $conn->error;
}

$conn->close();
?>
<?php 



							unset($_SESSION['SESS_MEMBER_ID']);
							unset($_SESSION['SESS_NAME']);
							unset($_SESSION['SESS_PASSWORD']);
							unset($_SESSION['SESS_ADMISNO']); 
							unset($_SESSION['IP_ADDR']);
							unset($_SESSION['SESS_HOUSE']);
							unset($_SESSION['SESS_CLASS']);
							unset($_SESSION['SESS_CLASSSEC']);

session_destroy();

foreach(array_keys($_SESSION) as $key){
	unset($_SESSION[$key]); 
}
if(isset($_GET['yeahvtdlst'])){
$vtrsrdrct = 'yeahvtdlst';
}else{
	$vtrsrdrct = '';
}

header('Location: index.php?'.$vtrsrdrct);

?>