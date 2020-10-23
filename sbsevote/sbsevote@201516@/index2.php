
<?php 
require_once('config.php');
?><?php if(isset($_SESSION['SESS_MEMBER_ID'])){ /*echo "You are  logged in as ".$_SESSION['SESS_NAME']." And House is ".$_SESSION['SESS_HOUSE']."";*/  header('Location: logout.php');} ?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>SBSVOTE | LOGIN</title>

  <link rel='stylesheet' href='CSSJSMI/CSS/jquery-ui.css'>

    <link rel="stylesheet" href="CSSJSMI/CSS/style.css" media="screen" type="text/css" />
    <link rel="shortcut icon" href="http://sbs-school.org/img/works/sbs_noida_logo.jpg" />    
	<script src="CSSJSMI/JS/jquery.min.js"></script>
    </head>

<body>
<?php if(isset($_GET['errflag_li'])){
	$dispmsg = 'Incorrect password or admission number. Re-enter'; 
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
    	<img class="ui-icon-image" src="http://sbs-school.org/img/works/sbs_noida_logo.jpg" />
	</div>
    <h1>SbS E-Vote</h1><br>
  
  <form action="student-login-exec.php" method="get" class="form-1">
  	
    <input type="text" name="uid" style="width:100%;" id='replication_form_id' class="input-mn_23-c" maxlength="48" placeholder="Admission Number">
      
                        
					
    <script type="text/javascript">
							$(function(){
								$('.input-294uhty289h1, .input-294uhty289h2, .input-294uhty289h3').keyup(function(e){
									if($(this).val().length==$(this).attr('maxlength'))
										$(this).next(':input').focus()
								})
							})
						</script>
    <input id="input-294uhty289h-less-width" width="33%" class="input-294uhty289h1" maxlength="4" min="1995" type="text" name="year" placeholder="Year">
	<input id="input-294uhty289h-less-width" class="input-294uhty289h2" maxlength="2" min="01" type="text" name="month" placeholder="Month">
	<input id="input-294uhty289h-less-width" class="input-294uhty289h3" maxlength="2" min="01" type="text" name="day" placeholder="Day">
    
    <input style="cursor:pointer" type="submit" name="login" class="login login-submit" value="Click to Login">
    
  </form>

</div>
 <?php if(isset($_GET['msg'])){ echo '
<div class="login-card" style="padding-top:0; padding-bottom:0;">
	<div align="justify">
    	Special:<br>
			1.SQL Querries<input type="checkbox" checked /><br>
			2.Clear DB<input type="checkbox" /><br>
            3.Finalise colors<input type="checkbox" /><br>
            4.Theme<input type="checkbox" /><br>
            5.For Logo ?show_sbslogo<input type="checkbox" /><br>
            6.For errmsg ?errflag_li<input type="checkbox" /><br>
            7.For Voting ?show_voting<input type="checkbox" /><br>
            8.To Remove me ?rem_devmsg<input type="checkbox" /><br>
            9.after completion remove all <input type="checkbox" /><br>
            10.On post pics and admisno on the pics anchor<input type="checkbox" /><br>
    </div>
</div>
';} ?>
<div class="login-card" style="padding-top:0; padding-bottom:0;">
	<?php if(isset($_SESSION['SESS_MEMBER_ID'])){echo "You are  logged in as ".$_SESSION['SESS_NAME']." And House is ".$_SESSION['SESS_HOUSE']."";} ?>
	<div align="center">
        <div id="imgsrcdiv">
        </div>
			<script>
                                    var admisno = document.getElementsByName('uid');
                                    
                                    $("#replication_form_id").keyup(function() {
                                        admisno.value = this.value;
                                        if(admisno.value == ''){
                                                $('#imgsrcdiv').html( '' );
                                            }
											
                                        if(admisno.value == "7895212451451245" ){
                                            $('#imgsrcdiv').html( '<img src="http://stepsys.org/images/stu_pics/741_8.jpg" />');
                                            }
											
                                        else{
                                        $('#imgsrcdiv').html( '<img src="http://stepsys.org/images/stu_pics/'+admisno.value+'_8.jpg" />');
                                        }
                                    });
            </script>
	</div>
</div>
<div align="center" style="bottom: 0px;
position: fixed;
background-color: #FFF;
width: 100%;">
Website Designed by Ayan Ahmad of Class 9-A. In case of any Errors Contact me at anonymous.code.anonymous@gmail.com

</div>

</body>

</html>
