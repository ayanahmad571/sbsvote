<?php  include('check_session.php'); 	
if($_SESSION['SESS_ADMISNO'] == 741){  ?>

<?php 
 if(isset($_POST['event_all_submit'])){
	 
	 var_dump( $_POST);

	 
	 
	 $query="INSERT INTO `voting_events`(`event_name`, `event_keyword_url`, `event_available`) VALUES  ('".$_POST['event_name']."','".$_POST['event_keyname']."','".$_POST['event_classes_avl']."');"; 
	 
	 $query .= "create table votes_".$_POST['event_keyname']." like votes_housecaptain;";


	 $query .= "create table cadidates_".$_POST['event_keyname']." like cadidates_housecaptain;";
	 
	
 if($conn->multi_query($query)){
		 header('Location: '.basename($_SERVER['PHP_SELF']).'?alldone' );
		 echo 'Good to go';
	 }else{echo 'Hay una problema<br>'.$conn->error;}

   }
   
   
   if(isset($_GET['alldone'])){
	   		 echo 'Good to go';

   }
 

?>

<?php 
 if(isset($_POST['event_id'])){
	 
	 var_dump( $_POST);

$encid = $_POST['event_id'];
$leftremencid = substr($encid,2,39);
$rightremencid = substr($leftremencid,0,32);
$nonencid = $rightremencid;
var_dump($nonencid);

if($nonencid == '1'){
	die('We Cant delete this');
}

			$getdatabefdel = "SELECT * FROM voting_events where md5(id)= '".$nonencid."'";
			$getdatabefdelres = $conn->query($getdatabefdel);
			
			if ($getdatabefdelres->num_rows > 0) {
				// output data of each row
				$getdatabefdelrow = $getdatabefdelres->fetch_assoc();
					
					
					echo 'You are Going to drop this field <br>';
					var_dump($getdatabefdelrow);
					$cadidate_x ='cadidates_'.$getdatabefdelrow['event_keyword_url']; 
					$votes_y ='votes_'.$getdatabefdelrow['event_keyword_url'] ;
					echo 'And these tables <br>'.$cadidate_x.'<br>'.$votes_y;
					

					
				
			} else {
				die( "No data Fetched Reload");
			}
			
										// sql to delete a record
							$sql = "DELETE FROM voting_events WHERE md5(id)='".$nonencid."';";
							$sql .= 'DROP TABLE IF EXISTS '.$cadidate_x.';';
							$sql .= 'DROP TABLE IF EXISTS '.$votes_y.';';
							
							
							var_dump($sql);
							if ($conn->multi_query($sql) === TRUE) {
								echo "Record deleted successfully";
							} else {
								echo "Error deleting record: " . $conn->error;
							}
			
			
 
	 /*
	 
	 $query="INSERT INTO `voting_events`(`event_name`, `event_keyword_url`, `event_available`) VALUES  ('".$_POST['event_name']."','".$_POST['event_keyname']."','".$_POST['event_classes_avl']."');"; 
	 
	 $query .= "create table votes_".$_POST['event_keyname']." like votes_housecaptain;";


	 $query .= "create table cadidates_".$_POST['event_keyname']." like cadidates_housecaptain;";
	 
	
 if($conn->multi_query($query)){
		 header('Location: '.basename($_SERVER['PHP_SELF']).'?alldone' );
		 echo 'Good to go';
	 }else{echo 'Hay una problema<br>'.$conn->error;}
	 
	 */

   }
   
   
   if(isset($_GET['alldone'])){
	   		 echo 'Good to go';

   }
 



}
?>



