<?php 

include('db_auth.php');
?>



<?php

if(isset($_SESSION['SBSEVOTE_SESS_ID'])){
$login=1;
header('Location: home.php');
}else{
	$login=0;
	
}
?>



<?php if(isset($_SESSION['SESS_MEMBER_ID'])){ /*echo "You are  logged in as ".$_SESSION['SESS_NAME']." And House is ".$_SESSION['SESS_HOUSE']."";*/  header('Location: logout.php');} ?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>SBSVOTE | LOGIN</title>

  <link rel='stylesheet' href='CSSJSMI/CSS/jquery-ui.css'>

    <link rel="stylesheet" href="CSSJSMI/CSS/style.css" media="screen" type="text/css" />
    <link rel="shortcut icon" href="IGJH3084JG/logo.png" />    

	<script src="CSSJSMI/JS/jquery.min.js"></script>
<style>
body{
	background-image:url(IGJH3084JG/bg.png);
	
}

</style>
    </head>

	<body>
<div class="cover">

</div>
<?php if(isset($_GET['errflag_li'])){
	$dispmsg = 'Incorrect password or admission number'; 
echo '

<div class="login-card" style="padding-top:0; padding-bottom:0;">
	<div align="center">
    	<h4 class="ui-state-error-text ">'.$dispmsg.'</h4>
	</div>
</div> ';

}?>


<?php if(isset($_GET['errflag_li_notelig'])){
	$dispmsg = 'E-Vote not Eligeibal for your class'; 
echo '

<div class="login-card" style="padding-top:0; padding-bottom:0;">
	<div align="center">
    	<h4 class="ui-state-error-text ">'.$dispmsg.'</h4>
	</div>
</div> ';

}?>


<?php if(isset($_GET['yeahvtdlst'])){
	$dispmsg = ''; 
echo '
<div class="login-card fooler">
	<div align="center" >
		<h3>You have succesfully Voted</h3>
	</div>
</div>
<script>
var delay=3000; //1 seconds

setTimeout(function(){
  $(".fooler").fadeOut();
}, delay); 
</script>
 ';

}?>
  <div class="login-card">
  	<div align="center">
    	<img class="ui-icon-image" src="IGJH3084JG/logo.png" />
	</div>
    <h1>SbS E-Vote</h1><br>
  
  <form action="master_action.php" method="post" class="form-1">
  	
    <input  required type="text" name="uid" style="width:100%;" id='replication_form_id' class="input-mn_23-c" maxlength="48" placeholder="Admission Number">

<br>
  <select name="us_ty" class="form" required style="width:100%;">
  	<option value="1" selected>Student</option>
    <option value="2">Staff</option>
  </select> 
    
      
                        
					
    <script type="text/javascript">
							$(function(){
								$('.input-294uhty289h1, .input-294uhty289h2, .input-294uhty289h3').keyup(function(e){
									if($(this).val().length==$(this).attr('maxlength'))
										$(this).next(':input').focus()
								})
							})
						</script>
                        <p> Date of Birth(yyyy   mm   dd)</p>
    <input required id="input-294uhty289h-less-width" style="width:32%" class="input-294uhty289h1" maxlength="4" min="1900" type="number" name="year" placeholder="yyyy">
	<input required id="input-294uhty289h-less-width" style="width:32%"  class="input-294uhty289h2" maxlength="2" min="01" type="number" name="month" placeholder="mm">
	<input required id="input-294uhty289h-less-width" style="width:32%"  class="input-294uhty289h3" maxlength="2" min="01" type="number" name="day" placeholder="dd">
    
    <input style="cursor:pointer" type="submit" name="login" class="login login-submit" value="Click to Login">
    
  </form>

</div>
<div class="login-card" style="padding-top:0; padding-bottom:0;">
	<?php if(isset($_SESSION['SESS_MEMBER_ID'])){echo "You are  logged in as ".$_SESSION['SESS_NAME']." And House is ".$_SESSION['SESS_HOUSE']."";} ?>
	<div align="center">
        <div id="imgsrcdiv">
        </div>
			<script><?php ?>
 
 
  var admisno = document.getElementsByName('uid');
                                    
                                    $("#replication_form_id").keyup(function() {
                                        admisno.value = this.value;
                                        if(admisno.value === " " || admisno.value === ""){
                                                $('#imgsrcdiv').html( '' );
                                            }
											
                                        else if(admisno.value == "7895212451451245" ){
                                            $('#imgsrcdiv').html( '<img src="http://stepsys.org/files/images/stu_pics/741_<?php echo $sbssessid; ?>.jpg" />');
                                            }
											
                                        else{
                                          
                                          
                                          
                                          
function myCallback(url, answer) {
   $('#imgsrcdiv').html( '<img src="http://stepsys.org/files/images/stu_pics/'+admisno.value+'_<?php echo $sbssessid; ?>.jpg" />');
  return true;
  
}
           function myCallbackFalse( answer) {
   $('#imgsrcdiv').html( '');
  return false;
  
}

function IsValidImageUrl(url, callback) {
    var img = new Image();
    img.onerror = function() {myCallbackFalse(url)   }
    img.onload =  function() { callback(url, 'true'); }
    img.src = url
}


IsValidImageUrl('http://stepsys.org/files/images/stu_pics/'+admisno.value+'_<?php echo $sbssessid; ?>.jpg', myCallback);
                                          
                                       
                                          
                                          
                                        }
                                    });















           
            </script>
	</div>
</div>
<div align="center" style="bottom: 0px;
position: fixed;
background-color: #FFF;
width: 100%;">
Web App Designed by Ayan Ahmad of Class 10-A

</div>

</body>

</html>

